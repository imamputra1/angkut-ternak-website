<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouterHendler;

Route::post('login', [RouterHendler::class, 'login']);
Route::post('contact-us', [RouterHendler::class, 'contact']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user', [RouterHendler::class, 'profile']);
    Route::get('/get-setting', [RouterHendler::class, 'getSetting']);
    Route::post('/update-setting', [RouterHendler::class, 'updateSetting']);
});
