<?php

namespace App\Exports;

use App\Models\Pacientes;

use App\pacie;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportPacie implements FromCollection
{


    public function collection()
    {
        return Pacientes::all();
    }
}
