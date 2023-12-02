<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CategoryPostsController;
use App\Http\Controllers\Api\CategoryCategoriesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [AuthController::class, 'login'])->name('api.login');

Route::middleware('auth:sanctum')
    ->get('/user', function (Request $request) {
        return $request->user();
    })
    ->name('api.user');

Route::name('api.')
    ->middleware('auth:sanctum')
    ->group(function () {
        Route::apiResource('users', UserController::class);

        Route::apiResource('categories', CategoryController::class);

        // Category Posts
        Route::get('/categories/{category}/posts', [
            CategoryPostsController::class,
            'index',
        ])->name('categories.posts.index');
        Route::post('/categories/{category}/posts', [
            CategoryPostsController::class,
            'store',
        ])->name('categories.posts.store');

        // Category Categories
        Route::get('/categories/{category}/categories', [
            CategoryCategoriesController::class,
            'index',
        ])->name('categories.categories.index');
        Route::post('/categories/{category}/categories', [
            CategoryCategoriesController::class,
            'store',
        ])->name('categories.categories.store');

        Route::apiResource('posts', PostController::class);
    });
