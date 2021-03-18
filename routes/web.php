<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
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

Route::get('/post', function () {
    $post = Post::find(1);
    return $post;
});
