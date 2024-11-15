<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Models\User;

class UsersController extends Controller
{

    // Function for export users
    public function export() {

        return Excel::download(new UsersExport,'users.xlsx');

    }

    // Function for import users
    public function import()
    {
        Excel::import(new UsersImport, 'users.xlsx');

        return redirect('/')->with('success', 'All good!');
    }

    // View Form
    public function showimportform()
    {
        return view('importusers');
    }


    //Import file from form
    public function usersimportform (Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            Excel::import(new UsersImport, $file);
            return redirect()->back()->with('success', 'Importación completada');
        }

        return redirect()->back()->with('error', 'No se ha seleccionado un archivo para importar');
    }


    // view users
    public function index()
    {
        $users = User::paginate(15);
        return view('users',compact('users'));
    }

}
