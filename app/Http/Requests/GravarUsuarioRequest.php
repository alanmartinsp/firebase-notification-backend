<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Contracts\Validation\Validator;
use Response;

class GravarUsuarioRequest extends Request
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'usu_token' => 'required'
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $message = $validator->getMessageBag();
        abort(401, json_encode($message));
    }
    
}