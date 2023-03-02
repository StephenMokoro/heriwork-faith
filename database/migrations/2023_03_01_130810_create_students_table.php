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
            $table->string('others')->nullable();
            $table->integer('institution_id');
            $table->string('school_name');
            $table->string('student_first_name');
            $table->string('student_last_name');
            $table->string('password');
            $table->integer('student_phone');
            $table->string('student_email')->unique();
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
