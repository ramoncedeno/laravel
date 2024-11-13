<?php

namespace App\Http\Controllers;

use App\Exports\SalesExport;
use App\Imports\SalesImport;
use App\Models\Sale;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SaleController extends Controller
{

      // Function for export sales
      public function export() {

        return Excel::download(new SalesExport,'sales.xlsx');

    }


    // Function for import sales
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
    // public function index()
    // {
    //     $sales = Sale::paginate(15);
    //     return view('sales',compact('sales'));
    // }

        // view sales without null
    public function index()
    {
        // Filtrar los registros donde al menos un campo relevante no sea nulo
        $sales = Sale::whereNotNull('sales_card_number')->paginate(5);

        return view('sales', compact('sales'));
}

}
