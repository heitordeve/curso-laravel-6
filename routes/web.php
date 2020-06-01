<?php

use Illuminate\Support\Facades\Route;

Route::get('/produtos/{idProduct?}', function ($idProduct = '') {
    return "Produtos {$idProduct}";
});

Route::get('/categoria/{flag}/posts', function ($flag) {
    return "Posts da Categoria: {$flag}";
});

Route::get('/categorias/{flag}', function ($flag) {
    return "Produtos da Categoria: {$flag}";
});

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
