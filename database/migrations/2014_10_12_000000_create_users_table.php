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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->enum('role', ['admin', 'trainer', 'user'])->default('user'); // Role column to distinguish between admin, trainer, and user
            $table->string('gender')->nullable(); // Gender of the user
            $table->date('birth_date')->nullable(); // Birth date of the user
            $table->decimal('weight', 5, 2)->nullable(); // Weight of the user (in kg or lbs, depending on your system)
            $table->decimal('height', 5, 2)->nullable(); // Height of the user (in cm or inches)
            $table->string('fitness_goal')->nullable(); // Fitness goal (e.g., lose weight, gain muscle, etc.)
            $table->text('health_conditions')->nullable(); // Health conditions (e.g., diabetes, heart disease)
            $table->timestamps();
           
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
