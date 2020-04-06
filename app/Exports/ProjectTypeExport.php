<?php

namespace App\Exports;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Model\ProjectType;

class ProjectTypeExport implements FromCollection
{
    public function collection()
    {
        return ProjectType::all();
    }
}
