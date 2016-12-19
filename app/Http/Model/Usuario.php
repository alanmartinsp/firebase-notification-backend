<?php

namespace App\Http\Model;

use App\Http\Model\MyModel;

class Usuario extends MyModel
{
    protected $table = "usuario";
    protected $primaryKey = "usu_id";
    protected $fillable = ['usu_token'];
    public $timestamps = false;
}