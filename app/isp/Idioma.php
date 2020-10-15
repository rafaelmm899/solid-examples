<?php


namespace App\isp;


class Idioma
{
    const EN = ["I", "am", "angry"];
    const ES = ["Tengo", "hambre"];
    const CA = ["tenc", "fam"];

    public array $diccionario;

    /**
     * @param string[] $palabras
     */
    public function idioma(array $palabras): void
    {
        $this->diccionario = $palabras;
    }
}