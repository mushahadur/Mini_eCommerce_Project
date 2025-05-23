<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontEnd\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('frontend.pages.home');
// });


//__Rotue For Frontend HomeController --**
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product-details', [HomeController::class, 'details'])->name('details');

Route::get('/cart', [HomeController::class, 'cart'])->name('cart');

Route::get('/dashboard', function () {
    return view('backend.pages.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
