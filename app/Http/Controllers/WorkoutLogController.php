<?php

namespace App\Http\Controllers;

use App\Models\WorkoutLog;
use App\Models\User;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkoutLogController extends Controller
{
    /**
     * Display a listing of the workout logs.
     */
    public function index()
    {
        $workoutLogs = WorkoutLog::with(['user', 'subscription', 'trainer'])->get();
        return view('dashboards.users.admin.manageWorkouts', compact('workoutLogs'));
    }

    /**
     * Show the form for creating a new workout log.
     */
    public function create()
    {
        $users = User::all();
        $subscriptions = Subscription::all();
        return view('dashboards.users.admin.createWorkout', compact('users', 'subscriptions'));
    }

    /**
     * Store a newly created workout log in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'subscription_id' => 'nullable|exists:subscriptions,id',
            'trainer_id' => 'nullable|exists:users,id',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|string',
            'duration' => 'required|integer|min:1',
            'calories_burned' => 'nullable|integer',
            'distance' => 'nullable|numeric',
            'sets' => 'nullable|integer',
            'reps' => 'nullable|integer',
            'weight' => 'nullable|numeric',
            'date' => 'required|date',
            'workout_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $workoutLog = WorkoutLog::create($validated);

        // if ($request->hasFile('workout_image')) {
        //     $workoutLog->image = $request->file('workout_image')->store('workouts', 'public');
        //     $workoutLog->save();
        // }

        return redirect()->route('workout-logs.index')->with('success', 'Workout log created successfully!');
    }

    /**
     * Display the specified workout log.
     */
    public function show(WorkoutLog $workoutLog)
    {
        return view('workout_logs.show', compact('workoutLog'));
    }

    /**
     * Show the form for editing the specified workout log.
     */
    public function edit(WorkoutLog $workoutLog)
    {
        $users = User::all();
        $subscriptions = Subscription::all();
        return view('dashboards.users.admin.editWorkout', compact('workoutLog', 'users', 'subscriptions'));
    }

    /**
     * Update the specified workout log in storage.
     */
    public function update(Request $request, WorkoutLog $workoutLog)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'subscription_id' => 'nullable|exists:subscriptions,id',
            'trainer_id' => 'nullable|exists:users,id',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|string',
            'duration' => 'required|integer|min:1',
            'calories_burned' => 'nullable|integer',
            'distance' => 'nullable|numeric',
            'sets' => 'nullable|integer',
            'reps' => 'nullable|integer',
            'weight' => 'nullable|numeric',
            'date' => 'required|date',
            'workout_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $workoutLog->update($validated);

        if ($request->hasFile('workout_image')) {
            // Delete old image
            if ($workoutLog->image) {
                Storage::disk('public')->delete($workoutLog->image);
            }
            $workoutLog->image = $request->file('workout_image')->store('workouts', 'public');
            $workoutLog->save();
        }

        return redirect()->route('workout-logs.index')->with('success', 'Workout log updated successfully!');
    }

    /**
     * Remove the specified workout log from storage.
     */
    public function destroy(WorkoutLog $workoutLog)
    {
        if ($workoutLog->image) {
            Storage::disk('public')->delete($workoutLog->image);
        }

        $workoutLog->delete();

        return redirect()->route('workout-logs.index')->with('success', 'Workout log deleted successfully.');
    }
}
