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
        Schema::create('seeker_regs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('email', 255);
            $table->string('mobile');
            $table->string('qualification');
            $table->enum('gender', ['m','f']);
            $table->date('birth_date');
            $table->string('resume');
            $table->enum('status', ['confirme','not confime']);
            $table->string('usernam');
            $table->string('password', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seeker_regs');
    }
};
