<?php

namespace App\Http\Model\Login;

use App\Http\Model\Usuario;
use JWTAuth;
use Response;

class Login
{
    protected $usuario;

    public function __construct()
    {
        return $this->usuario = new Usuario();
    }

    public function efetuarLogin($login, $senha)
    {

        $usuario = $this->usuario->verificarUsuarioParaLogar($login, $senha);

        if (empty($usuario)) {
            return Response::json([ 'error' => 'Usuário não encontrado'], 401);
        }

        return Response::json([ 'token' => JWTAuth::fromUser($usuario)]);
    }
}