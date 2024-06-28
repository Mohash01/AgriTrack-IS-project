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

Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
