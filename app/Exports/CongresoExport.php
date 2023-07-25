<?php

namespace App\Exports;

use App\Congreso;
use App\gremios;
use Maatwebsite\Excel\Concerns\FromCollection;

class CongresoExport implements FromCollection
{
    public function collection()
    {
        return Congreso::all();
    }
}
