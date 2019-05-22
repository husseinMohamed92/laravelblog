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
    return view('layouts.app');
});
Route::get('main',function()
{
    return view('main');
});
Route::post('register','userConrtoller@registerUser');
Route::post('login','userConrtoller@loginUser');

Route::get('allarticles','articleConrtoller@showallarticle');
Route::get('myarticles','articleConrtoller@showmyarticle');
Route::get('addarticles','articleConrtoller@addarticle');
Route::post('addarticles','articleConrtoller@addarticle');


Route::post('/addcomment','commentsController@addcomment');


Route::auth();
Route::get('/home', 'HomeController@index');
