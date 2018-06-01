<?php
/**
 * Created by PhpStorm.
 * User: klebe
 * Date: 31/05/2018
 * Time: 13:37
 */

namespace App\Business;


use App\Contracts\Business\VinculadorLojaProdutoServiceContract;
use App\Repositories\LojaRepository;
use App\Repositories\ProdutoRepository;

class VinculadorLojaProdutoService implements VinculadorLojaProdutoServiceContract
{
    public function __construct(LojaRepository $lojaRepository, ProdutoRepository $produtoRepository)
    {
        $this->lojaRepository = $lojaRepository;
        $this->produtoRepository = $produtoRepository;
    }

    public function vincularProduto(int $idLoja, int $idProduto)
    {
        $loja = $this->lojaRepository->retornar($idLoja);
        $produto = $this->produtoRepository->retornar($idProduto);

        $this->lojaRepository->vincularProduto($loja, $produto);
    }

    public function desvincularProduto(int $idLoja, int $idProduto)
    {
        $loja = $this->lojaRepository->retornar($idLoja);
        $produto = $this->produtoRepository->retornar($idProduto);

        $this->lojaRepository->desvincularProduto($loja, $produto);
    }

}