<?php

use App\Http\Controllers\FormularioController;
use App\Http\Controllers\PostsController;
use App\Models\Formulario;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('mostrardados', [ FormularioController::class, 'mostrarDados' ]);//inserir rota que chama a função
Route::get('inserirdados', [ FormularioController::class, 'inserirDados' ]);
Route::get('deletartudo', [ FormularioController::class, 'deletartudo' ]);
Route::get('inserirdinamico', [ FormularioController::class, 'inserirdinamico' ]);

Route::get('dados/{id}', function ($id) {
    return Formulario::find($id);
});


Route::get('posts', [ PostsController::class, 'mostrarPosts' ]);