<?php

use App\Models\Estate;
use App\Models\Post;
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

Route::get('/', function(){
    return view('post',[]);
});

Route::view('/von-poll', 'home', ['estates' => Estate::all()]);

Route::get('/von-poll/estates/{estate:slug}', function (Estate $estate) {
//    $state = Estate::findOrFail($id);
    return view('estate',['estate'=> $estate]);
//
});

