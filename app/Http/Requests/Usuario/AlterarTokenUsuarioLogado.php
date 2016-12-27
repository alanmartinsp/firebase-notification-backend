<?php

namespace App\Http\Requests\Usuario;

use App\Common\Requests\Request;

class AlterarTokenUsuarioLogado extends Request
{

    public function definirValidacao()
    {
        return [
            'token'
        ];
    }
}