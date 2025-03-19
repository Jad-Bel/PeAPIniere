<?php

use App\Http\Controllers\api\ApiController;
use Illuminate\Support\Facades\Route;


Route::post("register", [ApiController::class, 'register']);
Route::post("login", [ApiController::class, 'login']);

Route::group([
    "middleware" => ["auth:api"]
], function () {
    Route::get("profile", [ApiController::class, 'profile']);
    Route::get("refresh", [ApiController::class, 'refreshToken']);
    Route::get("logout", [ApiController::class, 'logout']);
});
