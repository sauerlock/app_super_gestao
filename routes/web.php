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


Route::get('/',[\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobrenos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function() { return 'Login';})->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function() { return 'Cliente';})->name('app.clientes');
    Route::get('/fornecedores', function() { return 'Fornecedores';})->name('app.fornecedores');
    Route::get('/produtos', function() { return 'Produtos';})->name('app.produtos');
});

 
/*Route::get('/rota1', function() {
    echo 'Rota 1';
})->name('site.rota1');

Route::get('/rota2', function() {
    return redirect()->route('site.rota1'); 
})->name('site.rota2');*/

Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class, 'teste'])->name('teste');
 

Route::fallback(function() {
    echo 'A rota acessada nao existe. <a href="'.route('site.index').'"> Menu principal</a>';
});







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
