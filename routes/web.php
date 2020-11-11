<?php

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
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/list-rental', function () {
    return view('list-rental');
})->name('list-rental');
Route::middleware(['auth:sanctum', 'verified'])->get('/post-rental', function () {
    return view('post-rental');
})->name('post-rental');
Route::middleware(['auth:sanctum', 'verified'])->post('/post-rental', [\App\Http\Controllers\Controller::class, 'postRental'])->name('post-rental');
Route::middleware(['auth:sanctum', 'verified'])->get('{rental}/remove-rental', [\App\Http\Controllers\Controller::class, 'destroy'])->name('destroy');
