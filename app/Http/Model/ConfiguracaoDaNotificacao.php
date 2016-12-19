<?php

namespace App\Http\Model;

class ConfiguracaoDaNotificacao
{
    private $url = "https://fcm.googleapis.com/fcm/send";

    public function enviarNotificacaoParaFirebase($tokens, $mensagem)
    {
        $fields  = $this->obterFields($tokens, $mensagem);
        $headers = $this->obterHeaders($tokens, $mensagem);

        return $this->enviarNotificacao($fields, $headers);
    }

    private function enviarNotificacao($fields, $headers)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

        $result = curl_exec($ch);

        if ($result === false) {
            curl_close($ch);
            return ('Curl failed: '.curl_error($ch));
        }

        curl_close($ch);
        return $result;
    }

    private function obterFields($tokens, $mensagem)
    {
        return array(
            'registration_ids' => $tokens,
            'data' => $mensagem
        );
    }

    private function obterHeaders()
    {
        return array(
            'Authorization:key = AAAAvsB64ek:APA91bEiUotB_57QDi9KLyQergq02tRW54e5_gtSlRqISGsMaizRZSgZC-_ILR25AiCJWSxFpRzfutG7nRpjCnNhtqC7HK6HOVSRtArEY6-ti9iHZ9utPxB-WGQyWfGIVlM-8UCKm58t8jWbuUIjYBYBy7IyM5wrNg',
            'Content-Type: application/json'
        );
    }
}