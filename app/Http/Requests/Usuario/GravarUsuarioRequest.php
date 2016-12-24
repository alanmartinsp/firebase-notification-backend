<?php

namespace App\Http\Requests\Usuario;

use App\Common\Requests\Request;

class GravarUsuarioRequest extends Request
{

    public function definirValidacao()
    {
        return [
            'usu_nome' => 'required',
            'usu_senha' => 'required',
            'usu_login' => 'required'
        ];
    }
}