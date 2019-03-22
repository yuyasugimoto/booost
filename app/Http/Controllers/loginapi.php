<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ModelLogin;

class loginapi extends Controller
{
    //
    public function index(Request $req){

        $cls = new ModelLogin();
        $Serv = $cls->signin($req->input('user_name'));

        if ($Serv == null){
            return ['token'=> "Nothing top"];
        }

        if ($Serv[$req->input('user_name')]['password'] == $req->input('user_pass')){
            return ["token" => $Serv[$req->input('user_name')]['token']];
        }else{
            return ['token'=> "Nothing pass"];
        }


    }
}
