<?php

require_once "ConnectToDatabase.php";

$infoNewSuite = $_POST;

if(!isset($infoNewSuite)){

}else{
    $title = $infoNewSuite['Title'];
    $establishment = $infoNewSuite['Establishement'];
    $price = $infoNewSuite['Price'];
    $bookinglink = $infoNewSuite['BookingLink'];
    $description = $infoNewSuite['Description'];
    $mainpic = $infoNewSuite['MainPic'];
    $gallery = $infoNewSuite['Gallery'];


    $newSuite = insertintoDatabase("Suite", "Title, Establishment, price, isOccupied, BookingLink, Description, MainPic, Gallery", "'$title', '$establishment', '$price', 0, '$bookinglink', '$description',  '$mainpic', '$gallery'", $conn);
    if($newSuite != 1){
        echo "erreur d'enregistrement";
    }else{
        header("Location: ../Front/pageGerant.php");
    }
}

