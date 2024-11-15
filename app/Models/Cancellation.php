<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cancellation extends Model
{

    protected $fillable = [

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


    protected $hidden = [





    ];


    protected function casts(): array
    {
        return [

            'cancellation_card_number' => 'hashed',

        ];
    }







}
