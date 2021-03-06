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

//----------レコードを取得----------//
Route::get('hello/show', 'HelloController@show');

//---------レコードの表示-----------//
Route::get('person', 'PersonController@index');

//---------IDによる検索-----------//
Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search');

//---------モデルの新規保存-----------//
Route::get('person/add', 'PersonController@add');
Route::post('person/add', 'PersonController@create');

//---------モデルの更新-----------//
Route::get('person/edit', 'PersonController@edit');
Route::post('person/edit', 'PersonController@update');

//---------モデルの削除-----------//
Route::get('person/del', 'PersonController@delete');
Route::post('person/del', 'PersonController@remove');

//---------テンプレートの作成-----------//
Route::get('board', 'BoardController@index');
Route::get('board/add', 'BoardController@add');
Route::post('board/add', 'BoardController@create');

//---------セッション-----------//
Route::get('hello/session', 'HelloController@ses_get');
Route::post('hello/session', 'HelloController@ses_put');
Auth::routes();

//---------認証テスト-----------//
Route::get('hello', 'HelloController@index')
    ->middleware('auth');
Route::get('hello/auth', 'HelloController@getAuth');
Route::post('hello/auth', 'HelloController@postAuth');
Route::get('hello', 'HelloController@index')->middleware('auth');


///実習問題///
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

//jissyu5_1//
Route::get('jissyu10', 'jissyu5_1Controller@index');
Route::get('jissyu10/show', 'jissyu5_1Controller@show');

//jissyu5_2//
Route::get('jissyu11', 'Jissyu5_2Controller@index');
Route::get('jissyu11/show', 'Jissyu5_2Controller@show');
Route::get('jissyu11/add', 'Jissyu5_2Controller@add');
Route::post('jissyu11/create', 'Jissyu5_2Controller@create');
Route::get('jissyu11/edit', 'Jissyu5_2Controller@edit');
Route::post('jissyu11/update', 'Jissyu5_2Controller@update');
Route::get('jissyu11/del', 'Jissyu5_2Controller@del');
Route::post('jissyu11/remove', 'Jissyu5_2Controller@remove');

Route::get('/home', 'HomeController@index')->name('home');