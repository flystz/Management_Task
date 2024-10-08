<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterDepartemenController;
use App\Http\Controllers\TasklistController;
use App\Http\Controllers\TaskController;

// Route untuk menampilkan tasks berdasarkan tasklist_id
Route::get('/tasklist/{id}/tasks', [TaskController::class, 'showTasks'])->name('tasks.show');


Route::get('/departemen', [MasterDepartemenController::class, 'index']);

// Route::get('/task/{id}', [TaskController::class, 'task'])->name('task.task');

Route::get('/task/{id}', function ($id) {
    return view('components.task', ['taskId' => $id]);
})->name('task.show');


Route::get('/', function () {
    return view('dashboard');
    //ini tu ke welcome.blade.php
    //ketika user klik dashboard masuk ke dashboard.blade.php
});


Route::get('/task', function () {
    return view('task');
    //ini tu ke task.blade.php
    //ketika user klik task yg ada di departemen masuk ke task.blade.php
});

Route::get('/add-task', function () {
    return view('add-task');
    //ini tu ke add-task.blade.php
    //ketika user klik add task yg ada di list departemen masuk ke add-task.blade.php
});

Route::get('/departemen/{id}/tasklist', [TasklistController::class, 'showTasklist']);


