<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\TokenController;

Route::middleware('auth:sanctum')->get('/auth/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/user/posts', function (Request $request) {
    return $request->user()->posts;
});

Route::post('/auth/token', [TokenController::class, 'store']);
Route::delete('/auth/token', [TokenController::class, 'destroy']);