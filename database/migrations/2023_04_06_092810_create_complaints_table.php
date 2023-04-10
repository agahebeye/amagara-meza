<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->string('care_type');
            $table->decimal('weight');
            $table->decimal('size');
            $table->decimal('blood_pressure');
            $table->decimal('temperature');
            $table->decimal('pulse_rate');
            $table->decimal('respiratory_rate');
            $table->date('date')->nullable();
            $table->tinyText('complaint');
            $table->string('precision');

            $table->foreignId('patient_id')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('complaints');
    }
}
