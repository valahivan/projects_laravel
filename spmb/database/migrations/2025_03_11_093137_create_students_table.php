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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('place_birth');
            $table->string('date_birth', 12);
            $table->string('gender', 50);
            $table->unsignedBigInteger('school_id');
            $table->unsignedBigInteger('major_id');
            $table->foreign('school_id')->references('id')->on('schools');
            $table->foreign('major_id')->references('id')->on('majors');
            $table->bigInteger('no_wa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
