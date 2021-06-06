<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
        return view('index');
    }); 

Route::get('signup', function () {
        return view('registration');
    }); 

Route::post('custom-login', [AuthController::class, 'customLogin']);

Route::get('dashboard', [AuthController::class, 'dashboard']);

Route::get('signout', [AuthController::class, 'signout']);

Route::post('custom-registration', [AuthController::class, 'customRegistration']);
