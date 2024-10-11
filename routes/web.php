<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterDepartemenController;
use App\Http\Controllers\TasklistController;
use App\Http\Controllers\TaskController;



    


Route::get('/departemen', [MasterDepartemenController::class, 'index']);
Route::get('/departemen/{id}/tasklist', [TasklistController::class, 'showTasklist']);

Route::get('/tasklist/{id}/tasks', [TaskController::class, 'showTasks'])->name('tasks.show');
Route::post('/tasks/{id}/move', [TaskController::class, 'moveTask'])->name('moveTask');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/tasks/create/{id}', [TaskController::class, 'createTask'])->name('tasks.create');
Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');

Route::view('/', 'welcome');    

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
