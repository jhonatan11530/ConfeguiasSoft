<?php

namespace App\Http\Controllers;

use App\Registro;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
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
        
        Artisan::call('storage:link');

        dd(isset($Result->name));
        if (isset($Result->name) == false) {

            $TarjetaProfesional = $request->file('AdjuntoTarjetaProfesional');
            $RutaTarjetaProfesional = 'storage/file-registro/' . $request->NumeroIdentificacion . '/' . $TarjetaProfesional->getClientOriginalName();
            Storage::disk('file-registro')->putFileAs('soporte_AdjuntoTarjetaProfesional_' . $request->NumeroIdentificacion, $request->file('AdjuntoTarjetaProfesional'), $TarjetaProfesional->getClientOriginalName());

            $GuiaRegistro = $request->file('DocumentoGuiaRegistro');
            $RutaGuiaRegistro = 'storage/file-registro/' . $request->NumeroIdentificacion . '/' . $GuiaRegistro->getClientOriginalName();
            Storage::disk('file-registro')->putFileAs('Soporte_DocumentoGuiaRegistro_' . $request->NumeroIdentificacion, $request->file('DocumentoGuiaRegistro'), $GuiaRegistro->getClientOriginalName());

            $AdjuntarFoto = $request->file('AdjuntarFoto');
            $RutaAdjuntarFoto = 'storage/file-registro/' . $request->NumeroIdentificacion . '/' . $AdjuntarFoto->getClientOriginalName();
            Storage::disk('file-registro')->putFileAs('soporte_AdjuntoFotoDocumento_' . $request->NumeroIdentificacion, $request->file('AdjuntarFoto'), $AdjuntarFoto->getClientOriginalName());

            $Registro = new Registro();
            $Registro->Nombre = $request->Nombre;
            $Registro->Apellido = $request->Apellido;
            $Registro->AdjuntarFoto = $RutaAdjuntarFoto;
            $Registro->TipoIdentificacion = $request->TipoIdentificacion;
            $Registro->NumeroIdentificacion = $request->NumeroIdentificacion;
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



            toastr()->success('Los datos se han guardado con éxito!');
            return redirect()->back();
        } else {
            toastr()->error('Lo siento! Ya Existe un registro con su informacion!');
            return redirect()->back();
        }
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
