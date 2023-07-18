<?php

namespace App\Http\Controllers;

use App\Exports\CongresoExport;
use App\Exports\GuiasExport;
use App\gremios;
use App\Registro;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
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

    public function ExportGuias(){

        return  Excel::download(new GuiasExport, 'Guias.xlsx');

      }

    public function ExportGremio(){

      return  Excel::download(new CongresoExport, 'Congreso.xlsx');

    }
}
