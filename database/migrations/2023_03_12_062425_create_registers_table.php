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
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('manager');
            $table->string('zam-director');
            $table->integer('region_id');
            $table->integer('phone');
            $table->integer('sec_phone');
            $table->string('email');
            $table->integer('index');
            $table->string('region');
            $table->string('village')->nullable();
            $table->string('street');
            $table->string('street_number');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registers');
    }
};
