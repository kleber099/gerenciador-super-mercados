<?php
/**
 * Created by PhpStorm.
 * User: klebe
 * Date: 31/05/2018
 * Time: 13:35
 */

namespace App\Contracts\Business;


interface VinculadorLojaProdutoServiceContract
{
    public function vincularProduto(int $idLoja,int $idProduto);
    public function desvincularProduto(int $idLoja,int $idProduto);
}