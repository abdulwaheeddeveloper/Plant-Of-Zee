<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::middleware("auth")->group(function () {
    Route::View("/","index")->name("/");
    Route::View("about","about")->name('about');
    Route::View("contact","contact")->name('contact');
    Route::View("project","project")->name('project');
    Route::View("service","service")->name('service');
});

Route::View("Signup","Signup")->name("Signup");
Route::View("Login","Login")->name("Login");
Route::POST("signup_auth",[AuthController::class,"signup"])->name("signup_auth");
Route::POST("login_auth",[AuthController::class,"login"])->name("login_auth");
Route::GET("Logout",[AuthController::class,"logout"])->name("Logout");