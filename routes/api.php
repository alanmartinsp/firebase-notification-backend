<?php
Route::post('/login', 'Login\LoginController@logar');

Route::group(['middleware' => ['autenticacao']],
    function() {

    Route::resource('/user', 'UsuarioController');
    Route::post('/notificacao', 'NotificationController@enviarParaTodos');
});
