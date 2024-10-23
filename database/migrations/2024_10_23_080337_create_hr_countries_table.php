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
        Schema::create('hr_countries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreign('parent_id')
                  ->references('id')->on('countries1')
                  ->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('name', length: 100);
            $table->string('code', length: 3);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hr_countries');
    }
};


// https://blog.ghanshyamdigital.com/building-a-self-referencing-model-in-laravel-a-step-by-step-guide    Building a Self-Referencing Model in Laravel: A Step-by-Step Guide

