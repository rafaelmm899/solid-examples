<?php

namespace dip\negocio;

use App\dip\bbdd\InventarioBBDD;
use App\dip\negocio\ControladorEstoc;
use PHPUnit\Framework\TestCase;

class ControladorEstocTest extends TestCase
{
    public function test_control_estoc()
    {
        $controlador = new ControladorEstoc(new InventarioBBDD());

        $this->assertFalse($controlador->necesitaReponer("tienda norte", "mesa"));
        $this->assertTrue($controlador->necesitaReponer("tienda norte", "lampara"));
    }
}
