@extends('principal')
@section('title','Listagem de Contas')

@section('content')
<script tyoe="text/javascript">
    function apagar(url){
        if(window.confirm('Deseja realmente apagar?')){
            window.location = url;
        }
    }
</script>
<h1>Lista de Contas Pagar</h1>
<!-- Sintaxe de bladeTemplate PARA VALORES DE FORMULÁRIO -->
@if(old('insert'))
    <div class="alert alert-success">
        <strong>Sucesso</strong>
        {{old('descricao')}} cadastrado!
    </div>
@endif

@if(old('update'))
    <div class="alert alert-success">
        <strong>Sucesso</strong>
        {{old('descricao')}} alterada!
    </div>
@endif



<table width="100%" class="table table-striped table-bordered table-hover">
    <tr>
        <td>ID</td>
        <td>DESCRIÇÃO</td>
        <td>VALOR</td>
         <td>EDITAR</td>
         <td>APAGAR</td>
    </tr>
 <!-- JEITO PHP PADRÃO
<?php foreach ($contas_pagar as $value) { ?>
    <tr>
        <td><?php echo $value->id;?></td>
        <td><?php echo $value->descricao;?></td>
        <td><?php echo $value->valor;?></td>
        <td><a class="btn btn-small btn-info" href="{{ action("ContasPagarController@editar", $value->id) }}">Editar</a></td>
        <td><a class="btn btn-small btn-danger" href="#" onclick="apagar('{{ action("ContasPagarController@apagar", $value->id) }}');">Apagar</a></td>
    </tr>
<?php } ?> --> 
    <!-- JEITO BLADE TEMPLATE LARAVEL -->
@foreach ($contas_pagar as $c)
 <tr>
        <td>{{$c->id}}</td>
        <td>{{$c->descricao}}></td>
        <td>{{$c->valor}}</td>
        <td><a class="btn btn-small btn-info" href="{{ action("ContasPagarController@editar", $c->id) }}">Editar</a></td>
        <td><a class="btn btn-small btn-danger" href="#" onclick="apagar('{{ action("ContasPagarController@apagar", $c->id) }}');">Apagar</a></td>
    </tr>   
    
@endforeach
<!-- o método de usar CHAVES e action SÓ FUNCIONA se for no blade -->

</table>
   <a class="btn btn-small btn-info" href="{{ action("ContasPagarController@cadastro") }}">Cadastrar</a>
@stop