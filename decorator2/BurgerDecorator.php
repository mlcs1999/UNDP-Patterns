<?php
abstract class BurgerDecorator implements Prilog
{
    protected Prilog $prilog;

    public function __construct(Prilog $prilog)
    {
        $this->prilog = $prilog;
    }
}

?>