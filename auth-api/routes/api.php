<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

//Register
Route::post("register", [ApiController::class, "register"]);

//login
Route::post("login", [ApiController::class, "login"]);

Route::group([
    "middleware" => ["auth:sanctum"],
], function () {
    //profile
    Route::get("profile", [ApiController::class, "profile"])->name("prof");

});

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');+