<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index()
    {
        $subscriptions = Subscription::with(['user', 'trainer'])->get();
        return view('dashboards.users.admin.manageSubscriptions', compact('subscriptions'));

    }

    public function create()
    {
        $users = User::where('role' , 'user')->get();
        $trainers = User::where('role', 'trainer')->get();
        return view('dashboards.users.admin.createSubscriptions', compact('users', 'trainers'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'trainer_id' => 'required|exists:users,id',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'status' => 'required|in:active,expired,canceled',
        ]);

        Subscription::create($validatedData);

        return redirect()->route('subscriptions.index')->with('success', 'Subscription created successfully.');
    }

    public function edit($id)
    {
        $subscription = Subscription::findOrFail($id);
        $users = User::where('role', 'user')->get();
        $trainers = User::where('role', 'trainer')->get();
        return view('admin.subscriptions.edit', compact('subscription', 'users', 'trainers'));
    }

    public function update(Request $request, $id)
    {
        $subscription = Subscription::findOrFail($id);

        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'trainer_id' => 'required|exists:users,id',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'status' => 'required|in:active,expired,canceled',
        ]);
        $subscription->update($validatedData);

        return redirect()->route('subscriptions.index')->with('success', 'Subscription updated successfully.');
    }

    public function destroy($id)
    {
        $subscription = Subscription::findOrFail($id);
        $subscription->delete();

        return redirect()->route('subscriptions.index')->with('success', 'Subscription deleted successfully.');
    }
}

