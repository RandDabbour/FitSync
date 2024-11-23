<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index($id)
    {
        $user = User::findOrFail($id);

        if (Auth::id() !== (int) $id) {
            return redirect()->route('welcome')->with('error', 'Unauthorized access');
        }

        // Fetch the user data
        // $user = User::findOrFail($id);

        // Render the dashboard view with user data
        return view('dashboards.user.index', compact('user'));
    }

    public function viewusers()
    {
        if(Auth::user()->role !== 'admin')
        {
            return redirect()->route('welcome')->with('error', 'Unauthorized access');
        }

        $users =User::where('role' , 'user')->get();
        return view('dashboards.users.admin.manageUsers' , compact('users'));
    }

    public function viewTrainers()
    {
        if (Auth::user()->role !== 'admin')
        {
            return redirect()->route('welcome')->with('error', 'Unauthorized access');

        }

        $trainers = User::where ('role', 'trainer')->get();
        return view('dashboards.users.admin.manageTrainers' , compact('trainers'));
    }


    public function delete($id)
    {
        if (Auth::user()->role !== 'admin') {
            return redirect()->route('welcome')->with('error', 'Unauthorized access.');
        }

        $user = User::findOrFail($id);
        if ($user->trashed())
        {
            return redirect()->route('admin.manageTrainers')->with('error', 'Trainer is already deleted.');

        }

        $user->delete();

        if ($user->role === 'trainer')
        {
             return redirect()->route('admin.manageTrainers')->with('success', 'Trainer deleted successfully.');
        } elseif
        ($user->role ==='user')
        {
            return redirect()->route('admin.manageUsers')->with('success', 'User deleted successfully.');

        }

        return redirect()->route('admin.manageTrainers')->with('success', 'User deleted successfully.');




    }

    public function profile($id)
    {
        $user =User::findOrfail($id);
        return view('dashboards.users.shared.profile' , compact('user'))->with('isEdit' , false);
    }

    public function edit($id){
        $user = User::findOrfail($id);

       return view('dashboards.users.shared.editProfile' , compact('user'))->with('isEdit' , true);

    }

    // public function edit(User $user)
    // {
    //     $editing =true;
    //     return view('dashboards.users.shared.editProfile' , compact('user' , 'editing'));
    // }

    public function update(Request $request, $id)
{
    $user = User::findOrFail($id); // Ensure that $id is correct

    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'password' => 'nullable|min:8',
    ]);

    if ($request->filled('password')) {
        $validatedData['password'] = bcrypt($request->password);
    }

    $user->update($validatedData);
    return redirect()->route('profile', $user->id)->with('success', 'Profile updated successfully.');
}

public function create()
{
    return view('dashboards.users.admin.createUser');
}
public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8|confirmed',
        'role' => 'required|string|in:user,trainer,admin',
    ]);

    $user = User::create([
        'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'role' => $validatedData['role'],
        ]);

                return redirect()->route('admin.manageUsers')->with('success', 'User created successfully');

}
}


