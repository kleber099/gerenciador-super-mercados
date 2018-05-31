<?php
namespace App\Business;

use App\Contracts\Business\ProdutoServiceContract;
use App\Contracts\Repositories\ProdutoRepositoryContract;

/**
 * Created by PhpStorm.
 * User: klebe
 * Date: 29/05/2018
 * Time: 22:13
 */
class ProdutoService implements ProdutoServiceContract
{
    public function __construct(ProdutoRepositoryContract $produtoRepository)
    {
        $this->produtoRepository = $produtoRepository;
    }

    public function listar()
    {
        $produtos = $this->produtoRepository->listar();
        return $produtos;
    }

    public function retornar(int $id)
    {
        $produto = $this->produtoRepository->retornar($id);
        return $produto;
    }

    public function criar(array $data)
    {
        $produto = $this->produtoRepository->criar($data);
        return $produto;
    }

    public function editar(int $id, array $data)
    {
        $produto = $this->produtoRepository->editar($id, $data);
        return $produto;
    }

    public function excluir(int $id)
    {
        $produto = $this->produtoRepository->excluir($id);
        return $produto;
    }

}