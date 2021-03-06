<?php
namespace App\Repositories;

use App\Contracts\Repositories\LojaRepositoryContract;
use App\Models\Loja;
use App\Models\Produto;

/**
 * Created by PhpStorm.
 * User: klebe
 * Date: 29/05/2018
 * Time: 22:35
 */
class LojaRepository implements LojaRepositoryContract
{
    public function __construct(Loja $loja)
    {
        $this->loja = $loja;
    }

    public function listar()
    {
       $lojas = $this->loja->all();
       return $lojas;
    }

    public function retornar(int $id)
    {
        $loja = $this->loja->with('produtos')->find($id);
        return $loja;
    }

    public function criar(array $data)
    {
        $loja = $this->loja->create($data);
        return $loja;
    }

    public function editar(int $id, array $data)
    {
       $loja = $this->retornar($id);
       $loja->update($data);

       return $loja;
    }

    public function excluir(int $id)
    {
        $loja = $this->retornar($id);
        $this->loja->destroy($id);

        return $loja;
    }

    public function vincularProduto(Loja $loja, Produto $produto)
    {
        $loja->produtos()->attach($produto->id);
    }

    public function desvincularProduto(Loja $loja, Produto $produto)
    {
        $loja->produtos()->detach($produto->id);
    }

}