<?php


Route::resource('/user', 'UsuarioController');
Route::post('/notificacao', 'NotificationController@enviarParaTodos');