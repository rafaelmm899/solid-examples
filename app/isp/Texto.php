<?php


namespace App\isp;


interface Texto
{
    public function nueva(string $palabra): void;

    public function texto(): string;
}