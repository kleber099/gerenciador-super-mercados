<?php
namespace App\Repositories;

use App\Contracts\Repositories\ProdutoRepositoryContract;
use App\Models\Produto;

/**
 * Created by PhpStorm.
 * User: klebe
 * Date: 29/05/2018
 * Time: 22:35
 */
class ProdutoRepository implements ProdutoRepositoryContract
{
    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }

    public function listar()
    {
       $produtos = $this->produto->all();
       return $produtos;
    }

    public function retornar(int $id)
    {
        $produto = $this->produto->find($id);
        return $produto;
    }

    public function criar(array $data)
    {
        $produto = $this->produto->create($data);
        return $produto;
    }

    public function editar(int $id, array $data)
    {
       $produto = $this->retornar($id);
       $produto->update($data);

       return $produto;
    }

    public function excluir(int $id)
    {
        $produto = $this->retornar($id);
        $this->produto->destroy($id);

        return $produto;
    }

}