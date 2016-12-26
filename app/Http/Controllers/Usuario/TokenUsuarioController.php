<?php

namespace App\Http\Controllers\Usuario;

use App\Common\Controller\Controller;
use App\Http\Model\Usuario\TokenUsuario;
use App\Http\Requests\Usuario\GravarTokenRequest;
use App\Http\Requests\Usuario\AlterarTokenRequest;

class TokenUsuarioController extends Controller
{
    /**
     * @var App\Http\Model\Usuario\TokenUsuario
     */
    protected $tokenUsuario;

    public function __construct()
    {
        $this->tokenUsuario = new TokenUsuario();
    }

    public function store(GravarTokenRequest $request)
    {
        return $this->tokenUsuario->cadastrar($request->all());
    }
}