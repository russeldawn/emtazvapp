<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use App\Model\ProjectType;

class ProjectTypeImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return ProjectType|null
     */
    public function model(array $row)
    {
        return new ProjectType([
            'projecttypeid' => $row[0],
            'projectname' => $row[1],
            'projecttype' => $row[2]
        ]);
    }
}
