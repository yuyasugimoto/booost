<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ModelLogin;

class loginapi extends Controller
{
    //
    public function index(Request $req){

        $cls = new ModelLogin();
        $Serv = $cls->signin();
        

        if (array_key_exists($req->input('user_name'),$Serv)){
            if ($Serv[$req->input('user_name')]['password'] == $req->input('user_pass')){
                return ["token" => $Serv[$req->input('user_name')]['token']];
            }else{
                return ['token'=> "Nothing"];
            }
        }else{
            return ['token'=> "Nothing"];
        }


        return ['token'=> "Nothing"];
    }
}
