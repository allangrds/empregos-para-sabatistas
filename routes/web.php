<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('user.home');

Route::get('/vagas', function () {
    return view('home');
})->name('user.jobs');

Route::get('/publique-uma-vaga', function () {
    return view('home');
})->name('user.publish-jobs');
