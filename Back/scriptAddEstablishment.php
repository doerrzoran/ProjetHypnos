<?php

require_once "ConnectToDatabase.php";

$infoNewEstablishment = $_POST;
var_dump($infoNewEstablishment);
echo '</br>';

if(!isset($infoNewEstablishment)){
    header("Location: ../Front/PageAdmin.php");
}else{
    $address = $infoNewEstablishment['address'];
    $city = $infoNewEstablishment['city'];
    $name = $infoNewEstablishment['name'];

    $newEstablishment = insertintoDatabase("establishment", "address, city, name, manager", "'$address', '$city','$name', 1257", $conn);
    var_dump($newEstablishment);
    if($newEstablishment != 1){
        die("une erreur est survenue lors de l'enregistrement")
    }else{
        header("Location: ../Front/PageAdmin.php");
    }
}
