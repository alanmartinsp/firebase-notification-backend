<?php

namespace App\Http\Model\Login;

use Response;

class Login
{

    public function efetuarLogin($login, $senha)
    {

        //Cruar validação para o token
        $token = null;

        if(empty($token)){
            return Response::json(['erros' => 'Usuário ou senha incorretos'], 401);
        }

        return Response::json(['data' => [ 'token' => $token] ], 202);

    }
}