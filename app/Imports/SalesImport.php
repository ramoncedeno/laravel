<?php

namespace App\Imports;

use App\Models\Sale;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithStartRow;

class SalesImport implements ToModel,WithChunkReading,WithBatchInserts,ShouldQueue, WithStartRow
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
            'sales_card_number' => $row[0],
            'sales_costumer_name' => $row[1],
            'sales_costumer_date' => $row[2],
            'sales_cosumer_contract' => $row[3],
            'sales_acount' => $row[4],
            'sales_sale_date' => $row[5],
            'sales_employee_user' => $row[6],
            'sales_employee_name' => $row[7],
            'sales_trade_name' => $row[8],
            'sales_product_number' => $row[9],
            'sales_product_name' => $row[10],
            'sales_employee_number' => $row[11],
            'sales_employee_usersunnel' => $row[12]
        ]);
    }

            /*
                CAMPOS ARCHIVO ORIGEN:
                $row[0]'TARJETA
                $row[1]'TARJETAHABIENTE
                $row[2]'MIEMBRODESDE
                $row[3]'CONTRATO
                $row[4]'CUENTA
                $row[5]'FECHADEVENTA
                $row[6]'USUARIO
                $row[7]'EJECUTIVO
                $row[8]'TIENDA
                $row[9]'CLAVEPRODUCTO
                $row[10]'TIPOPROTECCI0N
                $row[11]'EMPLEADO
                $row[12]'USUARIOARCA
            */

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


    // allows you to start importing data by skipping the header from row 2
    public function startRow(): int
    {
        return 2;
    }

}

