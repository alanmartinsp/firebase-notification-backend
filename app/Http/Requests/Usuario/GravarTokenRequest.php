<?php

namespace App\Http\Requests\Usuario;

use App\Common\Requests\Request;

class GravarTokenRequest extends Request
{

    public function definirValidacao()
    {
        return [
            'usu_token' => 'required'
        ];
    }
}