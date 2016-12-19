<?php

namespace App\Http\Model;

use App\Http\Model\Usuario;
use App\Http\Model\ConfiguracaoDaNotificacao;

class Notificacao
{
    /**
     * @var App\Http\Model\Usuario
     */
    protected $usuario;
    protected $config;

    public function __construct()
    {
        $this->usuario = new Usuario();
        $this->config  = new ConfiguracaoDaNotificacao();
    }

    public function enviarParaTodos($mensagem)
    {
        $usuarios = $this->usuario->obterTodos();

        if (empty($usuarios)) {
            return "Nenhum usuário";
        }

        $tokens = array_column($usuarios->toArray(), "usu_token");

        return $this->config->enviarNotificacaoParaFirebase($tokens,
                ["message" => $mensagem]);
    }
}