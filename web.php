<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages;
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
Route::view('dashboaard', 'mvcpages/dashboard');
Route::view('/register', 'mvcpages/register');

Route::POST('/register', [Pages::class, 'insert']);
Route::POST('/', [Pages::class, 'index']);

Route::get('/event', [Pages::class, 'event']);
Route::get('/history', [Pages::class, 'history']);
Route::get('/appointment', [Pages::class, 'appointment']);
Route::get('/info', [Pages::class, 'info']);

Route::get('/', function(){
    if(session()->has('user')){
        
    return redirect('/mvcpages/dashboard');
    }
    return view('/mvcpages/index');
});

Route::get('/logout', function(){
    if(session()->has('user')){
        session()->pull('user');
    }
    return redirect('/mvcpages/index');
});
