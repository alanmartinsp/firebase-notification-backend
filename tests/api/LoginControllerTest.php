<?php

class LoginControllerTest extends TestCase
{

    protected function setUp()
    {
        parent::setUp();
    }

//------------------------------------------------------------------------------
    /**
     * @test
     */
    public function deveRealizarLogin()
    {
        $this->json("POST", 'api/login',
                [
                'usu_login' => 'alan@teste.com',
                'usu_senha' => '123'
            ])->assertResponseStatus(200)
            ->seeJsonStructure([
                'token'
        ]);
    }
//------------------------------------------------------------------------------

    /**
     * @test
     */
    public function deveRejeitarLoginInvalido()
    {
        $this->json("POST", 'api/login',
                [
                'usu_login' => 'alan_teste@teste.com',
                'usu_senha' => '123'
            ])->assertResponseStatus(401)
            ->seeJsonStructure([
                'error'
        ]);
    }
//------------------------------------------------------------------------------

    /**
     * @test
     */
    public function deveRejeitarLoginSemSenha()
    {
        $this->json("POST", 'api/login',
            [
            'usu_login' => 'alan_teste@teste.com',
            'usu_senha' => ''
        ])->assertResponseStatus(401);
    }
//------------------------------------------------------------------------------
}