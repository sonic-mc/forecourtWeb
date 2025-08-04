<?php

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\App as FacadesApp;
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
if(FacadesApp::environment('production')) {
    URL::forceScheme('https');
}


Route::get('/', function () {
    return view('welcome');
});

Route::get('/store', [PageController::class, 'store'])->name('store');

