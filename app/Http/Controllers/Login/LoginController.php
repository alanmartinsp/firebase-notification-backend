<?php

namespace App\Http\Controllers\Login;

use App\Common\Controller\Controller;
use App\Http\Model\Login\Login;
use App\Http\Requests\Login\LoginRequest;
use App\Http\Model\Usuario;
use Response;

class LoginController extends Controller
{
    /**
     *
     * @var App\Http\Model\Login\Login
     */
    protected $login;
    protected $usuario;

    public function __construct()
    {
        $this->login   = new Login;
        $this->usuario = new Usuario();
    }

    public function logar(LoginRequest $request)
    {

        $usuarioInformado = $this->usuario->verificarUsuarioParaLogar($request->get('usu_login'),
            $request->get('usu_senha'));

        if (empty($usuarioInformado)) {
            return Response::json(['error' => 'Usuário ou senha incorreto'], 401);
        }
        return Response::json(['token' => \JWTAuth::fromUser($usuarioInformado)]);
    }
}