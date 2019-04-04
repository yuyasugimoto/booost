<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ModelLogin;

class detail extends Controller
{
    //
    public function index(Request $req){
        $cls_ = new ModelLogin();
        $Serv = $cls_->getDetail($req->input('task_id'));

        //->select('t.task_name','t.start_time','t.end_time','t.progress','t.task','p.project_name')
        $temp = array(
            'task_name' => "",
            'start_time' => "",
            'end_time' => "",
            'progress' => "",
            'task' => "",
            'project_name' => ""
        );

        $return = array();

        foreach($Serv as $key => $value){
            $temp['task_name'] = $value->task_name;
            $temp['start_time'] = $value->start_time;
            $temp['end_time'] = $value->end_time;
            $temp['progress'] = $value->progress;
            $temp['task'] = $value->task;
            $temp['project_name'] = $value->project_name;

            array_push($return,$temp);
        }

        return $return;

    }
}
