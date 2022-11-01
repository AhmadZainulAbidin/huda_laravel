<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\latihancontroller;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Models\category;
use App\Models\Post;
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
    return 'view';
});

Route::get('/login', [Logincontroller::class, 'index']);
Route::post('/login', [Logincontroller::class, 'store']);

Route::get('/post', [Postcontroller::class, 'index']);
Route::post('/post', [Postcontroller::class, 'store']);

Route::get('/berita', [BeritaController::class, 'berita']);
Route::resource('post', PostController::class);

Route::get('/dashboard',function(){});

Route::resource('post', PostController::class);
Route::resource('category', CategoryController::class);




