<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ModelLogin;

class getTask extends Controller
{
    //
    public function index(Request $request){
        $cls = new ModelLogin();
        
        return $cls->getTask($request->input('user_id'));
    }
}
