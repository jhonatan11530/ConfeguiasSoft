<?php

namespace App\Http\Controllers;

use App\Registro;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    function index()
    {
       $RegistroUsuario = Registro::all();
       return view('Dashboard.Inicio.index',compact('RegistroUsuario'));
    }
    function pdf($id)
    {
        $Registro = Registro::find($id);

        $pdf = \PDF::loadView('Dashboard.PlantillaPDF.plantilla',compact('Registro'));
        return $pdf->stream();
    }
}
