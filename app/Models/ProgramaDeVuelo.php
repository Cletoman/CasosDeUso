<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramaDeVuelo extends Model
{
    use HasFactory;

    public function calcularDiasDisponibles($diaSolicitado){
        $diasDisponibles = true;
        $salida = null;
        $llegada = null;

        if($diasDisponibles == $diaSolicitado){
            $diasDisponibles = true;
        }else{
            $diasDisponibles == false;
        }
        
        return $diasDisponibles;
    } 
    
}
