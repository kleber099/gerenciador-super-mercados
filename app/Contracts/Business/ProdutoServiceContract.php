<?php

namespace App\Contracts\Business;
/**
 * Created by PhpStorm.
 * User: klebe
 * Date: 29/05/2018
 * Time: 22:00
 */
interface ProdutoServiceContract
{
    public function listar();
    public function retornar(int $id);
    public function criar(array $data);
    public function editar(int $id, array $data);
    public function excluir(int $id);
}