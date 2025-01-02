<?php

use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;


Route::post('reciew/store', [ReviewController::class, 'store'])->name('review_store');
Route::get('/', [ReviewController::class, 'index'])->name('review_all');
Route::get('review/delete/{id}', [ReviewController::class, 'destroy'])->name('review_delete');
