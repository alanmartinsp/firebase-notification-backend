<?php

namespace App\Http\Controllers\Login;

use App\Common\Controller\Controller;
use App\Http\Model\Login\Login;

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

        return $this->login->efetuarLogin( $request->only(['usu_nome', 'usu_senha']));
    }
}