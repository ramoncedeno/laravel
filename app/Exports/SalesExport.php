<?php

namespace App\Exports;

use App\Models\Sale;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SalesExport implements FromCollection,WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Sale::all();
    }


    // heading columns file export Sales
    public function headings(): array
    {
        return [
            'id',
            'name',
            'email',
            'created_at'
        ];
    }

    // Mapping columns file export Sales

    public function map($sale): array

    {
        return [

            $sale->sales_costumer_date,
            $sale->sales_cosumer_contract,
            $sale->sales_acount,
            $sale->sales_sale_date,
            $sale->sales_employee_user,
            $sale->sales_employee_name,
            $sale->sales_trade_name,
            $sale->sales_product_number,
            $sale->sales_product_name,
            $sale->sales_employee_number,
            $sale->sales_employee_usersunnel,

        ];
    }


}
