@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@if ($errors->any())
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@stop

@section('content')

    @component('pagina-formulario')
        @slot('titulo')
            Visualizar Despesa
        @endslot
        @slot('metodo')
            GET
        @endslot
        @slot('rota')
            /gastos
        @endslot
        @slot('formulario')
            <div class="form-group">
                <label>Nome</label>
                <label class="form-control">{{$gasto->nome}}</label>
            </div>
            <div class="form-group">
                <label>Valor</label>
                <label class="form-control">{{$gasto->valor}}</label>
            </div>
            <div class="form-group">
                <label>Data</label>
                <label class="form-control">{{$gasto->data}}</label>
            </div>
            <div class="form-group">
                <label>Descrição </label>
                <label class="form-control">{{$gasto->descricao}}</label>
            </div>
            <div class="form-group">
                <label>Pago</label>
                <label class="form-control">{{$gasto->pago}}</label>
            </div>
            @slot('botao')
                Voltar
            @endslot
        @endslot
    @endcomponent
@stop
