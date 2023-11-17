<?php

use App\Http\Controllers\EstudianteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('estudiante', [EstudianteController::class, 'index']);
Route::get('estudiante/create', [EstudianteController::class, 'create']);
Route::post('estudiante', [EstudianteController::class, 'store']);
Route::get('estudiante/{id}/edit', [EstudianteController::class, 'edit']);
Route::put('estudiante/{id}', [EstudianteController::class, 'update']);
Route::delete('estudiante/{id}', [EstudianteController::class, 'destroy']);