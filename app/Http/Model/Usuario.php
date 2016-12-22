<?php

namespace App\Http\Model;

use App\Common\Models\EntityModel;

class Usuario extends EntityModel
{
    protected $table      = "usuarios";
    protected $primaryKey = "usu_id";
//    protected $fillable   = ['usu_token'];
    public $timestamps    = false;

    public function verificarUsuarioParaLogar($login, $senha)
    {

        $query = $this->query();

        return $query->where("usu_login", $login)->where("usu_senha", $senha)->first();
    }
}