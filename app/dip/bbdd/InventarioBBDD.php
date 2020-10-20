<?php


namespace App\dip\bbdd;


use App\dip\negocio\Inventario;

class InventarioBBDD implements Inventario
{
    public function numeroProductos(string $tienda, string $producto): int
    {
        return BBDD::$stock[$tienda][$producto];
    }
}