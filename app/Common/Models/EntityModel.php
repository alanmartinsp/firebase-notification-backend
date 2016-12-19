<?php

namespace App\Common\Models;

use Illuminate\Database\Eloquent\Model;

class EntityModel extends Model
{

    public function obterTodos()
    {
        return $this->all();
    }

    public function obter($id)
    {
        return $this->find($id);
    }

    public function cadastrar($campos = array())
    {
        $this->create($campos);
    }

    public function alterar($id, $campos = array())
    {
        $model = $this->find($id)->update($campos);
    }
}