<?php

namespace App\Http\Model\Usuario;

use App\Common\Models\EntityModel;

class TokenUsuario extends EntityModel
{
    protected $table      = "tokens";
    protected $primaryKey = "token_id";
    protected $fillable   = ["token_usu", "token"];

    public function alterarTokenUsuarioLogado($usu_id, $token)
    {

        $query      = $this->query();
        $tokenSalvo = $query->where('token', $token)->first();

        if (empty($tokenSalvo)) {
            return $this->cadastrar(['token_usu' => $usu_id, 'token' => $token]);
        }

        return $this->alterar($tokenSalvo->token_id, ['token_usu' => $usu_id]);
    }
}