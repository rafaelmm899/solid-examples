<?php

namespace App\ocp;

class OrdenamientoInverso extends GeneradorPrimos
{
    public function ordenar(array $elementos): array
    {
        rsort($elementos);
        return $elementos;
    }
}