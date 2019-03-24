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
            return ['token'=> "Nothing"];
        }

        if ($Serv[$req->input('user_name')]['password'] == $req->input('user_pass')){
            //$req->session()->put('token',$Serv[$req->input('user_name')]['token']);
            $token = $Serv[$req->input('user_name')]['token'];
            session(['hashedpotets'=>$token]);
            return ["token" => $token];
        }else{
            return ['token'=> "Nothing"];
        }


    }
}
