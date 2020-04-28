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

Route::group(['prefix' => 'posts'],function (){
    //文章列表
    Route::get('/','PostController@index');
//文章详情页
    Route::get('/{post}','PostController@show');
//创建文章
    Route::get('/create','PostController@create');
    Route::post('/','PostController@store');
//编辑文章
    Route::get('/{post}/edit','PostController@edit');
    Route::put('/','PostController@ipdate');

//删除文章
    Route::get('/delete','PostController@delete');

});
