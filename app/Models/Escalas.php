<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escalas extends Model
{
    use HasFactory;

    protected $cuidad =null;
    protected $subePasajero = null;
    protected $bajaPasajero = null;
}
