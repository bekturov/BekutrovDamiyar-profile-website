<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\BlogController;
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

Route::get('/post', function () {
    DB::table('posts')->insert([
        'title' => 'Hello',
        'body' => 'It is lab4'
    ]);
});

Route::get('/post/add', function () {
    DB::table('clients')->insert([
        'title' => 'Hello',
        'body' => 'It is lab4'
    ]);
});

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/create', function(){
    return view('blog.create');
});
Route::post('blog/create', [BlogController::class, 'store'])->name('add-post');




