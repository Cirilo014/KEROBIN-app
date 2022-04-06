<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KerobinController;
use App\Http\Controllers\AdministradorController;

use App\Http\Controllers\AutenticacaoController;
use App\Http\Controllers\UsuarioController;

use App\Http\Controllers\Pessoal_clinicoController;
use App\Http\Controllers\UtenteController;










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

// Rota Principal ou raiz do Sistema 
Route::get('/',  [KerobinController::class , 'index']);


//Rotas para a AUTENTICAÇÃO
Route::get('/autenticacao', [AutenticacaoController::class, 'autenticacao']);
Route::post('/autenticar', [AutenticacaoController::class, 'autenticar'])->name('autenticar');




/*Rotas para as retornar as Áreas do ADMINISTRADOR, ,PESSOAL CLÍNICO, UTENTE */
Route::get('/administrador',  [AutenticacaoController::class , 'show_administrador']);
Route::get('/pessoal_clinico',  [AutenticacaoController::class , 'show_pessoal_clinico']);
Route::get('/utente',  [AutenticacaoController::class , 'show_utente']);

 
/*Rota para cadastrar e exibir ADMINISTRADORES*/

Route::get('/create_admin', [AdministradorController::class, 'create_admin']);
Route::post('/cadastro',  [UsuarioController::class , 'cadastros'])->name('cadastro');


/*Rota para cadastrar UTENTES*/
Route::get('/create_utente',  [UtenteController::class , 'create_utente']);
Route::post('/cadastro',  [UsuarioController::class , 'cadastros']);


/*Rota para cadastrar PESSOAL CLÍNICO*/
Route::get('/create_pessoal_clinico',  [Pessoal_clinicoController::class , 'create_pessoal_clinico']);
Route::post('/cadastro',  [UsuarioController::class , 'cadastros'])->name('cadastro');

