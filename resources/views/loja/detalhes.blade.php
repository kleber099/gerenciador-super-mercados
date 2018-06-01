@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-body">
        <loja-detalhe :id="{{ $id }}"></loja-detalhe>
    </div>
</div>
@endsection