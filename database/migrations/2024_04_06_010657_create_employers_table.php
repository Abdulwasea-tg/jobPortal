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
            $table->id();
            $table->string('CompanyName'); 
            $table->string('ContactPerson'); 
            $table->string('Address'); 
            $table->string('City'); 
            $table->string('Email'); 
            $table->string('Mobile'); 
            $table->string('Area_Work'); 
            $table->enum('Status',['confirme', 'not confirmed']); 
            $table->string('UserName'); 
            $table->string('Password'); 
            $table->string('Question'); 
            $table->string('Answer');
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
