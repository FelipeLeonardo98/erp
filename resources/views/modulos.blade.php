<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <!-- <title>Modules Acess</title> -->
    <!-- Aplicando CSS Próprio -->
    <link rel="stylesheet" href="{{ asset('css/estilo_modulos.css')}}">
</head>
@extends('erp_layout')
@section('title','Modules Acess')
@section('content') 
<body background="<?php echo url('img\wpp_4.jpg');?>">
    <p class="titulo">Acesse o Módulo desejado </p>
<div class="table-responsive">
    <table>
        <tr>
            <td><h1><a href="{{action('CadastroController@callCadastro')}}"><span class="glyphicon glyphicon-user"> Cadastro </span></a></h1></td>
        </tr>
        <tr>
            <td><h1><a href="#"><span class="glyphicon glyphicon-cloud"> Módulo II </span></a></h1></td>
        </tr>
        <tr>
            <td><h1><a href="#"><span class="glyphicon glyphicon-floppy-open"> Fale Conosco </span> </a></h1></td>
            
        </tr>
        <tr>
            <td><h1><a href="#"><span class="glyphicon glyphicon-console"> Configurações </span></a></h1></td>
        </tr>
    </table>
</div>
</body>
 @stop 
</html>
