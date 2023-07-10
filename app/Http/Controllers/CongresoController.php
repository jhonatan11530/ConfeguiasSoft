<?php

namespace App\Http\Controllers;

use App\gremios;
use App\Mail\MailRegistroCongreso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class CongresoController extends Controller
{
    public function index()
    {
        $Gremio = gremios::all();
        return view('Congreso.index', compact('Gremio'));
    }

    public function store(Request $request)
    {
        if ($request->opcion == "Si") {

            DB::table('congreso')->insert([
                'Nombre' => $request->Nombre,
                'Apellido' => $request->Apellido,
                'Tipo' => $request->Tipo,
                'Correo' => $request->Correo,
                'RNT' => $request->RNT,
                'Celular' => $request->Celular,
                'opcion' => $request->opcion,
                'asociacion' => $request->asociacion,
                'created_at' => new \Datetime(),
                'updated_at' => new \Datetime(),
            ]);

            Mail::to($request->Correo)->send(new MailRegistroCongreso());

            toastr()->success('Los datos se han guardado con éxito!');
            return redirect()->back();
        } else {

            DB::table('congreso')->insert([
                'Nombre' => $request->Nombre,
                'Apellido' => $request->Apellido,
                'Tipo' => $request->Tipo,
                'Correo' => $request->Correo,
                'RNT' => $request->RNT,
                'Celular' => $request->Celular,
                'opcion' => $request->opcion,
                'asociacion' => $request->asociacion,
                'created_at' => new \Datetime(),
                'updated_at' => new \Datetime(),
            ]);

            Mail::to($request->Correo)->send(new MailRegistroCongreso());
            
            toastr()->success('Los datos se han guardado con éxito!');
            return redirect()->back();
        }
    }

    public function ajax(Request $request)
    {
        $dato = DB::table('registro')->where('registro.NumeroIdentificacion', $request->id)->select('registro.id')->first();

        return ($dato) ? $dato->id : 0;
    }
}
