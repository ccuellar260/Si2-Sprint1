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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ap_paterno')->nullable();
            $table->string('ap_materno')->nullable();
            $table->string('ci');
            $table->date('fecha_nac')->nullable();
            $table->string('telefono')->nullable();
            $table->string('foto')->nullable();
            $table->string('domicilio')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            // $table->foreignId('current_team_id')->nullable();
            $table->rememberToken();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
