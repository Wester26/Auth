<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');
Route::middleware(['auth', 'verified'])->group( function () {
    // Здесь пишем маршруты для вошедших пользователей (подтвердивших свой email)
    //
});