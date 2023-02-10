<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function(){
    return view('frontend.home');
});

Route::get('/mission-vision',function(){
    return view('frontend.mission-vision');
});
Route::get('/directors',function(){
    return view('frontend.directors');
});
Route::get('/managements',function(){
    return view('frontend.management');
});
Route::get('/success-milestones',function(){
   return view('frontend.success-milestone');
});

Route::get('/our-concern', function(){
    return view('frontend.our-concern');
});

Route::get('/investor-relation', function(){
    return view('frontend.investor-relation');
});

Route::get('/gallary', function(){
    return view('frontend.gallary');
});

Route::get('/our-team', function(){
    return view('frontend.team');
});
Route::get('/blogs', function(){
    return view('frontend.blog');
});

Route::get('/contact-us', function(){
    return view('frontend.contact-us');
});
Route::get('/carrer', function(){
    return view('frontend.carrer');
});

// admin route 

Route::get('/admin', function(){
    return view('backend.admin');
});