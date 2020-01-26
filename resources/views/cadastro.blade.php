@extends('principal')
@section('title','Cadastro de Contas')
@section('content')
<h1>Cadastro de Contas</h1>

<form action="{{ action('ContasPagarController@salvar') }}" method="POST">
    <!-- Jogando os dados do form direto para action(ContasPagarController method salvar) -->
    <!-- Adicionando campo de proteção invisível-seguranças e NECESSÁRIO -->
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
    <!-- hiddenButton usado só pra saber se foi cadastrado(insert) -->
    <input type="hidden" name="insert" value="insert">
    <div class="form-group">
        <label>Descrição:</label>
        <input type="text" name="descricao" class="form-control">
    </div>
     <div class="form-group">
        <label>Valor:</label>
        <input type="text" name="valor" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Cadastrar</button>


</form>
@stop