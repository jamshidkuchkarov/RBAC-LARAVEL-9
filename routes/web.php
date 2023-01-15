<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Blade\User\UserProfileController;
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

// Welcome page
Route::get('/', function () {
    return redirect()->route('home');
});

Route::middleware('guest')->group(function (){
    Route::get('register',[RegisterController::class,'create'])->name('register');
    Route::post('register',[RegisterController::class,'store'])->name('store');
    Route::get('login',[LoginController::class,'login'])->name('login');
    Route::post('login',[LoginController::class,'login_store'])->name('login_store');
});

Route::group(['middleware' => 'auth'],function (){
   Route::get('/home',[HomeController::class,'index'])->name('home');
   Route::post('logout', [RegisterController::class, 'destroy'])->name('logout');

   //users
    Route::get('/profile',[UserProfileController::class,'index'])->name('profile');

});
