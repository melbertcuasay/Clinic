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
        Schema::create('patient_details', function (Blueprint $table) {
            $table->id();
            $table->text('case_no');
            $table->string('last_name');
            $table->string('middle_initial');
            $table->string('first_name');
            $table->string('address');
            $table->string('age');
            $table->string('birthday');
            $table->string('birth_place');
            $table->string('civil_status');
            $table->string('gender');
            $table->string('phone');
            $table->string('religion');
            $table->string('occupation');
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
        Schema::dropIfExists('patient_details');
    }
};
