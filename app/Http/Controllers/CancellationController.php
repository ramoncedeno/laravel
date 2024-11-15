<?php

namespace App\Http\Controllers;

use App\Exports\CancellationsExport;
use App\Imports\CancellationsImport;
use App\Models\Cancellation;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CancellationController extends Controller
{


      // Function for export cancellations
      public function export() {

        return Excel::download(new CancellationsExport,'cancellations.xlsx');

    }


    // Function for import cancellations
    public function import()
    {
        Excel::import(new CancellationsImport, 'cancellations.xlsx');

        return redirect('/')->with('success', 'All good!');
    }

     // View Form
     public function showcancellationsimport()
     {
         return view('importcancellations');
     }


      //Import file from form
    public function cancellationsimportform (Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            Excel::import(new CancellationsImport, $file);
            return redirect()->back()->with('success', 'Importación completada');
        }

        return redirect()->back()->with('error', 'No se ha seleccionado un archivo para importar');
    }


        // view cancellations without null
    public function index()
    {
        // Filtrar los registros donde al menos un campo relevante no sea nulo
        $cancellations = Cancellation::whereNotNull('cancellation_card_number')->paginate(5);

        return view('cancellations', compact('cancellations'));
    }



}
