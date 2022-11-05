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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->Integer('number');
            $table->bigInteger('membership_id')->unsigned();
            $table->date('start_date');
            $table->date('end_date');
            $table->date('payment_date');
            $table->float('payment_total');
            $table->float('invoice_total');
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
        Schema::dropIfExists('subscriptions');
    }
};
