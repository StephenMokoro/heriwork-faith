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
        Schema::create('college_admins', function (Blueprint $table) {
            $table->id('apk1');
            $table ->string('uname');
            $table->string('pwd');
            $table->string('school_email');
            $table->string('full_name');
            $table->foreignId('college_auto_id')->constrained('colleges','college_auto_id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('college_admins');
    }
};
