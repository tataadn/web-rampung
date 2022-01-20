<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
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
    return view('page.home');
});
Route::get('about', [WebController::class, 'about'])->name('page.about');
Route::get('blog', [WebController::class, 'blog'])->name('page.blog');
Route::get('carier', [WebController::class, 'carier'])->name('page.carier');
Route::get('home', [WebController::class, 'home'])->name('page.home');

Route::prefix('auth/')->name('auth.')->group(function(){
    Route::get('index',[AuthController::class, 'index'])->name('index');
    Route::post('login',[AuthController::class, 'do_login'])->name('login');
    Route::post('register',[AuthController::class, 'do_register'])->name('register');
});
Route::middleware(['auth'])->group(function(){
    Route::get('logout',[AuthController::class, 'do_logout'])->name('auth.logout');
    Route::get('profile',[ProfileController::class, 'index'])->name('profile.index');
    Route::get('profile/edit',[ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile/update/{user}',[ProfileController::class, 'update'])->name('profile.update');
});  