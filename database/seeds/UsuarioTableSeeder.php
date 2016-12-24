<?php

use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario            = new App\Http\Model\Usuario();
        $usuario->usu_nome  = "alan";
        $usuario->usu_senha = "123";
        $usuario->usu_login = "alan@teste.com";
        $usuario->save();
    }
}