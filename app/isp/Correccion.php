<?php


namespace App\isp;


interface Correccion extends Texto
{
    public function correcto(Idioma $idioma): bool;
}