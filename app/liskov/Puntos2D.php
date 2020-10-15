<?php

namespace App\liskov;

class Puntos2D {
    protected int $x;
    protected int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function hashCode(): int
    {
        $prime = 31;
        $result = 1;
        $result = $prime * $result + $this->x;
        $result = $prime * $result + $this->y;
        return $result;
    }

    public function equals(object $obj): bool
    {
        if (get_class($this) != get_class($obj)){
            return false;
        }

        /** @var Puntos2D $other */
        $other = $obj;
        return $this->x == $other->x && $this->y == $other->y;
    }

    public function distancia(object $otro):float
    {
        $distX = $this->x - $otro->x;
        $distY = $this->y - $otro->y;
        return sqrt($distX * $distX + $distY * $distY);
    }

    public function __toString()
    {
        $x = $this->x;
        $y = $this->y;
        return "Punto2D [x='${x}', y='${y}']";
    }
}

