<?php

namespace App\srp;

class Cliente
{
    private string $nombre;
    private array $favoritas;

    public function __construct(string $nombre, ... $favoritas)
    {
        $this->nombre = $nombre;
        $this->favoritas = $favoritas;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * @return Pelicula[]
     */
    public function getFavoritas(): array
    {
        return $this->favoritas;
    }
}