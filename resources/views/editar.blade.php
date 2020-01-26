@extends('principal')
@section('title','Editar Conta')
@section('content')
<h1>Editar Conta - Cliente: {{$contas_pagar->id}} </h1>

<form action="{{ action('ContasPagarController@update', $contas_pagar->id) }}" method="POST">
    <!-- Jogando os dados do form direto para action(ContasPagarController method salvar) -->
    <!-- Adicionando campo de proteção invisível-seguranças e NECESSÁRIO -->
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
    <!-- hiddenButton usado só pra saber se foi alterado(update) -->
    <input type="hidden" name="update" value="update">
    <div class="form-group">
        <label>Descrição:</label>
        <input type="text" name="descricao" class="form-control" value="{{$contas_pagar->descricao}}">
    </div>
     <div class="form-group">
        <label>Valor:</label>
        <input type="text" name="valor" class="form-control" value="{{$contas_pagar->valor}}">
    </div>
    <button type="submit" class="btn btn-success">Alterar</button>
<!-- this: value="{{$contas_pagar->descricao}}" equivale à isso
        <?php echo $contas_pagar->descricao;?>  -->

</form>
@stop