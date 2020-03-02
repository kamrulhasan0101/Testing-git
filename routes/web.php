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
    return view('welcome');
});
Route::get('tests/{test}',function ($test){
    $testd=[
        'hello'=>"hello",
        'hi'=>"hi"
    ];
    if(!array_key_exists($test,$testd)){
        abort(404);
    }
    return $testd[$test];
});
Route::get('Facebook-Plugin','FacebookPluginController@index');
