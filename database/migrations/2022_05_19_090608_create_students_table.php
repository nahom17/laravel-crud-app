<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            //!!here add our student table with those columns (id,name,address,mobile)
            $table->id();
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('BirthDate');
            $table->string('Address');
            $table->string('HouseNumber');
            $table->string('Postcode');
            $table->string('City');
            $table->string('Mobile');
            $table->string('Email');
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
        Schema::dropIfExists('students');
    }
};
