<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/@{username}', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
//Route::get('/@{username}/edit', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit_profile');
//Route::post('/user/edit', [App\Http\Controllers\HomeController::class, 'update'])->name('update_profile');

//videos urls
Route::get('/new-video', [App\Http\Controllers\VideoController::class, 'create'])->name('video.create');
Route::post('/uplode-video', [App\Http\Controllers\VideoController::class, 'store'])->name('video.uplode');
Route::get('/video-{id}', [App\Http\Controllers\VideoController::class, 'show'])->name('video.show');