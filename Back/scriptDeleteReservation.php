<?php
require_once 'ConnectToDatabase.php';

$infoDeletion = $_POST;

if(isset($infoDeletion)){
    $bookingID = $infoDeletion['id'];

    $deletion = deleteFromDatabase('booking', 'id', $bookingID, $conn);
    var_dump($deletion);
    if($deletion == 1){
       echo 'une erreur est survenue';
    }else{
        header('location: ../Front/PageClient.php');
    }

 