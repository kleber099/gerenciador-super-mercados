<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProdutoControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get("/produtos");
        $response->assertStatus(200);
    }

    public function testCriarProduto()
    {
        $response = $this->post("/produtos", ["nome" => "produto 1", "codigo" => "12345"]);
        $response->assertStatus(200);
    }

    public function testCriarProdutoErroDadosObrigatorio()
    {
        $response = $this->post("/produtos");
        $response->assertStatus(422);
    }

    public function testCriarProdutoNomeMenor()
    {
        $response = $this->post("/produtos", ["nome" => "prod", "codigo" => "12345"]);
        $response->assertStatus(422);
    }

    public function testCriarProdutoNomeMaior()
    {
        $response = $this->post("/produtos", ["nome" => "lojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojaloja", "codigo" => "12345"]);
        $response->assertStatus(422);
    }

    public function testCriarCodigoMaior()
    {
        $response = $this->post("/produtos", ["nome" => "produto 1", "codigo" => "12345678901234567890123456"]);
        $response->assertStatus(200);
    }

    public function testAlterarProduto()
    {
        $response = $this->put("/produtos/1", ["nome" => "produto 1", "codigo" => "12345"]);
        $response->assertStatus(200);
    }

    public function testAlterarProdutoErroDadosObrigatorio()
    {
        $response = $this->put("/produtos/1");
        $response->assertStatus(422);
    }

    public function testAlterarProdutoNomeMenor()
    {
        $response = $this->put("/produtos/1", ["nome" => "prod", "codigo" => "12345"]);
        $response->assertStatus(422);
    }

    public function testAlterarProdutoNomeMaior()
    {
        $response = $this->put("/produtos/1", ["nome" => "lojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojalojaloja", "codigo" => "12345"]);
        $response->assertStatus(422);
    }

    public function testAlterarCodigoMaior()
    {
        $response = $this->put("/produtos/1", ["nome" => "produto 1", "codigo" => "12345678901234567890123456"]);
        $response->assertStatus(200);
    }

    public function testRetornarProduto()
    {
        $response = $this->get("/produtos/1");
        $response->assertStatus(200);
    }

    public function testExcluirProduto()
    {
        $response = $this->delete("/produtos/1");
        $response->assertStatus(200);
    }
}
