<?php


use App\liskov\Puntos2D;
use App\liskov\Puntos3D;
use PHPUnit\Framework\TestCase;

class PuntosTest extends TestCase
{
    private Puntos2D $referencia;
    private array $puntosPrueba;

    public function setUp(): void
    {
        //$this->referencia = new Puntos2D(3, 5);
        $this->referencia = new Puntos3D(3, 5,1);
        $this->puntosPrueba = [
            new Puntos2D(2, 3),
            new Puntos2D(3, 5),
            new Puntos2D(4, 3),
        ];
    }

    public function test_iguales_si_solo_si_distancia_0()
    {
        foreach ($this->puntosPrueba as $punto){
            $this->assertEquals(
                $this->referencia->equals($punto),
                $this->referencia->distancia($punto) === 0,
                "test para " . $this->referencia . " y " . $punto
            );
        }
    }
}
