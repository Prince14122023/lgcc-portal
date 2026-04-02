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
            // Phone number unique hona chahiye login ke liye
            $table->string('phone')->unique()->after('email')->nullable();

            $table->string('name')->nullable()->change();
        
            // Multi-Role System (Aman Sir's Requirement)
            $table->enum('role', ['student', 'employer', 'user', 'admin'])->default('student')->after('phone');
        
            // OTP Logic Fields
            $table->string('otp_code')->nullable()->after('role');
            $table->timestamp('otp_expires_at')->nullable()->after('otp_code');

            // LinkedIn style login mein email/password optional ho sakte hain
            $table->string('email')->nullable()->change();
            $table->string('password')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
