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
        Schema::create('organization_admins', function (Blueprint $table) {
            $table->id('org_admin_auto_id');
            $table->string('admin_first_name');
            $table->string('admin_last_name');
            $table->string('official_email');
            $table->string('admin_password');
            $table->boolean('admin_status')->default(0);
            $table ->foreignId('organization_auto_id')->constrained('organizations','organization_auto_id')->cascadeOnDelete()->cascadeOnUpdate();
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organization_admins');
    }
};
