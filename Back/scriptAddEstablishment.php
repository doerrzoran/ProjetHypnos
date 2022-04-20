<?php

require_once "ConnectToDatabase.php";

$infoNewEstablishment = $_POST;
var_dump($infoNewEstablishment);
echo '</br>';

if(!isset($infoNewEstablishment)){
    header("Location: ../Front/pageAdmin.php");
}else{
    $address = $infoNewEstablishment['Address'];
    $city = $infoNewEstablishment['City'];
    $name = $infoNewEstablishment['Name'];

    $newEstablishment = insertintoDatabase("Establishment", "Address, City, Name, Manager", "'$address', '$city','$name', 1257", $conn);
    var_dump($newEstablishment);
    if($newEstablishment != 1){
        die("une erreur est survenue lors de l'enregistrement")
    }else{
        header("Location: ../Front/pageAdmin.php");
    }
}
