<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('listings',[
        'heading' => 'Latest Listings',
        'listings' => listing::all()
    ]);
});

Route::get('listings/{id}', function($id){
    return view('listing',[
        'listing'=> Listing::find($id)
    ]);
});
 






























// Route::get('/hello', function () {
//     return '<h1> hello</h1>';
// });

// Route::get('/helloo', function () {
//     return response('<h1> hello World</h1>');
// });