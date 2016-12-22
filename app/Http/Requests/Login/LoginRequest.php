<?php

namespace App\Http\Requests\Login;

use App\Common\Requests\Request;

class LoginRequest extends Request
{

    public function definirValidacao()
    {
        return [
            'usu_nome' => 'required',
            'usu_senha' => 'required'
        ];
    }
}