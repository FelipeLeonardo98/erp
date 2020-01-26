<html>
    <!-- <title>Login</title> -->
    <head>
       <!-- CSS próprio -->
       <link rel="stylesheet" type="text/css" href="{{ asset('css/estilo_login.css') }}">
    </head>

@extends('erp_layout')
@section('title','Login')
@section('content')

    <body background="<?php echo url('img\wpp_5.jpg');?>">
        <div class="form_login">
         <form action="validaLogin.php" method="POST">
            <fieldset>
                <legend><p class="p1">Acesso ao ERP</p> </legend>
                <input type="text" class="input_login" placeholder="login"> <br>
                <input type="password" class="input_login" placeholder="password">
            </fieldset>
            
            <button type="button" class="btn_login">
             <a href="{{action('ModulosController@callModulos')}}">Log in now</a>
            </button>
            
         </form>
    </div>
   
    </body>
 @stop
</html>