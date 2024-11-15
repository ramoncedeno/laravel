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
        Schema::create('cancellations', function (Blueprint $table) {
            $table->id();
            $table->string('cancellation_card_number')->nullable();
            $table->string('cancellation_costumer_name')->nullable();
            $table->string('cancellation_sales_date')->nullable();
            $table->string('cancellation_employee_user_sunneljs')->nullable();
            $table->string('cancellation_employee_user_sunnelarca')->nullable();
            $table->string('cancellation_employee_name')->nullable();
            $table->string('cancellation_employee_number')->nullable();
            $table->string('cancellation_trade_name')->nullable();
            $table->string('cancellation_product_number')->nullable();
            $table->string('cancellation_product_name')->nullable();
            $table->string('cancellation_product_status')->nullable();
            $table->string('cancellation_product_status_date')->nullable();
            $table->string('cancellation_product_billed_periods')->nullable();
            $table->string('cancellation_cancellation_date')->nullable();
            $table->string('cancellation_employee_cancellationusersunneljs')->nullable();
            $table->string('cancellation_employee_cancellationname')->nullable();
            $table->string('cancellation_employee_cancellationnumber')->nullable();
            $table->string('cancellation_employee_cancellationusersunnelarca')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cancellations');
    }
};
