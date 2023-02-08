<?php
include "BurgerDecorator.php";

class Kackavalj extends BurgerDecorator
{
    private const cenaKack = 50;

    public function cena()
    {
        return $this->prilog->cena() + self::cenaKack;
    }
}

?>