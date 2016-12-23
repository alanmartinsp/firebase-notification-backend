<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Middleware\BaseMiddleware;

class Autenticacao extends BaseMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$token = $this->auth->setRequest($request)->getToken()) {
            return $this->respond('tymon.jwt.absent',
                    [
                    'errors' => [
                        'mensagem' => 'Nenhum Token Fornecido!'
                    ]
                    ], 401);
        }

        $user = $this->auth->authenticate($token);

        if (!$user) {
            return $this->respond('tymon.jwt.user_not_found',
                    [
                    'errors' => [
                        'mensagem' => 'Usuário não encontrado!'
                    ]
                    ], 401);
        }

        $this->events->fire('tymon.jwt.valid', $user);

        return $next($request);
    }
}