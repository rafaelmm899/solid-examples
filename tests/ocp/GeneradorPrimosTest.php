<?php


use App\ocp\GeneradorPrimos;
use App\ocp\OrdenamientoInverso;
use PHPUnit\Framework\TestCase;

class GeneradorPrimosTest extends TestCase
{
    public function test_orden_natural()
    {
        $generador = new GeneradorPrimos();
        $elementos = $generador->primos(15);

        $this->assertEquals([2,3,5,7,11,13],$elementos);
    }

    public function test_orden_inverso()
    {
        $generador = new OrdenamientoInverso();
        $elementos = $generador->primos(15);

        $this->assertEquals([13,11,7,5,3,2],$elementos);
    }
}
