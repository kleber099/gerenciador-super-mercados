<?php
namespace App\Business;

use App\Contracts\Business\LojaServiceContract;
use App\Contracts\Repositories\LojaRepositoryContract;

/**
 * Created by PhpStorm.
 * User: klebe
 * Date: 29/05/2018
 * Time: 22:13
 */
class LojaService implements LojaServiceContract
{
    public function __construct(LojaRepositoryContract $lojaRepository)
    {
        $this->lojaRepository = $lojaRepository;
    }

    public function listar()
    {
        $lojas = $this->lojaRepository->listar();
        return $lojas;
    }

    public function retornar(int $id)
    {
        $loja = $this->lojaRepository->retornar($id);
        return $loja;
    }

    public function criar(array $data)
    {
        $loja = $this->lojaRepository->criar($data);
        return $loja;
    }

    public function editar(int $id, array $data)
    {
        $loja = $this->lojaRepository->editar($id, $data);
        return $loja;
    }

    public function excluir(int $id)
    {
        $loja = $this->lojaRepository->excluir($id);
        return $loja;
    }

}