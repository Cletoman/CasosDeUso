<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Vuelo;

class VueloTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    /**@test*/
    public function test_disponibilidad_de_vuelo()
    {
      $vuelo= new Vuelo;
      echo $vuelo->disponibilidadDeVuelo(5,10);

       $respuesta = $vuelo->disponibilidadDeVuelo(5,10);

        $this->assertEquals(true,$respuesta);
    }
}
