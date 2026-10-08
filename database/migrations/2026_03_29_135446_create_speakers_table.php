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
        Schema::create('speakers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('designation');
            $table->text('description');
            $table->string('image')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('fax')->nullable();
            $table->string('experience');
             $table->string('skill1_name')->nullable();
    $table->string('skill1_percent')->nullable();

    $table->string('skill2_name')->nullable();
    $table->string('skill2_percent')->nullable();

    $table->string('skill3_name')->nullable();
    $table->string('skill3_percent')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('speakers');
    }
};
