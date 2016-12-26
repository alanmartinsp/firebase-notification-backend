<?php

namespace App\Http\Model\Usuario;

use App\Common\Models\EntityModel;

class TokenUsuario extends EntityModel
{
    protected $table      = "tokens";
    protected $primaryKey = "token_id";
    protected $fillable   = ["token_usu", "token"];

}