<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Notificacao\EnviarNotificacaoTodosRequest;
use App\Http\Model\Notificacao;
use App\Http\Model\Usuario;

class NotificationController extends Controller
{
    /**
     * @var App\Http\Model\Usuario;
     */
    protected $user;

    /**
     * @var App\Http\Model\Notificacao
     */
    protected $notificacao;

    public function __construct()
    {
        $this->user        = new Usuario();
        $this->notificacao = new Notificacao();
    }

    public function enviarParaTodos(EnviarNotificacaoTodosRequest $request)
    {
        return $this->notificacao->enviarParaTodos($request->get("mensagem"));
    }
}