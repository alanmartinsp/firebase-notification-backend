<?php

namespace App\Http\Requests\Usuario;

use App\Common\Requests\Request;

class AlterarTokenRequest extends Request
{

    public function definirValidacao()
    {
        return [
            'token_usu',
            'token'
        ];
    }
}