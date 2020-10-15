<?php


namespace App\liskov;


class Puntos3D extends Puntos2D
{
    private int $z;

    public function __construct(int $x, int $y, int $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }


    public function distancia(object $otro): float
    {
        $distX = $this->x - $otro->x;
        $distY = $this->y - $otro->y;
        $distZ = $this->z - $otro->z;

        return sqrt($distX * $distX + $distY * $distY + $distZ * $distZ);
    }

    public function equals(object $obj): bool
    {
        if (get_class($this) != get_class($obj)){
            return false;
        }

        /** @var Puntos3D $other */
        $other = $obj;
        return $this->x == $other->x && $this->y == $other->y && $this->z == $other->z;
    }

    public function __toString()
    {
        $x = $this->x;
        $y = $this->y;
        $z = $this->z;
        return "Punto2D [x='${x}', y='${y}', z='${z}']";
    }
}