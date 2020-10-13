<?php


namespace App\srp;


class ExportadorCSV
{
    /**
     * @param Pelicula[] $peliculas
     * @return string
     */
    public function exportar(array $peliculas)
    {
        return implode(",",array_map(fn(Pelicula $pelicula) => implode(",", [$pelicula->getTitulo(),$pelicula->getDirector(),$pelicula->getGenero()]), $peliculas));
    }
}