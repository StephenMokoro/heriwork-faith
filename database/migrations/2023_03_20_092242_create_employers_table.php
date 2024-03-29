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
        Schema::create('employers', function (Blueprint $table) {
            $table->id('employer_auto_id');
            $table->string('employer_first_name');
            $table->string('employer_last_name');
            $table->string('password');
            $table->string('employer_phone');
            $table->string('personal_email');
            $table->string('employer_gender');
            $table->boolean('status')->default(0);
            $table->boolean('is_email_verified')->default(0);

            $table->timestamp('email_verified_at')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employers');
    }
};
