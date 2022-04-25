<?php

require_once "ConnectToDatabase.php";

$infoNewSuite = $_POST;

if(!isset($infoNewSuite)){

}else{
    $title = $infoNewSuite['title'];
    $establishment = $infoNewSuite['Establishement'];
    $price = $infoNewSuite['price'];
    $bookinglink = $infoNewSuite['BookingLink'];
    $description = $infoNewSuite['description'];
    $mainpic = $infoNewSuite['MainPic'];
    $gallery = $infoNewSuite['gallery'];


    $newSuite = insertintoDatabase("suite", "title, establishment, price, isOccupied, BookingLink, description, MainPic, gallery", "'$title', '$establishment', '$price', 0, '$bookinglink', '$description',  '$mainpic', '$gallery'", $conn);
    if($newSuite != 1){
        echo "erreur d'enregistrement";
    }else{
        header("Location: ../Front/PageGerant.php");
    }
}

