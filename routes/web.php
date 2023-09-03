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

Route::get('about', function () {
    return view('about');
});

Route::get('/post/firstpost', function () {
    return view('firstpost');
});

// optional parameter
Route::get('/post/{id?}/cid/{cid?}', function (string $id = null, string $cid = null) {
    if ($id && $cid) {
        return "<h1>you're viewing : $id </h1> <br> <h6>cid :: $cid </h6>";
    } else {
        echo "None of that fucking shit found";
    };
});

// route constrains
Route::get('/garbage/{id}', function (string $id) {
    return "<h4>Your're viewing garbage:: $id </h4>";
})->where('id', '[a-zA-Z0-9]+');//special chars regular expression can be taken or given       
//->whereIn('id', ['song', 'movie', 'fuck']);
// set of selective input   
//->whereAlphaNumeric('id'); 
//can able to pass both alpha numeric and string together                               
//-> whereAlpha('id') //can only pass string characters;  ->                            
//->whereNumber('id') you can pass only number;
