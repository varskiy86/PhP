<?php

use Dom\Comment;
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
        Schema::create('users2', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('age')->nullable()->unsigned();
            $table->string('surname');
            $table->dateTime('Birhday');
            $table->dateTime('created');
        });

         Schema::table('users2', function (Blueprint $table) {
            $table->string('email')->comment('Email Reg');
            $table->string('salary')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users2');
    }
};
