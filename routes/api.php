<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\BudgetsController;
use App\Http\Controllers\ExpenceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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

Route::post('/register', [AuthController::class, 'createUser']);
Route::post('/login', [AuthController::class, 'loginUser']);
//Route::apiResource("categories",CategoryController::class);
//Route::apiResource("categories",ExpenceController::class);

Route::post("login",[UserController::class,'index']);
Route::post("add",[CategoriesController::class,'add']);
Route::post("insert",[BudgetsController::class,'insert']);