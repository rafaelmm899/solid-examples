<?php


namespace App\dip\negocio;


interface Inventario
{
    public function numeroProductos(string $tienda, string $producto): int;
}