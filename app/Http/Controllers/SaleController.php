<?php

namespace App\Http\Controllers;

use App\Exports\SalesExport;
use App\Imports\SalesImport;
use App\Models\Sale;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SaleController extends Controller
{

      // Function for export users
      public function export() {

        return Excel::download(new SalesExport,'users.xlsx');

    }


    // Function for import users
    public function import()
    {
        Excel::import(new SalesImport, 'sales.xlsx');

        return redirect('/')->with('success', 'All good!');
    }

     // View Form
     public function showsalesimport()
     {
         return view('importsales');
     }


      //Import file from form
    public function salesimportform (Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            Excel::import(new SalesImport, $file);
            return redirect()->back()->with('success', 'Importación completada');
        }

        return redirect()->back()->with('error', 'No se ha seleccionado un archivo para importar');
    }

     // view sales
    public function index()
    {
        $sales = Sale::paginate(15);
        return view('sales',compact('sales'));
    }

}
