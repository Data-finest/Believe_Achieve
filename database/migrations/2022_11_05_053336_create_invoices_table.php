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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->Integer('number');
            $table->bigInteger('membership_id')->unsigned();
            $table->float('payment_total');
            $table->float('invoice_total');
            $table->date('invoice_date');
            $table->date('due_date');
            $table->date('payment_date');
            $table->timestamps();
            $table->foreign('membership_id')->references('id')->on('members')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
};
