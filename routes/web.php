<?php

use Illuminate\Support\Facades\Route;
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
    /* $post=new Post();
    $post->title='test title';
    $post->content='test content';
    $post->save();*/
});

/*$lastPost = Post::orderBy('id','DESC')->first();
dd($lastPost);

$fourthPost = Post::find(4);
dd($fourthPost);

$featuredPosts = Post::where('is_feature',1)->get();
dd($featuredPosts);

$allPosts = Post::all();
dd($allPosts);

Post::destroy(3,5,7);

Post::destroy(2);

$post=Post::find(1);
$post->delete();

$post=Post::find(1);
$post->title='saved title';
$post->content='saved content';
$post->save();

$post = Post::find(1);
$post->update([
    'title' => 'updated title',
    'content' => 'updated content',
]);

$posts=Post::where('id','<',10)->orderBy('id','DESC')->get();
dd($posts);

$posts=Post::find(1);
dd($posts);

$posts=Post::all();
dd($posts);

Post::create([
    'title' => 'test title',
    'content' => 'test content',
]);

Route::get('index', function () {
    return view('index');
});

Route::get('post', function () {
    return view('post');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('about', function () {
    return view('about');
});
*/

/*Route::get('index',[\App\Http\Controllers\PostsController::class,'index'])->name('posts.index');
Route::get('post',[\App\Http\Controllers\PostsController::class,'post'])->name('posts.post');
Route::get('about',[\App\Http\Controllers\PostsController::class,'about'])->name('posts.about');
Route::get('contact',[\App\Http\Controllers\PostsController::class,'contact'])->name('posts.contact');*/
