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
        Schema::create('job_seeker', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seeker_id')->constrained('seekers')->references('id');
            $table->foreignId('job_id')->constrained('jobs')->references('id');
            $table->enum('Status', ['apply', 'Call letter send']); 
            $table->longText('Description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_seeker');
    }
};
