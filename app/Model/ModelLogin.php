<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ModelLogin extends Model
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
