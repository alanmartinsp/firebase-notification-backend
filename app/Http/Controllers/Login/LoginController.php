<?php

namespace App\Http\Controllers\Login;

use App\Common\Controller\Controller;
use App\Http\Model\Login\Login;
use App\Http\Requests\Login\LoginRequest;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class LoginController extends Controller
{
    /**
     *
     * @var App\Http\Model\Login\Login
     */
    protected $login;

    public function __construct()
    {
        $this->login = new Login;
    }

    public function logar(LoginRequest $request)
    {
        return $this->login->efetuarLogin($request->get('usu_nome'),
                $request->get('usu_senha'));
    }
}