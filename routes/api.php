<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IncomingMailController;
use App\Http\Controllers\OutgoingMailController;

/*
|-----------------------------
| Route login and register
|-----------------------------
*/

Route::post('/register', [AuthController::class, "register"]);
Route::post('/login', [AuthController::class, "login"]);

/*
|-----------------------------
| Route that can be accessed after login
|-----------------------------
*/
Route::group(["middleware" => "auth:api"], function () {
    Route::get('/user', [AuthController::class, "user"]);
    Route::resource('/incoming_mails', IncomingMailController::class);
    Route::resource('/outgoing_mails', OutgoingMailController::class);
});
