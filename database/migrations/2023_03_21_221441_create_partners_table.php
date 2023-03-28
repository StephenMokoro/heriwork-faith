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
            $table->string('company_name');
            $table->string('company_type');
            $table->string('company_size');
            $table->string('role');
            $table->string('country');



            $table->string('company_address');
            $table->string('brief_desc');
            $table->string('contact')->nullable();
            $table->string('web_link');
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
