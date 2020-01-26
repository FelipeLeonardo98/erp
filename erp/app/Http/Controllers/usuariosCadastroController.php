<?php

namespace App\Http\Controllers;

//para uso dos requests (?)

 use Illuminate\Http\Request;

//use App\Http\Requests;

//necessário para usar métodos da classe "DB"
use Illuminate\Support\Facades\DB;

//importando a Model
use App\Usuario;




class usuariosCadastroController extends Controller
{
    public function callInserirUsuario(Request $request)
    {
        $name = $request->input('nome');
        return $name;
    }

    public function teste()
    {    
       

    }
        /*
        $testeCEP = DB::select('select cep from usuario where id = 1');
        $oi;
        $html = '';
        foreach($testeCEP as $valor){
            echo "CEP: " .$valor->cep;
            $oi = $valor->cep;
            echo "<br>";
           // $html .= '<input type="text" value=".$valor->cep." >';
        }
        return $html .= '<input type="text" value='.$oi.'>'; */
    
}

