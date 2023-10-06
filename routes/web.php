<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    if (Auth::user()) {
        return redirect()->route('home');
    }
    return view('frontend.login.login');
})->name('welcome');

Route::post('/register-user', [RegisterController::class, 'register'])->name('registerUser');



Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function () {
    Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
        Route::group(['prefix' => 'sliders', 'as' => 'sliders.'], function () {
        });
    });
});
