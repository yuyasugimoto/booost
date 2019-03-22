<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loginapi extends Model
{
    //
    public function signin(){
        $Serv = array(
            "sugimoto"=>array(
                "password"=> "password",
                "token"=> "opomapaoemvporaepmviapoeri"
            )
        );

        return $Serv;
    }
}
