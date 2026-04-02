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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Jaise: "Basic Package" [cite: 639]
            $table->integer('price'); // 499, 999, 1499 [cite: 639, 656, 680]
            $table->string('validity'); // 6 Month, Complete Education, Life-Time [cite: 642, 657, 681]
            $table->json('features'); // Saari services list [cite: 643, 644]
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
