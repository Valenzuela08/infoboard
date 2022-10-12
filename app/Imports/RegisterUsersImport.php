<?php

namespace App\Imports;

use App\Models\RegisterUsers;
use Maatwebsite\Excel\Concerns\ToModel;

class RegisterUsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        $user = new RegisterUsers([
            'name'     => $row[0],
           'email'    => $row[1], 
           'user_type'    => $row[2], 
        ]);

        return $user;
    }
}
