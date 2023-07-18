<?php

namespace App\Exports;

use App\Registro;
use Maatwebsite\Excel\Concerns\FromCollection;

class GuiasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Registro::all();
    }
}
