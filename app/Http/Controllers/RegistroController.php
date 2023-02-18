<?php

namespace App\Http\Controllers;

use App\Registro;
use App\Documentos;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RegistroController extends Controller
{
    public function create()
    {
        $Departamento = DB::select("SELECT DISTINCT departamento FROM ciudades ORDER BY departamento ASC");
        return view('formulario.index')->with('Departamento', $Departamento);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Result = DB::table('users')->select('name')->where('identificacion', $request->NumeroIdentificacion)->first();

        //dd(isset($Result->name));
        if (isset($Result->name) == false) {

            $TarjetaProfesional = $request->file('AdjuntoTarjetaProfesional');
            $RutaTarjetaProfesional = 'storage/file-registro/' . $request->NumeroIdentificacion . '/' . $TarjetaProfesional->getClientOriginalName();
            Storage::disk('file-registro')->putFileAs('soporte_AdjuntoTarjetaProfesional_' . $request->NumeroIdentificacion, $request->file('AdjuntoTarjetaProfesional'), $TarjetaProfesional->getClientOriginalName());

            $GuiaRegistro = $request->file('DocumentoGuiaRegistro');
            $RutaGuiaRegistro = 'storage/file-registro/' . $request->NumeroIdentificacion . '/' . $GuiaRegistro->getClientOriginalName();
            Storage::disk('file-registro')->putFileAs('Soporte_DocumentoGuiaRegistro_' . $request->NumeroIdentificacion, $request->file('DocumentoGuiaRegistro'), $GuiaRegistro->getClientOriginalName());

            $Registro = new Registro();
            $Registro->Nombre = $request->Nombre;
            $Registro->Apellido = $request->Apellido;
            $Registro->AdjuntarFoto = null;
            $Registro->TipoIdentificacion = $request->TipoIdentificacion;
            $Registro->NumeroIdentificacion = $request->NumeroIdentificacion;
            $Registro->DirreccionResidencia = $request->DirreccionResidencia;
            $Registro->FechaExpedicion = $request->FechaExpedicion;
            $Registro->Departamento = $request->departamento;
            $Registro->Ciudad = $request->ciudad;
            $Registro->Celular = $request->Celular;
            $Registro->TelefonoFijo = $request->TelefonoFijo;
            $Registro->TarjetaProfesional = $request->TarjetaProfesional;
            $Registro->AdjuntoTarjetaProfesional = $RutaTarjetaProfesional;
            $Registro->DescripcionPerfil = $request->DescripcionPerfil;
            $Registro->NGuiaRegistro = $request->NGuiaRegistro;
            $Registro->DocumentoGuiaRegistro = $RutaGuiaRegistro;
            $Registro->Terminos = $request->AceptarTerminos;
            $Registro->save();

            $user = new User();
            $user->name = $request->Nombre . " " . $request->Apellido;
            $user->identificacion = $request->NumeroIdentificacion;
            $user->email = $request->Correo;
            $user->password = bcrypt($request->Contraseña);
            $user->save();

            toastr()->success('Data has been saved successfully!');
            return redirect()->back();
        } else {
            toastr()->error('Lo siento! Ya Existe un registro con su informacion!');
            return redirect()->back();
        }

/*
        if ($request->Guia == "SI") {

            $ruta_arch = $_FILES['AdjuntarFoto']['tmp_name'];
            $nombre_arch = $_FILES['AdjuntarFoto']['name'];
            $nueva_ruta = "file-registro/" . $nombre_arch;

            $ruta_arch2 = $_FILES['AdjuntoTarjetaProfesional']['tmp_name'];
            $nombre_arch2 = $_FILES['AdjuntoTarjetaProfesional']['name'];
            $nueva_ruta2 = "file-registro/" . $nombre_arch2;

            $ruta_arch3 = $_FILES['DocumentoGuiaRegistro']['tmp_name'];
            $nombre_arch3 = $_FILES['DocumentoGuiaRegistro']['name'];
            $nueva_ruta3 = "file-registro/" . $nombre_arch3;

            Move_uploaded_file($ruta_arch, $nueva_ruta);
            Move_uploaded_file($ruta_arch2, $nueva_ruta2);
            Move_uploaded_file($ruta_arch3, $nueva_ruta3);

            $ruta_arch4 = $_FILES['CertificadoAsociacion']['tmp_name'];
            $nombre_arch4 = $_FILES['CertificadoAsociacion']['name'];
            $nueva_ruta4 = "file-registro/" . $nombre_arch4;
            Move_uploaded_file($ruta_arch4, $nueva_ruta4);


            foreach ($_FILES["CertificadosPDFIdiomas"]["error"] as $key => $error) {
                if ($error == UPLOAD_ERR_OK) {
                    $tmp_name = $_FILES["CertificadosPDFIdiomas"]["tmp_name"][$key];
                    $name = $_FILES["CertificadosPDFIdiomas"]["name"][$key];
                    move_uploaded_file($tmp_name, "$uploads_dir/$name");

                    DB::beginTransaction();
                    try {
                        $error = new Documentos();
                        $error->usuario = $NumeroIdentificacion;
                        $error->titulo = $TituloCertificadosIdiomas[$key];
                        $error->categoria = 'Certificado de Idiomas';
                        $error->documento = "$uploads_dir/$name";
                        $error->save();

                        DB::commit();
                        // all good
                    } catch (\Exception $e) {
                        DB::rollback();
                        // something went wrong
                    }
                }
            }

            foreach ($_FILES["CertificadosPDFAcademicos"]["error"] as $key => $error) {
                if ($error == UPLOAD_ERR_OK) {
                    $tmp_name = $_FILES["CertificadosPDFAcademicos"]["tmp_name"][$key];
                    $name = $_FILES["CertificadosPDFAcademicos"]["name"][$key];
                    move_uploaded_file($tmp_name, "$uploads_dir/$name");

                    DB::beginTransaction();
                    try {
                        // CERTIFICADOS DE ACADEMICOS
                        $Registro = new Documentos();
                        $Registro->usuario = $NumeroIdentificacion;
                        $Registro->titulo = $TituloCertificadosAcademicos[$key];
                        $Registro->categoria = 'Certificado Academicos';
                        $Registro->documento = "$uploads_dir/$name";
                        $Registro->save();
                        DB::commit();
                        // all good
                    } catch (\Exception $e) {
                        DB::rollback();
                        // something went wrong
                    }
                }
            }

            foreach ($_FILES["CertificadosPDFEstudios"]["error"] as $key => $error) {
                if ($error == UPLOAD_ERR_OK) {
                    $tmp_name = $_FILES["CertificadosPDFEstudios"]["tmp_name"][$key];
                    $name = $_FILES["CertificadosPDFEstudios"]["name"][$key];
                    move_uploaded_file($tmp_name, "$uploads_dir/$name");

                    DB::beginTransaction();
                    try {
                        // CERTIFICADOS DE ESTUDIOS
                        $Registro = new Documentos();
                        $Registro->usuario = $NumeroIdentificacion;
                        $Registro->titulo = $TituloCertificadosEstudios[$key];
                        $Registro->categoria = 'Certificado de Estudios';
                        $Registro->documento = "$uploads_dir/$name";
                        $Registro->save();
                        DB::commit();
                        // all good
                    } catch (\Exception $e) {
                        DB::rollback();
                        // something went wrong
                    }
                }
            }
        } else {

            $ruta_arch = $_FILES['AdjuntarFoto']['tmp_name'];
            $nombre_arch = $_FILES['AdjuntarFoto']['name'];
            $nueva_ruta = "file-registro/" . $nombre_arch;

            $ruta_arch2 = $_FILES['AdjuntoTarjetaProfesional']['tmp_name'];
            $nombre_arch2 = $_FILES['AdjuntoTarjetaProfesional']['name'];
            $nueva_ruta2 = "file-registro/" . $nombre_arch2;

            $ruta_arch3 = $_FILES['DocumentoGuiaRegistro']['tmp_name'];
            $nombre_arch3 = $_FILES['DocumentoGuiaRegistro']['name'];
            $nueva_ruta3 = "file-registro/" . $nombre_arch3;

            Move_uploaded_file($ruta_arch, $nueva_ruta);
            Move_uploaded_file($ruta_arch2, $nueva_ruta2);
            Move_uploaded_file($ruta_arch3, $nueva_ruta3);

            $Registro = new Registro();
            $Registro->Nombre = $Nombre;
            $Registro->Apellido = $Apellido;
            $Registro->AdjuntarFoto = $nueva_ruta;
            $Registro->TipoIdentificacion = $TipoIdentificacion;
            $Registro->NumeroIdentificacion = $NumeroIdentificacion;
            $Registro->DirreccionResidencia = $DirreccionResidencia;
            $Registro->Departamento = $departamento;
            $Registro->Ciudad = $ciudad;
            $Registro->Celular = $Celular;
            $Registro->TelefonoFijo = $TelefonoFijo;
            $Registro->TarjetaProfesional = $TarjetaProfesional;
            $Registro->AdjuntoTarjetaProfesional = $nueva_ruta2;
            $Registro->DescripcionPerfil = $DescripcionPerfil;
            $Registro->NGuiaRegistro = $NGuiaRegistro;
            $Registro->DocumentoGuiaRegistro = $nueva_ruta3;
            $Registro->Guia = $Guia;
            $Registro->Terminos = $AceptarTerminos;
            $Registro->save();

            $user = new User();
            $user->name = $Nombre . " " . $Apellido;
            $user->identificacion = $NumeroIdentificacion;
            $user->email = $Correo;
            $user->password = bcrypt($Contraseña);
            $user->save();


            foreach ($_FILES['CertificadosPDFIdiomas']['error'] as $key => $error) {
                if ($error == UPLOAD_ERR_OK) {
                    $tmp_name = $_FILES["CertificadosPDFIdiomas"]["tmp_name"][$key];
                    $name = $_FILES["CertificadosPDFIdiomas"]["name"][$key];
                    move_uploaded_file($tmp_name, "$uploads_dir/$name");

                    DB::beginTransaction();
                    try {
                        // CERTIFICADOS DE IDIOMAS
                        $Registro = new Documentos();
                        $Registro->usuario = $NumeroIdentificacion;
                        $Registro->titulo = $TituloCertificadosIdiomas[$key];
                        $Registro->categoria = 'Certificado de Idiomas';
                        $Registro->documento = "$uploads_dir/$name";
                        $Registro->save();
                        DB::commit();
                        // all good
                    } catch (\Exception $e) {
                        DB::rollback();
                        // something went wrong
                    }
                }
            }

            foreach ($_FILES['CertificadosPDFAcademicos']['error'] as $key => $error) {
                if ($error == UPLOAD_ERR_OK) {
                    $tmp_name = $_FILES["CertificadosPDFAcademicos"]["tmp_name"][$key];
                    $name = $_FILES["CertificadosPDFAcademicos"]["name"][$key];
                    move_uploaded_file($tmp_name, "$uploads_dir/$name");

                    DB::beginTransaction();
                    try {
                        // CERTIFICADOS DE ACADEMICOS
                        $Registro = new Documentos();
                        $Registro->usuario = $NumeroIdentificacion;
                        $Registro->titulo = $TituloCertificadosAcademicos[$key];
                        $Registro->categoria = 'Certificado Academicos';
                        $Registro->documento = "$uploads_dir/$name";
                        $Registro->save();
                        DB::commit();
                        // all good
                    } catch (\Exception $e) {
                        DB::rollback();
                        // something went wrong
                    }
                }
            }

            foreach ($_FILES['CertificadosPDFEstudios']['error'] as $key => $error) {
                if ($error == UPLOAD_ERR_OK) {
                    $tmp_name = $_FILES["CertificadosPDFEstudios"]["tmp_name"][$key];
                    $name = $_FILES["CertificadosPDFEstudios"]["name"][$key];
                    move_uploaded_file($tmp_name, "$uploads_dir/$name");

                    DB::beginTransaction();
                    try {
                        // CERTIFICADOS DE ESTUDIOS
                        $Registro = new Documentos();
                        $Registro->usuario = $NumeroIdentificacion;
                        $Registro->titulo = $TituloCertificadosEstudios[$key];
                        $Registro->categoria = 'Certificado de Estudios';
                        $Registro->documento = "$uploads_dir/$name";
                        $Registro->save();
                        DB::commit();
                        // all good
                    } catch (\Exception $e) {
                        DB::rollback();
                        // something went wrong
                    }
                }
            }
        }
*/
    }

    public function filtrar(Request $request)
    {
        $request->ciudad;
        $html = null;
        $ciudad = DB::select("SELECT ciudad FROM ciudades WHERE departamento='$request->departamento' ORDER BY ciudad ASC");
        foreach ($ciudad as $key => $value) {
            $selected = ($value->ciudad == $request->ciudad) ? 'selected="selected"' : '';
            $html .= '<option value="' . $value->ciudad . '"  ' . $selected . '>' . $value->ciudad . '</option>';
        }
        return $html;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $registro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro $registro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registro $registro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro $registro)
    {
        //
    }
}
