<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\PseudoTypes\True_;

class Vuelo extends Model
{
    use HasFactory;

    public static function disponibilidadDeVuelo($capacidadDeUso, $capacidadMaxima){

        $disponibilidad = false;

        if($capacidadDeUso == $capacidadMaxima){

            $disponibilidad = false;

        }else if($capacidadDeUso < $capacidadMaxima){

            $disponibilidad = true;

        }

        return $disponibilidad;
    }
}
