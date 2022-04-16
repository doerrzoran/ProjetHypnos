<?php

require_once "ConnectToDatabase.php";

$infoNewManager = $_POST;
var_dump($infoNewManager);
echo '</br>';

if(!isset($infoNewManager)){

}else{
    $manager = $infoNewManager['Manager'];
    $establishment = $infoNewManager['Establishment'];
    

    $newEstablishment = updateDatabase("Establishment", "Manager", $manager, "ID", $establishment, $conn);
    var_dump($newEstablishment);
    if($newEstablishment != 1){
        echo "erreur d'enregistrement";
    }else{
        header("Location: ../Front/pageAdmin.php");
    }
}
