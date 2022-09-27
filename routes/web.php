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

/*Route::get('/', function () {
    return "Seja Bem vindo";
});*/

Route::get('/',[\App\Http\Controllers\PrincipalController::class, 'principal']);

Route::get('/sobrenos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos']);

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato']);
// nome, categoria, assunto, mensagem


//Route::get(
//    '/contato/{nome}/{categoria_id}', 
//    function(
//        string $nome = '100',
//        int $categoria_id = 1 // 1 - Informação
//    ) {
//        echo "Estamos aqui:  $nome  -  $categoria_id" ;

//    } // Parametros que determinam um valor maximo para o parametro em GET na Route(Expressoes Regulares).
//)->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');  //
// "->Metodo('parametro1(route)', 'parametro2('[expressao regular] +(sinaliza um caractere enviado.) ')" 
//Evita que a rota seja processada com parametros inconsistentes dando segurança para a aplicação.  





 /*Route::get($uri, $callback);*/


/* Verbo HTTP 

GET 
POST
PUT
PATCH
DELETE
OPTIONS

*/
