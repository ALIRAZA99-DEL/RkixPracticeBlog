<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\FrontendController;
use App\http\Controllers\PostController;
use App\http\Controllers\ListController;
use App\http\Controllers\LikeController;
use App\http\Controllers\CommentController;
use App\http\Controllers\ FrontController;
;

// use App\http\Controllers\AuthController;
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
// Route::get('index',[FrontController::class,'index'])->name('index')->middleware('auth');

Route::get('/', [ListController::class,'index'])->name('dashboard')->middleware('auth');

// Route::get('admin/dashboard',[FrontendController::class,'index'])->name('admin.dashboard');
Route::get('index',[FrontendController::class,'index'])->name('index');



 Route::get('login', function () {
    return view('frontend.login');
});
Auth::routes();

Route::get('admin/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('admin/dashboard');


Route::get('auth', function () {
    return view('frontend.auth');
});

//  CRUD

Route::get('add-data', function () {
    return view('crud.insert');
})->middleware("auth");
Route::post('add',[PostController::class,'store'])->name('add');


Route::get('view-data', function () {
    return view('crud.view');
});

Route::get('view-data',[PostController::class,'index'])->name('view-data');

Route::get('delete-data/{id}',[PostController::class,'destroy'])->name('delete-data');



Route::get('/edit{id}',[PostController::class,'show'])->name('cr.edit');
Route::get('/update{id}',[PostController::class,'update'])->name('cr.update');

// CRUD END//////


Route::get('list', function () {
    return view('frontend.list');
});

//Route::get('list-data',[ListController::class,'index'])->name('cr.list-data');

// like routes
Route::get('likes-insert', function () {
    return view('crud.likes_insert');
});

Route::get('like-post/{id}',[LikeController::class,'store'])->name('like.post')->middleware("auth");


Route::get('likes-views', function () {
    return view('crud.likes_view');
});


Route::post('comment-post',[CommentController::class,'store'])->name('comment.post')->middleware("auth");




// FRONT ROUTE
Route::get('index',[FrontController::class,'index'])->name('index');

Route::get('comment', function () {
    return view('front.comments');
})->name('comment');












