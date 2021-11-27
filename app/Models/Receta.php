<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\PseudoTypes\True_;

class Receta extends Model
{
    use HasFactory;

    public static function disponibilidaDePorciones($cantidaRequerida,$cantidaReceta){

        $resultado=NULL;

        if($cantidaRequerida>$cantidaReceta){
            $resultado=false;
        }else{
            $resultado=true;
        }

        return $resultado;



    }
}
