<?php

namespace isp;

use App\isp\Correccion;
use App\isp\Idioma;
use App\isp\ProcesadorTexto;
use App\isp\Texto;
use PHPUnit\Framework\TestCase;

class ProcesadorTextoTest extends TestCase
{
    public function test_simple()
    {
        /** @var Texto $procesador */
        $procesador = new ProcesadorTexto();

        $procesador->nueva("No");
        $procesador->nueva("himporta");
        $procesador->nueva("la");
        $procesador->nueva("hortografia");

        $this->assertEquals("No himporta la hortografia", $procesador->texto());
    }

    public function test_con_idioma()
    {
        /** @var Correccion $procesador */
        $procesador = new ProcesadorTexto();

        $procesador->nueva("Tengo");
        $procesador->nueva("hambre");

        $this->assertEquals("Tengo hambre", $procesador->texto());


        $idioma = new Idioma();
        $idioma->idioma(Idioma::ES);

        $this->assertTrue($procesador->correcto($idioma));
    }
}
