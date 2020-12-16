<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PricipalController@index')->name('site.index');

Route::get('/sobrenos', 'SobreController@index')->name('site.sobrenos');

Route::get('/contato', 'ContatoController@index')->name('site.contato');

Route::get('/login', function(){return 'Login'; })->name('site.login');




Route::prefix('/app')->group(function(){ 
Route::get('/clientes', function(){return 'cleintes'; })->name('app.clientes');
Route::get('/fornecedores', function(){return 'fornecedores'; })->name('app.fornecedores');;
Route::get('/produtos', function(){return 'produtos'; })->name('app.produtos');;
});

Route::fallback(function(){
    echo "ERRO AO CARREGAR";
});
// Route::get('/contato2/{nome?}/{categoria?}/{assunto?}/{mensagem?}', 
// 	function(
// 		string $nome = "Sem Nome", 
// 		string $categoria = "Não encontrado", 
// 		string $assunto = "Não tem Assunto", 
// 		string $mensagem = "Não falaram nada"){
// 	echo "Estamos funcionando contato $nome - $categoria - $assunto - $mensagem";
// });

// //ROTAS COM EXPRESSÕES REGULARES
// Route::get('/contato/{nome}/{categoria_id}', 
// 	function(
// 		string $nome = "Sem Nome", 
// 		int $categoria_id = 1){

// 	echo "Estamos funcionando contato $nome - $categoria_id ";
// }
// )->where('categoria_id', '[0-9]')->where('nome', '[A-Za-z]+');
