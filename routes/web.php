<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('post.index', [PostController::class, 'index']) -> name ('posts.index');

Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');

Route::post('/blog', [PostController::class, 'store'])-> name('posts.store');
//
Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('/blog/edit/{post}', [PostController::class, 'edit'])->name('posts.edit');

Route::patch('/blog/{post}', [PostController::class, 'update'])->name('posts.update');

Route::get('/blog/delete/{post}', [PostController::class, 'delete'])->name('posts.delete');

Route::delete('/blog/{post}', [PostController::class, 'destroy'])->name('posts.destroy');



Route::get('/contacto', function () {
    return view('contacto');
});
