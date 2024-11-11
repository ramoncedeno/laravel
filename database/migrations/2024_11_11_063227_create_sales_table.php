<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('sales_card_number')->nullable();
            $table->string('sales_costumer_name')->nullable();
            $table->timestamp('sales_costumer_date')->nullable();
            $table->string('sales_cosumer_contract')->nullable();
            $table->string('sales_acount')->nullable();
            $table->timestamp('sales_sale_date')->nullable();
            $table->string('sales_employee_user')->nullable();
            $table->string('sales_employee_name')->nullable();
            $table->string('sales_trade_name')->nullable();
            $table->string('sales_product_number')->nullable();
            $table->string('sales_product_name')->nullable();
            $table->string('sales_employee_number')->nullable();
            $table->string('sales_employee_usersunnel')->nullable();
            $table->timestamps();

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
