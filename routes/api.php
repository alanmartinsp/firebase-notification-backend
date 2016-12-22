<?php

Route::post('/login', 'Login\LoginController@logar');

Route::resource('/user', 'UsuarioController');
Route::post('/notificacao', 'NotificationController@enviarParaTodos');