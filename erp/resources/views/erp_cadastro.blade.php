
<html>
<head>
    
        <!-- Chamada CSS -->
    <link rel="stylesheet" href="css/style.css">
    
</head>
@extends('erp_layout')
@section('title','Cadastro')
@section('content')
<body>
    <form action="{{ action('usuariosCadastroController@callInserirUsuario') }}" method="POST" class="form-inline" >
    <!-- Segurança ao se trabalhar com POST, add 'token' -->
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <center> 
        <h1>Realize seu Cadastro!</h1>
        <h2>Preencha os Campos abaixo</h2>
        <br>
        <label for="Nome">Nome Completo:</label> <br>
          <input type="text" name="nome" placeholder="Digite o nome e sobrenome" class="form-control" id=""><br><br>

       <label for="Nome">CPF:</label> <br>
          <input type="text" maxlength="14" name="cpf" 
          placeholder="CPF, somente números" class="form-control" id="cpf"  onkeypress="this.value = FormataCpf(event)" onpaste="return false;" /><br><br>
          <!-- se quiser, add na tag para cpf: onkeypress='return event.charCode >= 48 && event.charCode <= 57' -->
       <label for="email">E-Mail:</label><br>
          <input type="email" name="email" placeholder="Digite o seu e-mail" class="form-control" id=""><br><br>
       
      <label for="senha">Digite sua senha:</label><br>
         <input type="password" name="senha" maxlenght="50" placeholder="Digite a senha" class="form-control" id=""><br><br>

      <label for="confirmaSenha"> Confirme sua senha:</label><br>
        <input type="password" name="repetirSenha" maxlenght="50" placeholder="Confirme a senha" class="form-control" id=""><br><br>
    </center>

                            <!-- Parte Horizontal de endereço -->
      <center>
      <div class="form-group">
        <label for="cep">CEP:</label>
        <input type="text" name="cep" maxlength="8" class="form-control" id="cep">
      </div>
      </center>
        <br><br>
      <div class="form-group">
        <label for="endereco">Endereço:</label>
         <input type="text" class="form-control" id="endereco">
      </div>
        
     <div class="form-group">
        <label for="bairro">Bairro:</label>
        <input type="text" class="form-control" id="bairro">
      </div>
        
      <div class="form-group">
        <label for="cidade">Cidade:</label>
        <input type="text" class="form-control" id="cidade">
      </div>

      <div class="form-group">
        <label for="estado">Estado:</label>
        <input type="text" class="form-control" id="estado">
      </div>
  
    </form>
    <center>
    <br><br><input type="submit" name="btnCadastrar" value="Cadastrar" class="btn btn-success" id="btnCadastrar">
    </center>
    <!-- Adquirindo a busca CEP com J-Query nativo do Laravel -->
    <script src="{{ asset('js/app.js') }}"></script>
        <script>
            $('#cep').blur(function(e){
                //ao sair do foco da caixa de texto
               var cep = $('#cep').val();
            var url ="http://viacep.com.br/ws/" + cep + "/json/";
            var validacep=/^[0-9]{5}-?[0-9]{3}$/;
            if(validacep.test(cep)){
                pesquisarCEP(url);
                $('#mensagem').hide();

            }else {
                $('#mensagem').show();
                $('#mensagem p').html("CEP inválido");
            
            }
            
            });
            
            function pesquisarCEP(endereco){
                $.ajax({
                    type:"GET",
                    url:endereco,
                    async:false
                }).done(function(data){
                   // console.log(data);
                    $('#bairro').val(data.bairro);
                    $('#endereco').val(data.logradouro);
                    $('#cidade').val(data.localidade);
                    $('#estado').val(data.uf);
                }).fail(function(){
                    console.log("erro");
                
                });
            
            }
        </script>
      <!-- ADICIONANDO MÁSKARA AO CPF -->
  <!-- Não sei o motivo, mas se deixar isso no <head> aceita letras -->
  <script type="text/javascript">
    function verificaNumero(e) {
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57))
        {
            return false;
        }
      
        }
    
    $(document).ready(function(){
        $("#cpf").keypress(verificaNumero);
    });

    function FormataCpf(evt){
        vr = (navigator.appName == 'Netscape') ?evt.target.value : evt.srcElement.value;
            if(vr.length == 3) vr = vr+".";
            if(vr.length == 7) vr = vr+".";
            if(vr.length == 11) vr = vr+"-";
        return vr;
    }

</script> 
</body>
@stop
</html>