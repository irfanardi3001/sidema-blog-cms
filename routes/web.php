<?php

use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SettingController;
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

Route::get('/',[PostController::class, 'welcome']);
Route::get('aspirasi',[AspirasiController::class, 'aspirasi'])->name('aspirasi');
Route::get('posts',[PostController::class, 'posts']);
Route::get('liputan',[PostController::class, 'liputan'])->name('liputan');
Route::get('pengumuman',[PostController::class, 'pengumuman'])->name('pengumuman');




// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('posts', PostController::class)->only('show');
Route::resource('aspirasi', AspirasiController::class)->only('create','store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
