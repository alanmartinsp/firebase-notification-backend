<?php

namespace App\Http\Middleware;

use Closure;
use Exception;

class TokenUsuario
{

    public function handle($request, Closure $next)
    {

        if(empty($request->header('token'))){
            throw new Exception('Token não fornecido');
        }

        $tokenAutenticacao = "bf12e1515c25c7d8c0352f1413ab9a15";
        $tokenAutenticacaoRecebido = $request->header('token');

        if($tokenAutenticacaoRecebido !== $tokenAutenticacao){
            throw new Exception("Token invalido");
        }        

        return $next($request);
    }
}
