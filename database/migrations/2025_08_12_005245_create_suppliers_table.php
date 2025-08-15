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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 34)->nullable();
            $table->string('address')->nullable();
            $table->string('province', 46)->nullable();
            $table->string('city', 36)->nullable();
            $table->Integer('postcode')->nullable();
            $table->string('phone', 16);
            $table->string('fax', 24);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
