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
//第１引数　アドレス　第２引数　関数
Route::get('/', function () {
    return view('welcome');
});

//----------トップページの表示----------//
Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');



//----------データの挿入----------//
Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');


//----------データの更新----------//
Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');


//-----------データの削除---------//
Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');


/////////////////////実習問題/////////////////////

//jissyu3_1///
Route::get('jissyu3', 'jissyu3_1Controller@index');
Route::post('jissyu3', 'jissyu3_1Controller@index');

//jissyu2_1///
Route::get('jissyu2', 'JissyuController@index');

//jissyu3_1//
Route::get('jissyu3', 'Jissyu3_1Controller@index');
Route::post('jissyu3', 'Jissyu3_1Controller@post');

//jissyu3_2//
Route::get('jissyu4', 'Jissyu3_2Controller@index');
Route::post('jissyu4', 'Jissyu3_2Controller@post');

//jissyu3_3//
Route::get('jissyu5', 'Jissyu3_3Controller@index');

//jissyu3_4//
Route::get('jissyu6', 'Jissyu4_1Controller@index');
Route::post('jissyu6', 'Jissyu4_1Controller@post');

//-----------------------------------------------//

//問題1
Route::get('Kouka1_1', 'Kouka1_1Controller@index');
//問題2
Route::get('kouka1_2', 'Kouka1_2Controller@index');
Route::post('Kouka1_2', 'Kouka1_2Controller@post');