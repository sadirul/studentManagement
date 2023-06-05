<?php

use Illuminate\Support\Facades\Route;

// ADMIN IMPORTS
use App\Http\Controllers\Admin\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\AdminDashboardController;


// END ADMIN IMPORTS

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

Route::get('/', function () {
    return view('welcome');
});

// ADMIN ROUTER


Route::prefix('admin')->group(function () {
    // ADMIN LOGIN VIEW
    Route::get('login', [AdminLoginController::class, 'index'])->name('admin.login.view')->middleware('isAdminLoggedin');

    // ADMIN DASHBOARD
    Route::get('/', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard')->middleware('isAdminNotLoggedin');

    // ADMIN LOGIN
    Route::post('login', [AdminLoginController::class, 'login'])->name('admin.login');

    // ADMIN LOGOUT
    Route::get('logout', [AdminDashboardController::class, 'logout'])->name('admin.logout');

    // Route::get('/', function () {
    //     return view('welcome');
    // });
});


// END ADMIN ROUTER
