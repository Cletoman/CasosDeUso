<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Receta;

class RecetaTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_la_receta_alcansara_si_o_no()
    {

        $receta = new Receta;
        echo $receta->disponibilidaDePorciones(6,8);

        $resultado = $receta->disponibilidaDePorciones(6,8);
        $this->assertEquals(true,$resultado);
    }
}
