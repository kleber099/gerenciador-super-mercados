<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LojaControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get("/lojas");
        $response->assertStatus(200);
    }

    public function testCriarLoja()
    {
        $response = $this->post("/lojas", ["nome" => "loja 1"]);
        $response->assertStatus(200);
    }

    public function testCriarLojaErroDadosObrigatorio()
    {
        $response = $this->post("/lojas");
        $response->assertStatus(422);
    }

    public function testCriarLojaNomeMenor()
    {
        $response = $this->post("/lojas", ["nome" => "loja"]);
        $response->assertStatus(422);
    }

    public function testCriarLojaNomeMaior()
    {
        $response = $this->post("/lojas", ["nome" => "lojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojaloja"]);
        $response->assertStatus(422);
    }

    public function testAlterarLoja()
    {
        $response = $this->put("/lojas/1", ["nome" => "loja 1"]);
        $response->assertStatus(200);
    }

    public function testAlterarLojaErroDadosObrigatorio()
    {
        $response = $this->put("/lojas/1");
        $response->assertStatus(422);
    }

    public function testAlterarLojaNomeMenor()
    {
        $response = $this->put("/lojas/1", ["nome" => "loja"]);
        $response->assertStatus(422);
    }

    public function testAlterarLojaNomeMaior()
    {
        $response = $this->put("/lojas/1", ["nome" => "lojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojaloja"]);
        $response->assertStatus(422);
    }

    public function testRetornarLoja()
    {
        $response = $this->get("/lojas/1");
        $response->assertStatus(200);
    }

    public function testExcluirLoja()
    {
        $response = $this->delete("/lojas/1");
        $response->assertStatus(200);
    }
}
