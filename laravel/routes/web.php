<?php

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