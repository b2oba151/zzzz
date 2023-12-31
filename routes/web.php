<?php

use App\Http\Controllers\PageEditor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

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
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/dashboard', function () {
        return view('dashboard');
    })
    ->name('dashboard');

    Route::get('dashboard/page', [PageEditor::class, 'index'])->name(
        'pages.index'
    );
    Route::get('dashboard/page2', [PageEditor::class, 'index2'])->name(
        'pages.index2'
    );
    Route::get('dashboard/test', [PageEditor::class, 'index3'])->name(
        'pages.test'
    );

    Route::get('/dashboard/tiny', function () {
        return view('app.pages.tinymce');
    })->name('tiny');


Route::prefix('/')
    ->middleware(['auth:sanctum', 'verified'])
    ->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('posts', PostController::class);
    });


    Route::get('/erreur', function () {
        return view('layouts.erreur');
    })->name('erreur');

    Route::get('/wiki', function () {
        return view('pages.wiki');
    })->name('wiki.wiki');

    Route::get('/dsfdsf', function () {
        return view('pages.wiki');
    })->name('google.search');
