<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', "PrincipalController@principal")->name('site.index');
Route::get('/contato', "ContatoController@contato")->name('site.contato');
Route::get('/sobre-nos', "SobreNosController@sobreNos")->name('site.sobrenos');
Route::get('/login', function(){return 'Login';})->name('site.login');

// Route::get('/contato/{nome}/{categoria_id}',
// function(
//         string $nome = "Disconhecido"
//         ,int $categoria_id =  1 // 1- Informação
//         ){
//     echo "Nome: $nome - Categoria $categoria_id";
// })->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+');


Route::prefix("/app")->group(function(){    
    Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', "FornecedoresController@fornecedores")->name('app.fornecedores');
    Route::get('/produtos', function(){return 'Produtos';})->name('app.produtos');
});

Route::fallback(function(){
    echo "A rota acessada não existe. <a href='/'>clique aqui pra voltar</a>";
});

Route::get('/teste/{p1}/{p2}','TesteController@teste')->name('teste');
