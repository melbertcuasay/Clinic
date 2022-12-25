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
        Schema::create('medical_records', function (Blueprint $table) {
            $table->id();
            $table->string('patient_history');
            $table->string('findings');
            $table->string('weight');
            $table->string('height');
            $table->string('blood_pressure');
            $table->string('diagnostic_result');
            $table->string('medicine');
            $table->string('medicine_taken');
            $table->string('prescription');
            $table->string('non_prescription');
            $table->string('patient_progress');
            $table->string('total_payment');
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
        Schema::dropIfExists('medical_records');
    }
};
