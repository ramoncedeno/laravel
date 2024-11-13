<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use OwenIt\Auditing\Contracts\Auditable;

class Sale extends Authenticatable implements Auditable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    use \OwenIt\Auditing\Auditable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

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

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [

    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $cats = [

        'sales_card_number'=>'encrypted',




    ];


}
