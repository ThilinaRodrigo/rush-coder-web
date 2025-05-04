<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

//this route is only for testing purpose
Route::get('/login', [HomeController::class, 'login'])->name('login'); // Route for login page  
Route::get('/signup', [HomeController::class, 'signup'])->name('signup'); // Route for signup page
Route::get('/forgot-password', [HomeController::class, 'forgot_password'])->name('forgot-password'); // Route for forgot password page
