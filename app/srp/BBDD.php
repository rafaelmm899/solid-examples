<?php

namespace App\srp;

class BBDD
{
    public const GENERO_FANTASTICO = 'fantastica';
    public const GENERO_BELICO = "belico";

    public const DIRECTOR_SPIELBERG = "Spielberg";

    public static function ET(): Pelicula
    {
        return new Pelicula("ET", self::GENERO_FANTASTICO, self::DIRECTOR_SPIELBERG);
    }

    public static function SOLDADO_RYAN(): Pelicula
    {
        return new Pelicula("Salvar al soldado Ryan", self::GENERO_BELICO, self::DIRECTOR_SPIELBERG);
    }

    public static function TODAS(): array
    {
        $self = new self();
        $soldadoRyan = $self::SOLDADO_RYAN();
        $et = $self::ET();
        return [$soldadoRyan, $et];
    }

    public static function JUAN(): Cliente
    {
        return new Cliente("Juan", BBDD::ET());
    }

    public static function PELIS_POR_DIRECTOR(): array
    {
        $self = new self();
        $results = [];

        foreach ($self::TODAS() as $pelicula){
            $results[$pelicula->getDirector()][] = $pelicula;
        }

        return $results;
    }
}
