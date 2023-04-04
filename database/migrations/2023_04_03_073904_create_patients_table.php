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
            $table->string('first_name');
            $table->string('post_name')->nullable();
            $table->string('last_name');
            $table->string('birth_place');
            $table->date('birth_date');
            $table->integer('gender');
            $table->string('marital_status');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('relative');
            $table->string('nationality');
            $table->string('country');
            $table->string('province');
            $table->string('municipality');
            $table->string('town');
            $table->string('neighborhood');
            $table->string('avenue');
            $table->integer('house_number');
            $table->string('profession');
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
