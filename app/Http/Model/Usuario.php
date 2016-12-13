<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuario";
    protected $primaryKey = "usu_id";
    protected $fillable = ['usu_token'];
    public $timestamps = false;
}