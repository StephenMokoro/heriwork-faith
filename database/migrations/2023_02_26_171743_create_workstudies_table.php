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
        Schema::create('workstudies', function (Blueprint $table) {
            $table->id('workstudy_auto_id');
           
            $table->string('ws_title');
            $table->string('category');
            $table->string('ws_job_desc');
            $table->integer('ws_job_pay_per_hour');
            $table->dateTime('ws_job_expected_start_date');
            $table->dateTime('ws_job_expected_end_date');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workstudies');
    }
};
