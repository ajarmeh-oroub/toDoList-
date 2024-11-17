<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;

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

// Route::get('/', [TodoListController::class, 'index']);

Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
Route::get('/todos/create', [TodoListController::class,'create'])->name('todos.create');
Route::get('/todos', [TodoListController::class,'index'])->name('todos.index');
Route::post('/todos', [TodoListController::class,'store'])->name('todos.store');
//Route::get('/todos/{todos}', [TodoListController::class,'show'])->name('todos.show') ;
Route::get('/todos/{todo}/edit', [TodoListController::class,'edit'])->name('todos.edit');
Route::put('/todos/{todos}', [TodoListController::class,'update'])->name('todos.update');
Route::delete('/todos/{todo}', [TodoListController::class,'destroy'])->name('todos.destroy');
    

});//we are gonna place the user routes here since we want to authenticate the user before entering to the different pages
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);



require __DIR__.'/auth.php';
