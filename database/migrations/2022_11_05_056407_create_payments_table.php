<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->Integer('number');
            $table->bigInteger('membership_id')->unsigned();
            $table->date('date');
            $table->float('amount');
            $table->date('due_date');
            $table->bigInteger('payment_method')->unsigned();
            $table->bigInteger('invoice_id')->unsigned();
            $table->timestamps();
            $table->foreign('membership_id')->references('id')->on('members')->onDelete('cascade');
            $table->foreign('payment_method')->references('id')->on('payment_methods')->onDelete('cascade');
            $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
