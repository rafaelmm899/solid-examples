<?php


namespace App\isp;


class ProcesadorTexto implements Correccion
{
    private array $texto = [];

    public function nueva(string $palabra): void
    {
        $this->texto[] = $palabra;
    }

    public function texto(): string
    {
        return implode(" ", $this->texto);
    }

    public function correcto(Idioma $idioma): bool
    {
        foreach ($this->texto as $value){
            if (!in_array($value, $idioma->diccionario)){
                return false;
            }
        }

        return true;
    }
}