<?php

use App\Http\Controllers\CreatorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\RaceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource("heroes", HeroController::class);
Route::apiResource("creators", CreatorController::class);
Route::apiResource("races", RaceController::class);
Route::apiResource("skills", SkillController::class);
Route::apiResource("users", UserController::class);
