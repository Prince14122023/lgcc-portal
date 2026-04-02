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
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->unique()->after('email')->nullable();
            $table->enum('role', ['student', 'employer', 'user', 'admin'])->default('student')->after('phone');
            $table->string('otp_code')->nullable();
            $table->timestamp('otp_expires_at')->nullable();
        // Password ko nullable kar rahe hain kyunki hum OTP login use karenge
            $table->string('password')->nullable()->change();
        });
    }
};
