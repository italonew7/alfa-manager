<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoEspecialController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\RecuperarSenhaController;

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/dashboard', 'HomeController@logado')->name('logado');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});

Route::get('/produtos', function () {
    return view('produtos.principal');
});

Route::get('/quadro', [ProdutoEspecialController::class, 'index'])->name('kanban.index');

Route::get('/admin', function () {
    return view('admin.index');
})->middleware(AdminMiddleware::class)->name('admin');

Route::get('/produtos', function () {
    return view('admin.produto');
})->middleware(AdminMiddleware::class)->name('produtos');

Route::get('/produtos/criar', [ProdutoEspecialController::class, 'criar'])->name('produtos.criar');
Route::post('/produtos/salvar', [ProdutoEspecialController::class, 'salvar'])->name('produtos.salvar');

Route::get('/esqueci-senha', [RecuperarSenhaController::class, 'formSolicitar'])->name('senha.show');
Route::post('/esqueci-senha', [RecuperarSenhaController::class, 'enviarLink'])->name('senha.enviar');
Route::get('/redefinir-senha/{token}', [RecuperarSenhaController::class, 'formRedefinir'])->name('senha.redefinir');
Route::post('/redefinir-senha', [RecuperarSenhaController::class, 'redefinir'])->name('senha.redefinir');