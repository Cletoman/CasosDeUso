<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\PseudoTypes\True_;

class Vuelo extends Model
{
    use HasFactory;

    public static function disponibilidadDeVuelo(){
        return True;
    }
}
