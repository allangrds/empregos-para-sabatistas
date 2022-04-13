<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::get('/', function () {
    return view('home');
})->name('user.home');

Route::middleware(['throttle:11,1'])->group(function () {
    Route::get('/vagas', [
        JobController::class,
        'index'
    ])->name('user.jobs');
});

Route::middleware(['throttle:5,1'])->group(function () {
    Route::get('/vagas/{slug}', [
        JobController::class,
        'show'
    ])->name('user.jobs_detail');
});

Route::get('/publique-uma-vaga', [
    JobController::class,
    'create'
])->name('user.publish_jobs');

Route::middleware(['throttle:8,1'])->group(function () {
    Route::post('/publique-uma-vaga', [
        JobController::class,
        'store'
    ])->name('user.publish_jobs_post');
});

