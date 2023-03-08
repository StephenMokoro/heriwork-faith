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
        Schema::create('internship_jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employer_id')->constrained('users','employer_id')->cascadeOnDelete()->cascadeOnUpdate();
            
            $table->string('ijob_title');
            $table->string('ijob_job_desc');
            $table->integer('ijob_stipend');
            $table->string('ijob_categories');
            $table->string('ijob_type');
            $table->dateTime('ijob_expected_start_date');
            $table->dateTime('ijob_expected_end_date');
            $table->integer('ijob_expected_daily_hours');
            $table->string('ijob_pay_status')->default('inactive');
            $table->boolean('ijob_status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internship_jobs');
    }
};
