<?php

namespace App\srp;

class Pelicula
{
    private string $titulo;
    private string $genero;
    private string $director;

    public function __construct(string $titulo, string $genero, string $director)
    {
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->director = $director;
    }

    /**
     * @return string
     */
    public function getTitulo(): string
    {
        return $this->titulo;
    }

    /**
     * @return string
     */
    public function getGenero(): string
    {
        return $this->genero;
    }

    /**
     * @return string
     */
    public function getDirector(): string
    {
        return $this->director;
    }

    public function __toString()
    {
        return "Pelicula [titulo=" . $this->titulo . ", genero=" . $this->genero . ", director=" . $this->director . "]";
    }


}