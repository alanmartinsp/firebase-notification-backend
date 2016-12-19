<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class MyModel extends Model
{

    public function obterTodos()
    {
        return $this->all();
    }
}