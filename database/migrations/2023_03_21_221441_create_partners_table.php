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
        Schema::create('partners', function (Blueprint $table) {
            // $table->id();
            // $table->string('partner_first_name');
            // $table->string('partner_last_name');
            // $table->string('partner_phone');

            // $table->string('partner_email');
            // $table->string('partner_as');
            // $table->string('company_name');
            // $table->string('company_type');
            // $table->string('partner_email');


            // $table->string('partner_email');

            $table->id('partner_auto_id');
            $table->string('partner_first_name');
            $table->string('partner_last_name');
            $table->string('partner_email');
            $table->string('partner_phone');
            $table->string('partner_type')->default();
            $table->string('company_name')->nullable();
            $table->string('company_type')->nullable();
            $table->string('company_size')->nullable();
            $table->string('role')->nullable();
            $table->string('country');



            $table->string('company_address')->nullable();
            $table->string('brief_desc')->nullable();
            $table->string('contact')->nullable();
            $table->string('web_link')->nullable();
            $table->string('hear_us');
            $table->string('add_note')->nullable();
            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
