<?php

use App\Http\Controllers\JoinUsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/join-us',[JoinUsController::class, 'show'])->name('auth.join-us');
Route::post('/join-us',[JoinUsController::class, 'signup'])->name('auth.join-us-action');
Route::get('/welcome',[JoinUsController::class, 'welcome'])->name('auth.mailsentwelcome');
