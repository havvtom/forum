<?php

use App\Http\Controllers\DiscussionShowController;
use App\Http\Controllers\ForumIndexController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', ForumIndexController::class)->name('home');

Route::get('/{discussion:slug}', DiscussionShowController::class)->name('discussion.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
