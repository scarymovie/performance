<?php

use App\Http\Controllers\Admin\Post\PostController as AdminPostControllerAlias;
use App\Http\Controllers\User\Lesson\LessonController;
use App\Http\Controllers\User\Part\PartController;
use App\Http\Controllers\user\Post\PostController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

    /*Route::get('/{lesson}/part',[PartController::class, 'index'])->name('part.index');*/

    Route::resource('part', PartController::class);

    Route::resource('lesson', LessonController::class );

    Route::middleware(['role:manager|admin'])->group(function (){
        Route::resource('admin', AdminPostControllerAlias::class);
    });
});

