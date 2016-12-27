<?php

namespace App\Http\Controllers;

use App\Common\Controller\Controller;
use App\Http\Requests\Notificacao\EnviarNotificacaoTodosRequest;
use App\Http\Model\Notificacao;

class NotificationController extends Controller
{
    /**
     * @var App\Http\Model\Notificacao
     */
    protected $notificacao;

    public function __construct()
    {
        $this->notificacao = new Notificacao();
    }

    public function enviarParaTodos(EnviarNotificacaoTodosRequest $request)
    {
        return $this->notificacao->enviarParaTodos($request->get("mensagem"));
    }
}