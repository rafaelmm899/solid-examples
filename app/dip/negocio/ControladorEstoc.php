<?php


namespace App\dip\negocio;


use App\dip\bbdd\InventarioBBDD;

class ControladorEstoc
{
    private Inventario $inventario;

    public function __construct(Inventario $inventario)
    {
        $this->inventario = $inventario;
    }

    public function necesitaReponer(string $tienda, string $producto)
    {
        $cantidadActual = $this->inventario->numeroProductos($tienda, $producto);

        return $cantidadActual < strlen($producto) * 100;
    }
}