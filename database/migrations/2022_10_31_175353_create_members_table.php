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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->integer('membership_id')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('parents_name');
            $table->string('emergency_contact');
            $table->date('birth_date');
            $table->integer('age');
            $table->string('email')->unique();
            $table->string('address');
            $table->string('city');
            $table->string('post_code');
            $table->string('communication_mode');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
};
