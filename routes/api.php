<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouterHendler;

Route::post('login', [RouterHendler::class, 'login']);
Route::get('/user', [RouterHendler::class, 'profile'])->middleware('auth:sanctum');
