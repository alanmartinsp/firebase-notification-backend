<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\GravarUsuarioRequest;
use \App\Http\Model\Usuario;

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
    public function store(GravarUsuarioRequest $request)
    {
        $this->usuario->create($request->only(['usu_token']));
    }
}