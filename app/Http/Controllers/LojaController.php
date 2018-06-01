<?php

namespace App\Http\Controllers;

use App\Contracts\Business\LojaServiceContract;
use App\Http\Requests\LojaRequest;
use Illuminate\Http\Request;

class LojaController extends Controller
{

    public function __construct(LojaServiceContract $lojaService)
    {
        $this->lojaService = $lojaService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lojas = $this->lojaService->listar();
        return response()->json($lojas);
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
    public function store(LojaRequest $request)
    {
        $data = $request->all();
        $loja = $this->lojaService->criar($data);

        return response()->json($loja);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $loja = $this->lojaService->retornar($id);

        return response()->json($loja);
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
    public function update(LojaRequest $request, $id)
    {
        $data = $request->all();
        $loja = $this->lojaService->editar($id, $data);
        return response()->json($loja);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loja = $this->lojaService->excluir($id);
        return response()->json($loja);
    }
}
