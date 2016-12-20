<?php

namespace App\Http\Controllers;

use App\Common\Controller\Controller;
use App\Http\Requests\Usuario\GravarUsuarioRequest;
use \App\Http\Model\Usuario;
use App\Http\Requests\Usuario\ObterUsuarioRequest;

class UsuarioController extends Controller
{
    /**
     *
     * @var App\Http\Model\Usuario;
     */
    protected $usuario;

    public function __construct()
    {
        $this->usuario = new Usuario();
    }

    public function index(ObterUsuarioRequest $request)
    {
        return $this->usuario->obterTodos();
    }
    
    public function store(GravarUsuarioRequest $request)
    {
        $this->usuario->create($request->only(['usu_token']));
    }

}