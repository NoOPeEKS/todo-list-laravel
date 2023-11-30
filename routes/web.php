<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListControler;
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

Route::get('/', [TodoListControler::class, 'index']);

Route::post('/saveitem', [TodoListControler::class, 'saveItem']);

Route::post('/markcomplete/{id}', [TodoListControler::class, 'markComplete'])->name('markcomplete');
