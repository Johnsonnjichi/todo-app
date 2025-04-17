<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::resource('todos', TodoController::class);
Route::patch('/todos/{todo}/complete', [TodoController::class, 'complete'])->name('todos.complete');

