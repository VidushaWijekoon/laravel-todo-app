<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/relationship', [HomeController::class, 'relationship'])->name('relationship');

Route::prefix('/todo')->group(function () {
    Route::get('/', [TodoController::class, 'index'])->name('todo');
    Route::post('/store', [TodoController::class, 'store'])->name('todo.store');
    Route::get('/{task_id}/delete', [TodoController::class, 'delete'])->name('todo.delete');
    Route::get('/{task_id}/done', [TodoController::class, 'done'])->name('todo.done');
});

Route::prefix('/banner')->group(function () {
    Route::get('/', [BannerController::class, 'index'])->name('banner');
    Route::post('/', [BannerController::class, 'store'])->name('banner.save');
    Route::get('/{banner_id}/delete', [BannerController::class, 'delete'])->name('banner.delete');
    Route::get('/{banner_id}/done', [BannerController::class, 'status'])->name('banner.status');
});
