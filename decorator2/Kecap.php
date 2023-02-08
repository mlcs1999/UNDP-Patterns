<?php

class Kecap extends BurgerDecorator
{
    public function cena()
    {
        return $this->prilog->cena() + 40;
    }


}


?>