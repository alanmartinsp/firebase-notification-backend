<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Model\Usuario\TokenUsuario;
use App\Common\Controller\Controller;
use App\Http\Requests\Usuario\AlterarTokenUsuarioLogado;

class UsuarioController extends Controller
{
    /**
     * @var App\Http\Model\Usuario\TokenUsuario
     */
    protected $usuarioToken;

    public function __construct()
    {
        $this->usuarioToken = new TokenUsuario();
    }

    public function alterarTokenUsuarioLogado(AlterarTokenUsuarioLogado $request)
    {
        $token = str_replace("}", "",
            str_replace("Bearer {", "", $request->header('Authorization')));
        
        $user  = \JWTAuth::parseToken()->authenticate($token);
        
        return $this->usuarioToken->alterarTokenUsuarioLogado($user->usu_id,
                $request->get('token'));
    }
}