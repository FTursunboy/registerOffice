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
        Schema::create('registration_data', function (Blueprint $table) {
            $table->id();
            $table->string('region_id');
            $table->string('otdel_id');
            $table->string('date');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('patronymic');
            $table->string('nation');
            $table->string('birthplace');
            $table->string('birthdate');
            $table->string('workplace');
            $table->string('education');
            $table->string('family_status');
            $table->boolean('gender');
            $table->string('child_birthdate');
            $table->string('child_name');
            $table->string('address');
            $table->string('amount');
            $table->string('passport_data');
            $table->string('passport_from');
            $table->boolean('surname_to');
            $table->string('accepted_date');
            $table->string('number');
            $table->string('wedding_date');
            $table->string('wedding_accept_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration_data');
    }
};
