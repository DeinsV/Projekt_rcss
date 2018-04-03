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

Route::get('/', function () {
    return view('page/index')->with(['page' => 'index']);
});

Route::get('/about_us', function () {
    return view('page/about_us')->with(['page' => 'about_us']);
});

Route::get('/article', function () {
    return view('page/article')->with(['page' => 'article']);
});

Route::get('/chat', function () {
    return view('page/chat')->with(['page' => 'chat']);
});

Route::get('/register', function () {
    return view('page/register')->with(['page' => 'register']);
});

Route::get('/articlemain', function () {
    return view('page/articlemain')->with(['page' => 'articlemain']);
});

Route::post('/register', 'AccountController@storeUser');

Route::post('/chat/save-message', 'AccontController@saveChatMessage');

Route::get('/chat/save-messages', 'AccontController@saveChatMessage');
