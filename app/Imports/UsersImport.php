<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    /* Important: The fields on the left side correspond to the database and migrations.
     The fields on the right side correspond to the fields in the excel file.
     */

    public function model(array $row)
    {
        return new User([
            'name'     => $row['nombre'],
            'email'    => $row['correo'],
            'password' => $row['clave'],
        ]);
    }
}

