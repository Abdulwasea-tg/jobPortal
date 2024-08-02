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
        Schema::create('seekers', function (Blueprint $table) {
            $table->id();
            $table->String('Name'); 
            $table->String('Address');
            $table->String('City');
            $table->String('Email');
            $table->String('Mobile');
            $table->String('Qualification');
            $table->enum('Gender', ['male', 'female']); 
            $table->Date('BirthDate'); 
            $table->longText('Resume'); 
            $table->enum('Status',['confirme', 'not confirmed']); 
            $table->String('UserName'); 
            $table->String('Password'); 
            $table->String('Question'); 
            $table->String('Answer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seekers');
    }
};
