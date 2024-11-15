<?php

namespace App\Imports;

use App\Models\Cancellation;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithStartRow;

class CancellationsImport implements ToModel,WithChunkReading,WithBatchInserts,ShouldQueue, WithStartRow
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
        return new Cancellation([

            'cancellation_card_number'=>$row[0],
            'cancellation_costumer_name'=>$row[1],
            'cancellation_sales_date'=> $row[2],
            'cancellation_employee_user_sunneljs'=>$row[3],
            'cancellation_employee_user_sunnelarca'=>$row[4],
            'cancellation_employee_name'=>$row[5],
            'cancellation_employee_number'=>$row[6],
            'cancellation_trade_name'=>$row[7],
            'cancellation_product_number'=>$row[8],
            'cancellation_product_name'=>$row[9],
            'cancellation_product_status'=>$row[10],
            'cancellation_product_status_date'=>$row[11],
            'cancellation_product_billed_periods'=>$row[12],
            'cancellation_cancellation_date'=>$row[13],
            'cancellation_employee_cancellationusersunneljs'=>$row[14],
            'cancellation_employee_cancellationname'=>$row[15],
            'cancellation_employee_cancellationnumber'=>$row[16],
            'cancellation_employee_cancellationusersunnelarca'=>$row[17],

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


    // allows you to start importing data by skipping the header from row 2
    public function startRow(): int
    {
        return 2;
    }

}

