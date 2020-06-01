<?php

use Illuminate\Support\Facades\Route;

Route::any('/any', function () {
    return 'Any';
});

Route::match(['post', 'get'],'/match', function () {
    return 'MATCH';
});

Route::get('/contato', function (){
    return view('contact');
});

Route::get('/empresa', function (){
    return 'Sobre Empresa';
});

Route::get('/', function () {
    return view('welcome');
});
