<?php
namespace App\Repositories;

use App\Contracts\Repositories\LojaRepositoryContract;
use App\Models\Loja;

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
        $loja = $this->loja->find($id);
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

}