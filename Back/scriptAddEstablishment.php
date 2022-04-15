<?php

require_once "ConnectToDatabase.php";

$infoNewEstablishment = $_POST;
var_dump($infoNewEstablishment);
echo '</br>';

if(!isset($infoNewEstablishment)){

}else{
    $address = $infoNewEstablishment['Address'];
    $city = $infoNewEstablishment['City'];
    $name = $infoNewEstablishment['Name'];

    $newEstablishment = insertintoDatabase("Establishment", "Address, City, Name, Manager", "'$address', '$city','$name', 1257", $conn);
    var_dump($newEstablishment);
    if($newEstablishment != 1){
        echo "erreur d'enregistrement";
    }else{
        header("Location: ../Front/pageAdmin.php");
    }
}
