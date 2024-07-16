<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

//Register
Route::post("register", [ApiController::class, "register"])->name("reg");

Route::post("login", [ApiController::class, "login"])->name("log");


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');+