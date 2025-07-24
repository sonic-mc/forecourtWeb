<?php

use App\Http\Controllers\ProfileController;
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

use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\AccountController;
use App\Http\Controllers\DashboardController;

Route::get('/users', [UserController::class, 'findAllUsers']);
Route::post('/login-user', [UserController::class, 'login']);


Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('/register-account', function () {
        return view('account.register');
    })->name('account.register');
    Route::post('/register-account', [UserController::class, 'register'])->name('account.register');
    Route::get('/list', [AccountController::class, 'index'])->name('account.index');
    Route::put('/freeze/{accountId}', [AccountController::class, 'freeze'])->name('account.freeze');
    Route::get('/show/{accountId}', [AccountController::class, 'show'])->name('account.show');
    Route::get('/balance/{accountId}', [AccountController::class, 'balance'])->name('account.balance');
    Route::delete('/delete/{accountId}', [AccountController::class, 'destroy'])->name('account.destroy');
});




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::post('/registered-user/login', [DashboardController::class, 'loginRegisteredUser'])->name('registered.login');

Route::get('/registered/profile', [DashboardController::class, 'showProfile'])->name('registered.profile');
Route::put('/registered/account/{id}', [DashboardController::class, 'addAccount'])->name('registered.addAccount');

Route::get('/registered-users', [DashboardController::class, 'showRegisteredUsers'])->name('registered.users');


Route::get('/dashboard/account', [DashboardController::class, 'showAccountForm'])->name('dashboard.account.form');
Route::post('/dashboard/account', [DashboardController::class, 'fetchAccount'])->name('dashboard.account.fetch');
