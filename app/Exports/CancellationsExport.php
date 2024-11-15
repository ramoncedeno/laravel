<?php

namespace App\Exports;

use App\Models\Cancellation;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CancellationsExport implements FromCollection,WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Cancellation::all();
    }


    // heading columns file export Sales
    public function headings(): array
    {
        return [

            'cancellation_card_number',
            'cancellation_costumer_name',
            'cancellation_sales_date',
            'cancellation_employee_user_sunneljs',
            'cancellation_employee_user_sunnelarca',
            'cancellation_employee_name',
            'cancellation_employee_number',
            'cancellation_trade_name',
            'cancellation_product_number',
            'cancellation_product_name',
            'cancellation_product_status',
            'cancellation_product_status_date',
            'cancellation_product_billed_periods',
            'cancellation_cancellation_date',
            'cancellation_employee_cancellationusersunneljs',
            'cancellation_employee_cancellationname',
            'cancellation_employee_cancellationnumber',
            'cancellation_employee_cancellationusersunnelarca',

        ];
    }

    // Mapping columns file export Sales

    public function map($cancellation): array

    {
        return [

            $cancellation->cancellation_card_number,
            $cancellation->cancellation_costumer_name,
            $cancellation->cancellation_sales_date,
            $cancellation->cancellation_employee_user_sunneljs,
            $cancellation->cancellation_employee_user_sunnelarca,
            $cancellation->cancellation_employee_name,
            $cancellation->cancellation_employee_number,
            $cancellation->cancellation_trade_name,
            $cancellation->cancellation_product_number,
            $cancellation->cancellation_product_name,
            $cancellation->cancellation_product_status,
            $cancellation->cancellation_product_status_date,
            $cancellation->cancellation_product_billed_periods,
            $cancellation->cancellation_cancellation_date,
            $cancellation->cancellation_employee_cancellationusersunneljs,
            $cancellation->cancellation_employee_cancellationname,
            $cancellation->cancellation_employee_cancellationnumber,
            $cancellation->cancellation_employee_cancellationusersunnelarca,

        ];
    }

}
