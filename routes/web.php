<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// projects
Route::get('/xerofanzone', function () {
    return redirect()->away('https://xerofanzone.chimerasite.com/');
})->name('xerofanzone');

// blog
// Route::get('/blog', function () {
//     Route::get('/blog', [BlogController::class, 'edit'])->name('blog.index');
// })->name('blog');

// faq
// Route::get('/faq', function () {
//     return view('faq');
// })->name('faq');

// contact
Route::get('/card', function () {
    return view('card');
})->name('card');

// acount
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// footer
Route::get('/terms', function () {
    return view('info.terms');
})->name('terms');
Route::get('/privacy', function () {
    return view('info.privacy');
})->name('privacy');

require __DIR__.'/auth.php';


