<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class GravarUsuarioRequest extends Request
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
        ];
    }
    
}