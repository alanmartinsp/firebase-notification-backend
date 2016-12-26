<?php
Route::post('/login', 'Login\LoginController@logar');

Route::group(['middleware' => ['autenticacao']],
    function() {

    Route::resource('/user', 'UsuarioController');
    Route::post('/usuario/alterartoken', 'Usuario\UsuarioController@alterarTokenUsuarioLogado');
    Route::post('/notificacao', 'NotificationController@enviarParaTodos');
});

Route::group(['middleware' => ['token_usuario']],
    function() {
    Route::resource('usuario/token', 'Usuario\TokenUsuarioController',
        ['only' => [ 'store']]
    );
});
