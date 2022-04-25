<?php
require_once 'ConnectToDatabase.php';

$infoDeletion = $_POST;

if(isset($infoDeletion)){
    $bookingID = $infoDeletion['id'];

    $deletion = deleteFromDatabase('booking', 'id', $bookingID, $conn);
    var_dump($deletion);
    if($deletion == 1){
       header('location: ../Front/PageClient.php');
    }
}else{
    echo 'une erreur est survenue';
}

 