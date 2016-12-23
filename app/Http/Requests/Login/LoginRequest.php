<?php

namespace App\Http\Requests\Login;

use App\Common\Requests\Request;

class LoginRequest extends Request
{

    public function definirValidacao()
    {
        return [
            'usu_login' => 'required',
            'usu_senha' => 'required'
        ];
    }
}