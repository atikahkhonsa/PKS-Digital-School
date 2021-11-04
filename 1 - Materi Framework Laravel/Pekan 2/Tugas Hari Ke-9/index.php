<?php
    require_once('animal.php');
    require_once('frog.php');
    require_once('ape.php');
    $animal = new Animal ("shaun");
    echo "Name : " . $animal->name . "<br>";
    echo "legs : " . $animal->legs . "<br>";
    echo "cold blooded : " . $animal->cold_blooded . "<br><br>";

    $kodok = new Frog("buduk");
    echo "Name : " . $kodok->name . "<br>";
    echo "legs : " . $kodok->legs . "<br>";
    echo "cold blooded : " . $kodok->cold_blooded . "<br>";
    echo $kodok->Jump() . "<br><br>";

    $sungokong = new Ape("kera sakti");
    echo "Name : " . $sungokong->name . "<br>";
    echo "legs : " . $sungokong->legs . "<br>";
    echo "cold blooded : " . $sungokong->cold_blooded . "<br>";
    echo $sungokong->Yell();
?>