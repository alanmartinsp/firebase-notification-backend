<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
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