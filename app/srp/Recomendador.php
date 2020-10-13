<?php

namespace App\srp;

class Recomendador
{
    public function recomendaciones(Cliente $cliente): array
    {
        $recomendadas = [];

        foreach ($cliente->getFavoritas() as $favorita){
            $peliculas = BBDD::PELIS_POR_DIRECTOR();
            $recomendadas += array_filter($peliculas[$favorita->getDirector()], function (Pelicula $p) use ($cliente){
                return ! in_array($p, $cliente->getFavoritas());
            });
        }

        return $recomendadas;
    }


}