<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return redirect('2017');
});

Route::group(['prefix'=>'/2017'], function() {
    Route::get('', 'HomeController@index');
    Route::get('playground', 'PlaygroundController@index');


//    'PlaygroundController@index');
//    Route::get('mail', 'MailController');
    Route::get('orcamento',['as' => 'orcamento', 'uses' => 'OrcamentoController@create']);
    Route::get('contato',['as' => 'contato', 'uses' => 'ContatoController@index']);
    Route::post('orcamento/store',['as' => 'orcamento.store', 'uses' => 'OrcamentoController@store']);
//    Route::get('orcamento/store','OrcamentoController@store');
//    Route::post('clientes', 'ClienteController@store');

});