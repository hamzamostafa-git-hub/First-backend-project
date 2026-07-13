<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return "Welcome to my ToDo App";
});


Route::get('/about', function () {
    return "About this project";
});


Route::get('/tasks', [TaskController::class, 'index']);

Route::get('/tasks/create', [TaskController::class, 'create']);

Route::post('/tasks', [TaskController::class, 'store']);

// Route::get('/tasks/{task}/edit', [TaskController::class, 'edit']);
Route::get('/tasks/{id}/edit', [TaskController::class, 'edit']);

// Route::put('/tasks/{task}', [TaskController::class, 'update']);
Route::put('/tasks/{id}', [TaskController::class, 'update']);

Route::delete('/tasks/{task}', [TaskController::class, 'destroy']);

// Request:
// Method: GET,POST, ...
// Body: {
//     "key" : "value"
// }
// queryParmaters: 
//     api => /tasks/create?key=value&key2=value

// Parameters:
//         api => /tasks/{task}
