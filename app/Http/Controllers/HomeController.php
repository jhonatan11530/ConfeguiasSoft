<?php

namespace App\Http\Controllers;

use App\Registro;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index()
    {
        $Congreso = DB::table('congreso')->get();
        $RegistroUsuario = Registro::all();
        return view('Dashboard.Inicio.index', compact('RegistroUsuario', 'Congreso'));
    }
    function pdf($id)
    {
        $Registro = Registro::find($id);

        $pdf = PDF::loadView('Dashboard.PlantillaPDF.Plantilla', compact('Registro'));
        return $pdf->stream();
    }
}
