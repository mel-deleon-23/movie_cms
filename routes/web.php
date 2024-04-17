<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    'movies',
    [MovieController::class, 'index']
)->name('movies.index');

// Route::get(
//     'movies/{id}',
//     [MovieController::class, 'show']
// )->name('movies.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Route::get(
//     'movies/edit/{id}',
//     [MovieController::class, 'edit']
// )->name('movies.edit');

// Route::get(
//     'movies/create',
//     [MovieController::class, 'create']
// )->name('movies.create');


Route::get(
    'movies/trash/{id}',
    [MovieController::class, 'trash']
)->name('movies.trash')->middleware(['auth', 'verified']);

Route::get(
    'movies/trashed',
    [MovieController::class, 'trashed']
)->name('movies.trashed')->middleware(['auth', 'verified']);

Route::get(
    'movies/restore/{id}',
    [MovieController::class, 'trash']
)->name('movies.restore')->middleware(['auth', 'verified']);

Route::resource('movies', MovieController::class)->middleware(['auth', 'verified']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';