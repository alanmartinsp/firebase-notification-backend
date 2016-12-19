<?php

namespace App\Http\Requests\Notificacao;

use App\Http\Requests\Request;
use Illuminate\Contracts\Validation\Validator;

class EnviarNotificacaoTodosRequest extends Request
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'mensagem' => 'required'
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $message = $validator->getMessageBag();
        abort(401, json_encode($message));
    }

}