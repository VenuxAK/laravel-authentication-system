<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", [PagesController::class, "index"]);

// Auth

// Register
Route::get("/register", [AuthController::class, "create"])->middleware("guest");
Route::post("/register", [AuthController::class, "store"])->middleware("guest");

// Login
Route::get("/login", [AuthController::class, "login"])->middleware("guest");

// Logout
Route::post("/logout", [AuthController::class, "logout"])->middleware("auth");
