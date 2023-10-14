<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class, 'index']);




Route::get('/authors/create', [AuthorController::class, 'create'])->name('authors.create');// Rota para exibir o formulário de criação de autor

Route::post('/authors', [AuthorController::class, 'store'])->name('authors.store'); // Rota para processar o formulário e armazenar um novo autor

Route::put('/authors/{author}', [AuthorController::class, 'update'])->name('authors.update'); // Rota para processar o formulário de edição de autor

Route::get('/authors/{author}', [AuthorController::class, 'show'])->name('authors.show'); // Rota para exibir informações de um autor específico

Route::get('/authors/{author}/edit', [AuthorController::class, 'edit'])->name('authors.edit'); // Rota para exibir o formulário de edição de um autor

Route::delete('/authors/{author}', [AuthorController::class, 'destroy'])->name('authors.destroy'); // Rota para excluir um autor