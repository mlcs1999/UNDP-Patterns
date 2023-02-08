<?php

require "SingletonDB.php";

$instanca = SingletonDB::getInstance();
$conn1 = $instanca->getConnection();
var_dump($conn1);

$instanca2 = SingletonDB::getInstance();
$conn2 = $instanca2->getConnection();
var_dump($conn2);

if ($conn1 === $conn2) {
    echo "Ista konekcija na bazu. <br>";
} else {
    echo "Dve konekcije na bazu. <br>";
}


?>