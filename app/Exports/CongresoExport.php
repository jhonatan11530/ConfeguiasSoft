<?php

namespace App\Exports;

use App\gremios;
use Maatwebsite\Excel\Concerns\FromCollection;

class CongresoExport implements FromCollection
{
    public function collection()
    {
        return gremios::all();
    }
}
