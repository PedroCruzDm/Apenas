<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('menu');
});

Route::get('escolha_css', function () {
    return view('escolha_css');
});