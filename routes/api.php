<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::resource('tasks', App\Http\Controllers\TasksController::class);

#public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/tasks', [TasksController::class, 'index']);
Route::get('/tasks/{id}', [TasksController::class, 'show']);
Route::get('/tasks/search/{name}', [TasksController::class, 'search']);

#protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/tasks', [TasksController::class, 'store']);
    Route::put('/tasks/{id}', [TasksController::class, 'update']);
    Route::delete('/tasks/{id}', [TasksController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
});