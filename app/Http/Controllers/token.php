<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class token extends Controller
{
    //Get Token
    public function index(Request $req){
        
        return session('hashedpotets');
    }
}
