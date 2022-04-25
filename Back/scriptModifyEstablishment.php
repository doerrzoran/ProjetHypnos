<?php

require_once "ConnectToDatabase.php";

$infoNewManager = $_POST;
var_dump($infoNewManager);
echo '</br>';

if(!isset($infoNewManager)){

}else{
    $manager = $infoNewManager['manager'];
    $establishment = $infoNewManager['establishment'];
    

    $newEstablishment = updateDatabase("establishment", "manager", $manager, "id", $establishment, $conn);
    var_dump($newEstablishment);
    if($newEstablishment != 1){
        echo "erreur d'enregistrement";
    }else{
        header("Location: ../Front/PageAdmin.php");
    }
}
