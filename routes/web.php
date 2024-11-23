<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkoutLogController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');


Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', [AuthController::class, 'register']);

Route::post('/register', [AuthController::class, 'registerPost'])->name('register');

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::POST('/login_test', [AuthController::class, 'loginPost'])->name('login_test');

Route::prefix('user')->group(function () {
    Route::get('/{id}', [UserController::class, 'index'])->name('user.dashboard');
});

// Group routes with AdminMiddleware
Route::middleware([AdminMiddleware::class])->group(function () {
    // Admin dashboard route
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::get('/admin/manage-users', function () {
    return view('dashboards.users.admin.manageUsers');
})->name('admin.manageUsers');



// Route::get('/admin/users', [UserController::class, 'viewusers'])->name('admin.users');

Route::get('/admin/manage-users', [UserController::class, 'viewusers'])->name('admin.manageUsers');

Route::get('/admin/manage-trainers', function () {
    return view('dashboards.users.admin.manageTrainers');
})->name('admin.manageTrainers');

Route::get('/admin/manage-trainers', [UserController::class, 'viewTrainers'])->name('admin.manageTrainers');

Route::delete('/admin/trainer/{id}', [UserController::class, 'delete'])->name('admin.delete');

Route::get('/profile/{id}' , [UserController::class , 'profile'])->name('profile');

Route::get('/users/{id}/edit' , [UserController::class, 'edit'])->name('users.edit');

// Route::put('users/{id}' , [UserController::class , 'update'])->name('users.update');

Route::put('users/{id}', [UserController::class, 'update'])->name('users.update');


// Route::resource('users' , UserController::class);

// Route::get('/profile/edit/{id}', [UserController::class, 'edit'])->name('users.edit');

// Show the form to add a new user
Route::get('/admin/users/create', [UserController::class, 'create'])->name('users.create');

// Store the new user
Route::post('/admin/users', [UserController::class, 'store'])->name('users.store');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/subscriptions', [SubscriptionController::class, 'index'])->name('subscriptions.index');
    Route::get('/subscriptions/create', [SubscriptionController::class, 'create'])->name('subscriptions.create');
    Route::post('/subscriptions', [SubscriptionController::class, 'store'])->name('subscriptions.store');
    Route::get('/subscriptions/{id}/edit', [SubscriptionController::class, 'edit'])->name('subscriptions.edit');
    Route::put('/subscriptions/{id}', [SubscriptionController::class, 'update'])->name('subscriptions.update');
    Route::delete('/subscriptions/{id}', [SubscriptionController::class, 'destroy'])->name('subscriptions.destroy');
});

// Workout Logs - Main Resourceful Routes
// Route::resource('workout-logs', WorkoutLogController::class);

// Workout Logs - Analytics Route
Route::get('workout-logs/analytics', [WorkoutLogController::class, 'analytics'])->name('workout-logs.analytics');

// Additional Routes for Filtering Logs
Route::get('workout-logs/filter-by-date', [WorkoutLogController::class, 'filterByDate'])->name('workout-logs.filterByDate');
Route::get('workout-logs/filter-by-user', [WorkoutLogController::class, 'filterByUser'])->name('workout-logs.filterByUser');
Route::get('workout-logs/filter-by-trainer', [WorkoutLogController::class, 'filterByTrainer'])->name('workout-logs.filterByTrainer');

// Route::post('/workouts', [WorkoutLogController::class, 'store'])->name('workouts.store');


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/workout-logs', [WorkoutLogController::class, 'index'])->name('workout-logs.index');
    Route::get('/workout-logs/create', [WorkoutLogController::class, 'create'])->name('workout-logs.create');
    Route::post('/workout-logs', [WorkoutLogController::class, 'store'])->name('workouts.store');
    Route::get('/workout-logs/{id}/edit', [WorkoutLogController::class, 'edit'])->name('workout-logs.edit');
    Route::put('/workout-logs/{id}', [WorkoutLogController::class, 'update'])->name('workout-logs.update');
    Route::delete('/workout-logs/{id}', [WorkoutLogController::class, 'destroy'])->name('workout-logs.destroy');
});

