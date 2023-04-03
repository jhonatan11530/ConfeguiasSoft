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

        $pdf = Pdf::loadView('Dashboard.PlantillaPDF.plantilla',compact('Registro'));
        return $pdf->stream();
    }
}
