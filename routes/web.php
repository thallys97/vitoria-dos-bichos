<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

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

// Route::get('/', function () {
//     return view('welcome');
// });




// Route::middleware(['auth'])->group(function () {
    //     Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
    // });
    
    
    Route::middleware(['auth'])->group(function () {
        
        
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
        
        
        Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create'); // Rota para exibir o formulário de criação de um novo post
        Route::post('/posts', [PostController::class, 'store'])->name('posts.store'); // Rota para salvar um novo post
        Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit'); // Exemplo de rota para exibir o formulário de edição de um post
        Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update'); // Exemplo de rota para atualizar um post existente
        Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy'); // Exemplo de rota para excluir um post
        
        
        Route::get('/users', [UserController::class, 'index'])->name('users.index'); // Listar todos os usuários
        Route::get('/users/create', [UserController::class, 'create'])->name('users.create'); // Exibir o formulário de criação de usuário
        Route::post('/users', [UserController::class, 'store'])->name('users.store'); // Salvar um novo usuário
        Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit'); // Exibir o formulário de edição de um usuário
        Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update'); // Atualizar informações de um usuário
        Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy'); // Excluir um usuário
        
        
        Route::post('/logout', [AuthController::class, 'logout'] )->name('logout');
        
    });
    
    
Route::get('/login', [AuthController::class, 'showLoginForm'] )->name('login');
Route::post('/login', [AuthController::class, 'login'] )->name('login.request');


Route::get('/', [HomeController::class, 'index'] )->name('home.index');


Route::get('/posts', [PostController::class, 'index'])->name('posts.index'); // Exemplo de rota para listar todos os posts
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show'); // Rota para exibir um post específico



