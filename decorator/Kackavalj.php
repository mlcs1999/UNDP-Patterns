<?php

class Kackavalj implements Prilog
{
    private $prilog;

    public function __construct(Prilog $prilog)
    {
        $this->prilog = $prilog;
    }


    public function cena()
    {
        return $this->prilog->cena() + 50;
    }
}

?>