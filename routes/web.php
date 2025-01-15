<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\Tweets\TweetStoreController;
use App\Http\Controllers\Tweets\TweetEditController;
use App\Http\Controllers\Tweets\TweetUpdateController;
use App\Http\Controllers\Tweets\TweetDeleteController; // Tambahkan ini



Route::get('/', function () {
    return view('welcome');
});

Route::get('/timeline', TimelineController::class)->middleware(['auth', 'verified'])->name('dashboard');
Route::post('Tweets', TweetStoreController::class)->name('tweet.store');
Route::get('Tweets/{id}/edit', TweetEditController::class)->name('tweets.edit'); // Menggunakan GET untuk edit
Route::put('tweets/{id}', TweetUpdateController::class)->name('tweets.update');
Route::delete('tweets/{id}', TweetDeleteController::class)->name('tweets.destroy');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
