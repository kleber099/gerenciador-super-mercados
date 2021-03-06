<?php
/**
 * Created by PhpStorm.
 * User: klebe
 * Date: 29/05/2018
 * Time: 23:21
 */

namespace App\Contracts\Repositories;


interface ProdutoRepositoryContract
{
    public function listar();
    public function retornar(int $id);
    public function criar(array $data);
    public function editar(int $id, array $data);
    public function excluir(int $id);
}