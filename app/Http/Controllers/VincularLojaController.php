<?php

namespace App\Http\Controllers;

use App\Contracts\Business\VinculadorLojaProdutoServiceContract;
use Illuminate\Http\Request;

class VincularLojaController extends Controller
{
    public function __construct(VinculadorLojaProdutoServiceContract $vincularLojaProduto)
    {
        $this->vincularLojaProduto = $vincularLojaProduto;
    }

    public function vincularLojaProduto(Request $request)
    {
        $idLoja = $request->input('loja_id');
        $idProduto = $request->input('produto_id');

        $this->vincularLojaProduto->vincularProduto($idLoja, $idProduto);
    }

    public function desvincularLojaProduto(Request $request)
    {
        $idLoja = $request->input('loja_id');
        $idProduto = $request->input('produto_id');

        $this->vincularLojaProduto->desvincularProduto($idLoja, $idProduto);
    }
}
