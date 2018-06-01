<?php
namespace App\Contracts\Repositories;

use App\Models\Loja;
use App\Models\Produto;

/**
 * Created by PhpStorm.
 * User: klebe
 * Date: 29/05/2018
 * Time: 22:33
 */
interface LojaRepositoryContract
{
    public function listar();
    public function retornar(int $id);
    public function criar(array $data);
    public function editar(int $id, array $data);
    public function excluir(int $id);
    public function vincularProduto(Loja $loja, Produto $produto);
    public function desvincularProduto(Loja $loja, Produto $produto);

}