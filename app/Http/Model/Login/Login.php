<?php

namespace App\Http\Model\Login;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Login extends Authenticatable
{

    use Notifiable;
    protected $table      = "usuarios";
    protected $primaryKey = "usu_id";
    protected $fillable   = [ 'usu_senha', 'usu_login'];
    protected $hidden     = [ 'usu_senha'];

    public function getAuthIdentifierName()
    {
        return 'usu_login';
    }

    public function getAuthIdentifier()
    {
        return $this->usu_login;
    }

    public function getAuthPassword()
    {
        return $this->usu_senha;
    }

    public function getRememberToken()
    {
        return $this->{$this->getRememberTokenName()};
    }

    public function setRememberToken($value)
    {
        $this->{$this->getRememberTokenName()} = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}