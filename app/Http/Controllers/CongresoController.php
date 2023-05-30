<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CongresoController extends Controller
{
    public function index()
    {
        return view('Congreso.index');
    }

    public function store(Request $request)
    {
        if ($request->opcion=="Si") {

            DB::table('congreso')->insert([
                'Nombre' => $request->Nombre,
                'Apellido' => $request->Apellido,
                'Tipo' => $request->Tipo,
                'Correo' => $request->Correo,
                'opcion' => $request->opcion,
                'asociacion' => ($request->asociacion)? $request->asociacion: null ,
                'created_at' => new \Datetime(),
                'updated_at' => new \Datetime(),
            ]);

        } else {

            DB::table('congreso')->insert([
                'Nombre' => $request->Nombre,
                'Apellido' => $request->Apellido,
                'Tipo' => $request->Tipo,
                'Correo' => $request->Correo,
                'opcion' => $request->opcion,
                'asociacion' => ($request->asociacion)? $request->asociacion: null ,
                'created_at' => new \Datetime(),
                'updated_at' => new \Datetime(),
            ]);

        }


        return redirect('https://www.confeguias.com/');
    }
}
