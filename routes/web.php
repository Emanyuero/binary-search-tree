<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('insert');
})->name('bst.home');

Route::get('/bst/search', function (){
    return view('components.search');
})->name('bst.search');
