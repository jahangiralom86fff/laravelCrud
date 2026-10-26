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
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('subject');
            $table->integer('roll')->unique();
            $table->unsignedBigInteger('regi')->unique();
            $table->string('session_year');
            $table->integer('fee');
            $table->string('payment_way');
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('admissions');
    }
};
