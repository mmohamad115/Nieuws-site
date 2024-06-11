<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\NieuwsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', [CategorieController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategorieController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategorieController::class, 'store'])->name('categories.store');
Route::get('/categories/{categorie}/edit', [CategorieController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{categorie}/update', [CategorieController::class, 'update'])->name('categories.update');
Route::delete('/categories/{categorie}/delete', [CategorieController::class, 'delete'])->name('categories.destory');

Route::get('/nieuws', [NieuwsController::class, 'index'])->name('nieuws.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/nieuws/create', [NieuwsController::class, 'create'])->name('nieuws.create');
    Route::post('/nieuws', [NieuwsController::class, 'store'])->name('nieuws.store');
    Route::get('/nieuws/{nieuws}/edit', [NieuwsController::class, 'edit'])->name('nieuws.edit');
    Route::put('/nieuws/{nieuws}/update', [NieuwsController::class, 'update'])->name('nieuws.update');
    Route::delete('/nieuws/{nieuws}/delete', [NieuwsController::class, 'delete'])->name('nieuws.destory');
});

require __DIR__ . '/auth.php';
