<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\BlogController;

use App\Models\UserInfo;
use App\Http\Controllers\UserInfoController;

use App\Http\Controllers\MailController;

use App\Http\Controllers\LocalizatioController;
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

Route::get('/profile/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('profile');
})->name('main');

Route::get('/profile/2', function () {
    return view('page2');
})->name('second');
Route::get('/profile/3', function () {
    return view('page3');
})->name('third');

Route::get('/post', function () {
    DB::table('posts')->insert([
        'title' => 'Hello',
        'body' => 'It is lab4'
    ]);
});



Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/create', function(){
    return view('blog.create');
});
Route::post('blog/create', [BlogController::class, 'store'])->name('add-post');

Route::get('blog/{id}', [BlogController::class, 'get_post']);

Route::get('/userInfo', [UserInfoController::class, 'index']);
Route::get('/userInfo/create', function(){
    return view('info.create');
});
Route::post('userInfo/create', [UserInfoController::class, 'store'])->name('add-user');

Route::get('mail/send', [MailController::class, 'send']);

