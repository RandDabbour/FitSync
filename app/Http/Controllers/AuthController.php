<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view('Auth.register');
    }

    public function registerPost(Request $request){

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'Register Done');
    }

    public function login()
    {
        // dd("test");
        return view('Auth.login');
    }

    public function loginPost(Request $request)
    {

        $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Check if the logged-in user is an admin
        $user = Auth::user(); // Get the authenticated user

        if ($user->role == 'admin') {
            // Redirect to the admin dashboard if the user is an admin
            return redirect()->route('admin.dashboard'); // Make sure you have this route defined
        }

        // Redirect to the user dashboard for regular users
        return view('dashboards.users.user.index', ['id' => $user->id]);
    }

    return back()->with('error', 'Email or password is incorrect');

    }
}
