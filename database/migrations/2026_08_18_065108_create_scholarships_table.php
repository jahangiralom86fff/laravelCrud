<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('scholarships', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->integer('phone_number');
            $table->string('f_name');
            $table->string('m_name');
            $table->string('date');
            $table->string('nationality');
            $table->tinyInteger('gender')->nullable();
            $table->string('marital_status');
            $table->string('address');
            $table->string('email');
            $table->string('ssc');
            $table->string('institute');
            $table->string('hsc');
            $table->string('hsc_institute');
            $table->string('hours');
            $table->string('h_degree');
            $table->string('board');
            $table->string('pass_year');
            $table->string('group');
            $table->string('hsc_group');
            $table->string('hsc_year');
            $table->string('hsc_board');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('scholarships');
    }
};
