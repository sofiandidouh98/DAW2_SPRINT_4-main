<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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


/*show tasks*/
//Route::view('show_tasks','tasques');

/*show all tasks*/
Route::get('/projecte/{project}/tasques',[TaskController::class, 'index'])->name('tasks.index');
/*create task form*/
Route::get('/projecte/{project}/tasques/crear',[TaskController::class, 'create'])->name('tasks.create');
Route::post('projecte/{project}/tasques',[TaskController::class, 'store'])->name('tasks.store');
/*show a task*/
Route::get('projecte/tasques/{task}', [TaskController::class, 'show'])->name('task.show');
/*edit task form*/
Route::get('projecte/tasques/{task}/edit', [TaskController::class, 'edit'])->name('task.edit');
/*edit task*/
Route::patch('projecte/tasques/{task}', [TaskController::class, 'update'])->name('task.update');
/*delete task*/
Route::delete('projecte/tasques/{task}',[TaskController::class, 'destroy'])->name('task.destroy');
/*change task state*/
Route::put('tasques',[TaskController::class, 'changeState'])->name('taskState.change');