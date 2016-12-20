<?php

namespace App\Http\Requests\Notificacao;

use App\Common\Requests\Request;

class EnviarNotificacaoUsuarioRequest extends Request
{

    public function definirValidacao()
    {
        return [

            'usu_id' => 'required',
            'mensagem' => 'required'
        ];
    }
}