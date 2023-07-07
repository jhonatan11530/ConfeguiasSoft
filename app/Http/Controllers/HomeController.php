<?php

namespace App\Http\Controllers;

use App\Registro;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
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

        $pdf = PDF::loadView('Dashboard.PlantillaPDF.Plantilla',compact('Registro'));
        return $pdf->stream();
    }
}
