<?php

namespace App\Http\Model;

use App\Common\Models\EntityModel;

class Usuario extends EntityModel
{
    protected $table      = "usuario";
    protected $primaryKey = "usu_id";
    protected $fillable   = ['usu_token'];
    public $timestamps    = false;

}