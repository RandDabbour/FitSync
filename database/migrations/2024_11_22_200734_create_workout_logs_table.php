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
        Schema::create('workout_logs', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Name of the workout log
            $table->text('description'); // Description of the workout
            $table->string('type'); // Type of workout (e.g., Cardio, Strength)
            $table->integer('duration'); // Duration in minutes
            $table->integer('calories_burned')->nullable(); // Calories burned
            $table->float('distance')->nullable(); // Distance covered (for cardio workouts)
            $table->integer('sets')->nullable(); // Sets (for strength workouts)
            $table->integer('reps')->nullable(); // Reps per set
            $table->integer('weight')->nullable(); // Weight used in exercises
            $table->date('date'); // Date of the workout
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // User who logged the workout
            $table->foreignId('trainer_id')->nullable()->constrained('users')->onDelete('set null'); // Optional trainer
            $table->foreignId('subscription_id')->nullable()->constrained()->onDelete('set null'); // Optional subscription
            $table->timestamps(); // Timestamps
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workout_logs');
    }
};
