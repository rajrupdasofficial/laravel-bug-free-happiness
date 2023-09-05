<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/test', function () {
    return view('about');
});

Route::get('/post/firstpost', function () {
    return view('firstpost');
})->name('firstpost');

// optional parameter
Route::get('/post/{id?}/cid/{cid?}', function (string $id = null, string $cid = null) {
    if ($id && $cid) {
        return "<h1>you're viewing : $id </h1> <br> <h6>cid :: $cid </h6>";
    } else {
        echo "None of that fucking shit found";
    };
});

// route constrains
Route::get('/garbage/{id}/{cid}', function (string $id, string $cid) {
    return "<h4>Your're viewing garbage:: $id </h4>";
});
//->where('id', '[a-zA-Z0-9]+');//special chars regular expression can be taken or given       
//->whereIn('id', ['song', 'movie', 'fuck']);
// set of selective input   
//->whereAlphaNumeric('id'); 
//can able to pass both alpha numeric and string together                               
//-> whereAlpha('id') //can only pass string characters;  ->                            
//->whereNumber('id') you can pass only number;

// Named routes
// assign a proper name to route  - so that if changes later  it won't affect the application
Route::get('/pages/asshole/designs', function () {
    return view('pages');
})->name('pages');


// Laravel page redirection that won't effect if someday we change the route name
Route::redirect('/about', '/test', 301);

//Laravel route groups if we want to assign some prename to routes
Route::prefix('preload')->group(function () {
    Route::get('/pages/asshole/designs', function () {
        return view('pages');
    })->name('pages');
    Route::get('/post/firstpost', function () {
        return view('firstpost');
    })->name('firstpost');
});

// Fallback or error handeling facility
Route::fallback(function () {
    return "<h1>Error fallback method not available</h1>";
});
