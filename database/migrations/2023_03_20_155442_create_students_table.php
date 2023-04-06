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
        Schema::create('students', function (Blueprint $table) {
            $table->id('student_auto_id');
            $table->string('student_first_name');
            $table->string('student_last_name');
            $table->string('student_email')->unique();
            $table->string('student_phone');
            $table->string('student_gender');
            $table->String('school_name');
            $table->String('country');
            // $table->string('upload_cv')->nullable();
            // $table->string('progress_report')->nullable();
            // $table->string('others')->nullable();
            $table->integer('institution_id')->nullable();
            // $table->string('school_name');
            $table->boolean('student_email_verified')->default(0);

            $table->string('password');
            $table->boolean('student_status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
