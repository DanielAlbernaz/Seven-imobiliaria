<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerBanner;
use App\Http\Controllers\ControllerProduto;
use App\Http\Controllers\ControllerUser;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

// Route::get('/', function () {
//     return view('site.paginas.principal');
// });
Route::get('/', 'App\Http\Controllers\Site\ControllerPrincipal@index')->name('principal');

Auth::routes();

Route::get('envio-email', function(){

    $user = new stdClass();
    $user->name = 'Daniel Albernaz';
    $user->email = 'danielgomesalbernaz@gmail.com';
    // return new \App\Mail\newLaravelTips($user);
    Mail::send(new \App\Mail\newLaravelTips($user));
});


Route::post('/logar', [ControllerUser::class, 'logar'])->name('logar');
/**Usuários painel */


//Parametro nessa rota para detalhes do mimove
// Route::get('/imovel', 'App\Http\Controllers\Site\ControllerImovel@detail')->name('detalhe.imovel');
Route::get('/imoveis', 'App\Http\Controllers\Site\ControllerImovel@index')->name('imoveis');
Route::get('/institucional', 'App\Http\Controllers\Site\ControllerInstitucional@index')->name('institucional');
Route::get('/politica-privacidade', 'App\Http\Controllers\Site\ControllerPolitica@index')->name('politica');
Route::get('/termo-uso', 'App\Http\Controllers\Site\ControllerTermo@index')->name('termo');
Route::post('/busca-imoveis', 'App\Http\Controllers\Site\ControllerImovel@busca')->name('busca');
Route::get('/buscar', 'App\Http\Controllers\Site\ControllerImovel@buscar')->name('buscar');
Route::post('/buscar-imoveis-lista-mapa', 'App\Http\Controllers\Site\ControllerImovel@listarLocalizacao')->name('listarLocalizacao');

Route::get('/detalhes-imovel', 'App\Http\Controllers\Site\ControllerImovel@detalhe')->name('detalhes.imovel');



Route::middleware(['auth'])->group(function() {
    Route::prefix('sistema')->group(function(){

        Route::get('/', function () {
            return view('painel/principal');
        });

            Route::name('usuario.')->group(function (){
                Route::get('/cadastrar-usuario', [ControllerUser::class, 'create'])->name('cadastrar');
                Route::post('/salvar-usuario', [ControllerUser::class, 'store'])->name('salvar');
                Route::get('/listar-usuario', [ControllerUser::class, 'list'])->name('listar');
                Route::post('/status-usuario', [ControllerUser::class, 'status'])->name('status');
                Route::get('/editar-usuario/{id}', [ControllerUser::class, 'findUser'])->name('find');
                Route::post('/edit-usuario', [ControllerUser::class, 'edit'])->name('edit');
                Route::post('/deletar-usuario/{id}', [ControllerUser::class, 'delete'])->name('delete');
                Route::get('/logout', [ControllerUser::class, 'logout'])->name('logout');
            });


            Route::name('banner.')->group(function (){
                Route::get('/cadastrar-banner', 'App\Http\Controllers\Painel\ControllerBanner@create')->name('cadastrar');
                Route::post('/salvar-banner', 'App\Http\Controllers\Painel\ControllerBanner@store')->name('salvar');
                Route::get('/listar-banner', 'App\Http\Controllers\Painel\ControllerBanner@list')->name('listar');
                Route::post('/status-banner', 'App\Http\Controllers\Painel\ControllerBanner@status')->name('status');
                Route::post('/deletar-banner/{id}', 'App\Http\Controllers\Painel\ControllerBanner@delete')->name('delete');
                Route::get('/editar-banner/{id}', 'App\Http\Controllers\Painel\ControllerBanner@find')->name('find');
                Route::post('/edit-banner', 'App\Http\Controllers\Painel\ControllerBanner@edit')->name('edit');
            });


            Route::name('imovel.')->group(function (){
                Route::get('/cadastrar-imovel', 'App\Http\Controllers\Painel\ControllerImovel@create')->name('cadastrar');
                Route::post('/salvar-imovel', 'App\Http\Controllers\Painel\ControllerImovel@store')->name('salvar');
                Route::post('/salvar-galleria/{id}', 'App\Http\Controllers\Painel\ControllerImovel@storeGalleria')->name('galleria');
                Route::get('/listar-imovel', 'App\Http\Controllers\Painel\ControllerImovel@list')->name('listar');
                Route::post('/status-imovel', 'App\Http\Controllers\Painel\ControllerImovel@status')->name('status');
                Route::post('/deletar-imovel/{id}', 'App\Http\Controllers\Painel\ControllerImovel@delete')->name('delete');
                Route::post('/deletar-imovel-imagem/{id}', 'App\Http\Controllers\Painel\ControllerImovel@destroyImage')->name('destroy');
                Route::get('/editar-imovel/{id}', 'App\Http\Controllers\Painel\ControllerImovel@find')->name('find');
                Route::post('/edit-imovel', 'App\Http\Controllers\Painel\ControllerImovel@edit')->name('edit');
            });

            Route::name('institucional.')->group(function (){
                Route::get('/editar-institucional/{id}', 'App\Http\Controllers\Painel\ControllerInstitucional@find')->name('find');
                Route::post('/edit-institucional', 'App\Http\Controllers\Painel\ControllerInstitucional@edit')->name('edit');
            });

            Route::name('empresa.')->group(function (){
                Route::get('/editar-empresa/{id}', 'App\Http\Controllers\Painel\ControllerEmpresa@find')->name('find');
                Route::post('/edit-empresa', 'App\Http\Controllers\Painel\ControllerEmpresa@edit')->name('edit');
            });

            Route::name('instalacoes.')->group(function (){
                Route::get('/editar-instalacoes/{id}', 'App\Http\Controllers\Painel\ControllerInstalacoes@find')->name('find');
                Route::post('/edit-instalacoes', 'App\Http\Controllers\Painel\ControllerInstalacoes@edit')->name('edit');
                Route::post('/salvar-galleria-instalacoes/{id}', 'App\Http\Controllers\Painel\ControllerInstalacoes@storeGalleria')->name('galleria');
                Route::post('/deletar-instalacoes-imagem/{id}', 'App\Http\Controllers\Painel\ControllerInstalacoes@destroyImage')->name('destroy');
            });



    });
});










