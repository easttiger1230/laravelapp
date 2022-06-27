<?php

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
//第１引数　アドレス　第２引数　関数
Route::get('/', function (){
    return view('welcome');
});
//});
//Route::get('hello', function () {
//return '<html><body><h1>Hello<h1><p>This is sample page</p><body><html>';
//});


//Route::get('hello/{id?}/{pass?}', 'HelloController@index');
Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');

//public function index()
//{
   // return view('hello.index');
//}
///実習問題///

//jissyu3_1///
//Route::get('jissyu3', 'jissyu3_1Controller@index');
//Route::post('jissyu3', 'jissyu3_1Controller@index');