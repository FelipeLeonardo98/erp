<?php
    
    namespace App\Http\Controllers;
    
    class LoginController extends Controller{
        public function callLogin()
        {
            return view("login");
        }
    }


?>