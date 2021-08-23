<?php
use App\Models\Task;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
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
Route::get('/' , function () {
    return view('welcome');
});

Route::get('/tasks', [TasksController::class, 'index']);

Route::get('/tasks/create', [TasksController::class, 'create']);

Route::post('/tasks', [TasksController::class, 'store']);

Route::get('/tasks/{task}', [TasksController::class, 'show']);

Route::post('/tasks/{task}', [TasksController::class, 'changeFlag']);

Route::post('/tasks/{task}/edit', [TasksController::class, 'update']);
Route::get('/tasks/{task}/edit', [TasksController::class, 'edit']);



