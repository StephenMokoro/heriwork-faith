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
            $table->id('ijob_auto_id');
            // add other columns
            $table->string('ijob_title');
            $table->string('ijob_category');

            $table->string('ijob_skills');
            $table->string('intern_skills');

            $table->integer('ijob_size')->default(0);
            $table->integer('ijob_task')->default(0);
            $table->integer('ijob_task_run')->default(0);
            $table->boolean('ijob_budget_currency')->default(0);
            $table->string('ijob_budget_amount');
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
