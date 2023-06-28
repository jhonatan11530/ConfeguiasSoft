<?php

namespace App\Http\Controllers;

use App\Mail\MailRegistroCorrecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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
        $data ="SEÑOR USUARIO USTED SE ACABA DE REGISTRAR CORRECTAMENTE EN CONFIGUIAS";
        Mail::to($request->Correo)->send(new MailRegistroCorrecto($data));

        return redirect('https://www.confeguias.com/');
    }
}
