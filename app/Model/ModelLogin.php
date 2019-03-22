<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModelLogin extends Model
{
     //
     public function signin($user_name){

        $user_name = "sugimoto";

        $user_info = DB::table('v_users')->select('user_name','user_pass','token')->where('user_name','like',$user_name)->get();

        if (count($user_info) < 0){
            return $Serv = null;
        }

        $Serv = array(
            $user_info[0]->user_name=>array(
                "password"=> $user_info[0]->user_pass,
                "token"=> $user_info[0]->token
            )
        );

        return $Serv;
    }
}
