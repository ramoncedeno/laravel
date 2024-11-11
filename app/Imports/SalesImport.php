<?php

namespace App\Imports;

use App\Http\Controllers\SaleController;
use App\Models\Sale;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SalesImport implements ToModel,WithHeadingRow,WithChunkReading,WithBatchInserts,ShouldQueue
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
        return new Sale([
            'sales_card_number' => $row['TARJETA'],
            'sales_costumer_name' => $row['TARJETAHABIENTE'],
            'sales_costumer_date' => $row['MIEMBRO'],
            'sales_cosumer_contract' => $row['CONTRATO'],
            'sales_acount' => $row['CUENTA'],
            'sales_sale_date' => $row['VENTA'],
            'sales_employee_user' => $row['USUARIO'],
            'sales_employee_name' => $row['EJECUTIVO'],
            'sales_trade_name' => $row['TIENDA'],
            'sales_product_number' => $row['CLAVEPRODUCTO'],
            'sales_product_name' => $row['TIPO'],
            'sales_employee_number' => $row['EMPLEADO'],
            'sales_employee_usersunnel' => $row['USUARIOARCA']
        ]);
    }

    // Chunk reading https://docs.laravel-excel.com/3.1/imports/chunk-reading.html

    public function chunkSize(): int
    {
        return 300;
    }

    // Batch inserts https://docs.laravel-excel.com/3.1/imports/batch-inserts.html

    public function batchSize(): int
    {
        return 6000;
    }

}

