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

        'sales_card_number',
        'sales_costumer_name',
        'sales_costumer_date',
        'sales_cosumer_contract',
        'sales_acount',
        'sales_sale_date',
        'sales_employee_user',
        'sales_employee_name',
        'sales_trade_name',
        'sales_product_number',
        'sales_product_name',
        'sales_employee_number',
        'sales_employee_usersunnel',

        ];
    }

    // Mapping columns file export Sales

    public function map($sale): array

    {
        return [

        $sale->sales_card_number,
        $sale->sales_costumer_name,
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
