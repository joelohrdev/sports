<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/game-archive', function() {
    return view('game-archive');
});

Route::get('/tournament-archive', function() {
    return view('tournament-archive');
});
