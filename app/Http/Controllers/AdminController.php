<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        $usersCount = User::where('role' , 'user')->count();
        $trainersCount = User::where('role', 'trainer')->count();
        // $activeUsersCount = User::where('role', 'user')->where('status', 'active')->count();
        // $inactiveUsersCount = User::where('role', 'user')->where('status', 'inactive')->count();
        return view('dashboards.users.admin.indexAdmin' , compact(
            'usersCount',
            'trainersCount',
            // 'activeUsersCount',
            // 'inactiveUsersCount'
        ));
    }
}
