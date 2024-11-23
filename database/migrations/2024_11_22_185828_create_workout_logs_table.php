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
            $table->id(); // Primary Key
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Links to users table
            $table->foreignId('subscription_id')->nullable()->constrained()->onDelete('cascade'); // Links to subscriptions table
            $table->foreignId('trainer_id')->nullable()->constrained('users')->onDelete('set null'); // Links to trainers (assuming trainers are users)
            $table->string('exercise_name'); // Name of the exercise
            $table->integer('sets')->nullable(); // Number of sets
            $table->integer('reps')->nullable(); // Number of repetitions
            $table->float('weight')->nullable(); // Weight used (optional)
            $table->date('workout_date'); // Date of the workout
            $table->timestamps(); // Created at & Updated at
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
