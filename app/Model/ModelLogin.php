<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModelLogin extends Model
{
     //Tokenの取得
     public function signin($user_name){

        $user_info = DB::table('v_users')->select('id','user_name','user_pass','token')->where('user_name','like',$user_name)->get();

        if (count($user_info) == 0){
            return $Serv = null;
        }

        $Serv = array(
            $user_info[0]->user_name=>array(
                "password"=> $user_info[0]->user_pass,
                "token"=> $user_info[0]->token,
                "id" => $user_info[0]->id
            )
        );

        return $Serv;
    }


    //Taskの取得
    public function getTask(string $UserID){
        
        $Serv = DB::table('v_task as t')
                ->join('v_project as p','t.project_id','=','p.id')
                ->select('t.task_name','t.id')
                ->where('t.staff_id','=', $UserID)->get();
        
        $temp = array();
        foreach($Serv as $key => $value){
            array_push($temp,array("task_name"=>$value->task_name,"id"=>$value->id));
        }

        return $temp;
    }

}
