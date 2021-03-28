<?php

use App\Http\Controllers\LogoutController;
use App\Http\Controllers\TasksController;
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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');


Route::get('/dashboard', [TasksController::class,'index'])->middleware(['auth'])->name('dashboard');

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/logout' ,[LogoutController::class, 'flush'] )->name('logout');

Route::get('/createTaskForm', [TasksController::class,'createTaskForm'])->name('createTaskForm');

Route::post('/createNewTask', [TasksController::class, 'createNewTask'])->name('createNewTask');

Route::get('/editTaskForm/{id}', [TasksController::class, 'editTaskForm'])->name('editTaskForm');

Route::post('/editTask', [TasksController::class, 'editTask'])->name('editTask');

Route::get('/editAllTasks', [TasksController::class, 'editAllTasks'])->name('editAllTasks');

Route::get('/deleteTask/{id}', [TasksController::class, 'deleteTask'])->name('deleteTask');




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

