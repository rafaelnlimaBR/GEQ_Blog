<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('teste', function(){
   return \App\Post::orderBy('created_at', 'desc')->first();
});

/*Route Autenticação*/
Route::get('login',['as'=>'login','uses'=>'Front\LoginController@index']);
Route::get('sair',['as'=>'sair','uses'=>'Front\LoginController@sair']);
Route::post('entrar',['as'=>'entrar','uses'=>'Front\LoginController@entrar']);

/*Route Front*/
Route::get('',['as'=>'home','uses'=>'Front\HomeController@index']);
Route::get('post/{id}',['as'=>'post.view','uses'=>'Front\HomeController@detalhe']);


/*Route Back ou Admin*/
Route::group(['prefix' => 'admin','middleware' => ['auth:web']], function () {

    /*Route Usuario*/
    Route::get('usuario',['as'=>'usuario.index','uses'=>'Back\UsuarioController@index']);
    Route::get('usuario/novo',['as'=>'usuario.novo','uses'=>'Back\UsuarioController@novo']);
    Route::get('usuario/editar/{id}',['as'=>'usuario.editar','uses'=>'Back\UsuarioController@editar']);
    Route::post('usuario/cadastrar',['as'=>'usuario.cadastrar','uses'=>'Back\UsuarioController@cadastrar']);
    Route::post('usuario/atualizar',['as'=>'usuario.atualizar','uses'=>'Back\UsuarioController@atualizar']);
    Route::post('usuario/excluir',['as'=>'usuario.excluir','uses'=>'Back\UsuarioController@excluir']);
    Route::post('usuario',['as'=>'usuario.pesquisa','uses'=>'Back\UsuarioController@pesquisa']);

    /*Route Post*/
    Route::get('post',['as'=>'post.index','uses'=>'Back\PostController@index']);
    Route::get('post/novo',['as'=>'post.novo','uses'=>'Back\PostController@novo']);
    Route::get('post/editar/{id}',['as'=>'post.editar','uses'=>'Back\PostController@editar']);
    Route::post('post/cadastrar',['as'=>'post.cadastrar','uses'=>'Back\PostController@cadastrar']);
    Route::post('post/atualizar',['as'=>'post.atualizar','uses'=>'Back\PostController@atualizar']);
    Route::post('post/excluir',['as'=>'post.excluir','uses'=>'Back\PostController@excluir']);
    Route::post('post',['as'=>'post.pesquisa','uses'=>'Back\PostController@pesquisa']);


    /*Registros necessários para a página post*/
    View::composer(['back.post.includes.formulario'],function($view) {
        $usuarios = \App\Usuario::all();

        $view->with('usuarios',$usuarios);
    });


});
