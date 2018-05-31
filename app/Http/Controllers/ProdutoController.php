<?php

namespace App\Http\Controllers;

use App\Contracts\Business\ProdutoServiceContract;
use App\Http\Requests\ProdutoRequest;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function __construct(ProdutoServiceContract $produtoService)
    {
        $this->produtoService = $produtoService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = $this->produtoService->listar();
        return response()->json($produtos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdutoRequest $request)
    {
        $data = $request->all();

        $produto = $this->produtoService->criar($data);

        return response()->json($produto);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = $this->produtoService->retornar($id);

        return response()->json($produto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProdutoRequest $request, $id)
    {
        $data = $request->all();
        $produto = $this->produtoService->editar($id, $data);
        return response()->json($produto);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = $this->produtoService->excluir($id);
        return response()->json($produto);
    }
}
