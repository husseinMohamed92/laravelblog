<?php
use App\User;
use App\article;
use App\comment;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    echo $all=comment::all(); 
});
Route::get('main',function()
{
    return view('main');
});
Route::post('register','userConrtoller@registerUser');
Route::post('login','userConrtoller@loginUser');

Route::post('login','articleConrtoller@loginUser');