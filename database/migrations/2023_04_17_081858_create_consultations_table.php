<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->tinyText('chief_complaint');
            $table->tinyText('disease_history');
            $table->tinyText('medical_history');
            $table->tinyText('medical_history');
            $table->tinyText('anamnesis');
            $table->tinyText('physical_examination');
            $table->tinyText('probable_diagnosis');

            $table->foreignId('orientation_id')->constrained()->cascadeOnDelete();

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
        Schema::dropIfExists('consultations');
    }
}
