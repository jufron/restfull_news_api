<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PostController,
    UserController,
    CommentController
};
use App\Http\Controllers\Auth\AuthenticationController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(AuthenticationController::class)->group( function () {
    Route::post('login', 'login')->name('login');
    Route::post('register', 'register')->name('register');
});

// todo posts
Route::controller(PostController::class)->middleware('auth:sanctum')->group( function () {
    Route::get('posts', 'index');
    Route::get('post/{id}', 'show');
});

// todo users
Route::controller(UserController::class)->middleware('auth:sanctum')->group( function () {
   Route::get('users', 'index');
   Route::get('user/{id}', 'show');
});

// todo comments
Route::controller(CommentController::class)->middleware('auth:sanctum')->group( function () {
    Route::get('comments', 'index');
});
