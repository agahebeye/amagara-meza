<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('postname');
            $table->string('lastname');
            $table->string('birthplace');
            $table->date('birthdate');
            $table->integer('gender');
            $table->string('martital_status');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('relative');
            $table->string('nationality');
            $table->string('country');
            $table->string('municipality');
            $table->string('town');
            $table->string('neighborhood');
            $table->string('avenue');
            $table->integer('house_number');
            $table->string('phone_number');
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
        Schema::dropIfExists('patients');
    }
}
