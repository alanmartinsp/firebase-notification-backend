<?php

namespace App\Http\Requests\Notificacao;

use App\Common\Requests\Request;

class EnviarNotificacaoTodosRequest extends Request
{

    public function definirValidacao()
    {
        return [
            'mensagem' => 'required'
        ];
    }
}