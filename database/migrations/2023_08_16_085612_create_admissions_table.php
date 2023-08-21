<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father_name');
            $table->enum('gender', ['M', 'F'])->nullable();
            $table->string('dob');
            $table->string('address');
            $table->string('phone_no');
            $table->string('cnic_no');
            $table->string('degree');
            $table->string('passing_year');
            $table->string('board');
            $table->integer('obtained_marks');
            $table->integer('total_marks');
            $table->string('school_name');
            $table->string('cv_file');
            $table->string('result_file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admissions');
    }
};
