<?php

namespace App\ocp;

class GeneradorPrimos
{
    public function primos(int $limit): array
    {
        $primos = [];
        for ($i = 2; $i < $limit; $i++){
            if ($this->esPrimo($i)){
                $primos[] = $i;
            }
        }

        return $this->ordenar($primos);
    }

    public function esPrimo(int $candidato): bool
    {
        for ($i = 2; $i < $candidato; $i++){
            if ($candidato % $i == 0){
                return false;
            }
        }

        return true;
    }

    public function ordenar(array $elementos): array
    {
        sort($elementos);
        return $elementos;
    }
}