<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => 'auth'], function() {
    Route::get('folders/{id}/tasks', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('/folders/create', [FolderController::class, 'showCreateFrom'])->name('folders.create');
    Route::post('/folders/create', [FolderController::class, 'create']);
    Route::get('/folders/{id}/tasks/create', [TaskController::class, 'showCreateForm'])->name('tasks.create');
    Route::post('/folders/{id}/tasks/create', [TaskController::class, 'create']);
    Route::get('/folders/{id}/tasks/{task_id}/edit', [TaskController::class, 'showEditForm'])->name('tasks.edit');
    Route::post('/folders/{id}/tasks/{task_id}/edit', [TaskController::class, 'edit']);
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/loginhome', [HomeController::class, 'loginhome'])->name('login.home');
});



Auth::routes();

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
