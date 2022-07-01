<?php

use App\Models\Post;
use App\Models\User;
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

Route::get('posts', function () {
    $posts = Post::all();
    return view('posts.posts', ['posts' => $posts]);
})->middleware(['auth'])->name('posts');

Route::get('posts/{id}', function ($id) {
    $post = Post::where('id', $id)->first();
    $author = User::where('name', $post->author)->first();
    return view('posts.view', ['post' => $post, 'author' => $author]);
});

// Route::get('/', 'HomeController@index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
