<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PostController,
    UserController,
    CommentController
};

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// todo posts
Route::controller(PostController::class)->group( function () {
    Route::get('posts', 'index');
});

// todo users
Route::controller(UserController::class)->group( function () {
   Route::get('users', 'index');
});

// todo comments
Route::controller(CommentController::class)->group( function () {
    Route::get('comments', 'index');
});
