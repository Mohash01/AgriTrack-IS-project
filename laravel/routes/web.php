<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
Use App\Models\Listing;

//ALL Listing
Route::get('/', function () {
    return view('listings', [
        'heading'=>'Latest Listings',
        'listings' => Listing:: all( )
    ]);
});


//single listing
Route::get ('/listings/{id}',function ($id){
    return view ('listing',[
        'listing' => Listing :: find ($id)
    ]);
});

//register
//use App\Http\Controllers\RegisterController;
//use App\Http\Controllers\RegisterController;
//use App\Http\Controllers\LoginController;

Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Protected route example
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');
