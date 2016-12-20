<?php

namespace App\Common\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class Request extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return $this->definirValidacao();
    }

    public function definirValidacao()
    {
        return [];
    }

    public function failedValidation(Validator $validator)
    {
        $message = $validator->getMessageBag();
        abort(401, json_encode($message));
    }
}