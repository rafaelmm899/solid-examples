<?php


use App\srp\BBDD;
use App\srp\Pelicula;
use App\srp\ExportadorCSV;
use App\srp\Recomendador;
use PHPUnit\Framework\TestCase;


class RecomendadorTest extends TestCase
{
    public function test_recomendaciones()
    {
        $recomendador = new Recomendador();

        $cliente = BBDD::JUAN();
        $recomendaciones = $recomendador->recomendaciones($cliente);

        $this->assertNotContains((BBDD::ET())->getTitulo(), array_map(fn(Pelicula $pelicula) => $pelicula->getTitulo(), $recomendaciones));
    }

    public function test_recomendacionesCSV()
    {
        $recomendador = new Recomendador();
        $exportar = new ExportadorCSV();
        $cliente = BBDD::JUAN();

        $this->assertEquals("Salvar al soldado Ryan,Spielberg,belico", $exportar->exportar($recomendador->recomendaciones($cliente)));
    }
}
