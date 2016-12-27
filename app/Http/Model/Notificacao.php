<?php

namespace App\Http\Model;

use App\Http\Model\Usuario\TokenUsuario;
use App\Http\Model\ConfiguracaoDaNotificacao;

class Notificacao
{
    /**
     * @var App\Http\Model\Usuario
     */
    protected $tokens;
    protected $config;

    public function __construct()
    {
        $this->tokens = new TokenUsuario();
        $this->config  = new ConfiguracaoDaNotificacao();
    }

    public function enviarParaTodos($mensagem)
    {
        $tokensUsuarios = $this->tokens->obterTodos();
        
        if (empty($tokensUsuarios)) {
            return "Nenhum usuário";
        }

        $tokens = array_column($tokensUsuarios->toArray(), "token");

        return $this->config->enviarNotificacaoParaFirebase($tokens,
                ["message" => $mensagem]);
    }
}