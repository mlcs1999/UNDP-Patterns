<?php
include "Burger.php";
include "Kackavalj.php";
include "Kecap.php";

$b = new Burger();
$bk = new Kackavalj($b);
$bkecap = new Kecap($b);
$bkecapkack = new Kecap($bk);

echo $b->cena() . " <br>"; //100
echo $bk->cena() . " <br>"; //+50 = 150
echo $bkecap->cena() . "<br>"; //100+40=140
echo $bkecapkack->cena(); //150 + 40 = 190


?>