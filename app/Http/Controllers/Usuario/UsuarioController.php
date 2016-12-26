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
        return $this->usuarioToken->alterarTokenUsuarioLogado($request->get('token_usu'),
                $request->get('token'));
    }
}