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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('desc')->default('some value');
            $table->string('title', 100)->change();
            $table->integer('votes');
            $table->string('name', 100);
            $table->text('text');
            $table->date('created_at1');
            $table->dateTime('created_at');
            $table->timestamp('added_on');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
