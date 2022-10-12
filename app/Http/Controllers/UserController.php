<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Imports\RegisterUsersImport;


class UserController extends Controller
{
    public function importUsers()
    {
        return view('admin.users.import');
    }

    public function uploadUsers(Request $request)
    {
        Excel::import(new RegisterUsersImport, $request->file);
        
        return Redirect()->back()->with('success','Slider updated Successfully');
    }

}
