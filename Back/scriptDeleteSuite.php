<?php
require_once 'ConnectToDatabase.php';

$infoDeletion = $_POST;
var_dump($infoDeletion);

if(isset($infoDeletion)){
    $suiteID = $infoDeletion['id'];

    $deletion = deleteFromDatabase('suite', 'id', $suiteID, $conn);
    var_dump($deletion);
    if($deletion == 1){
        header('location: ../Front/PageGerant.php');
    }
}else{
    echo 'une erreur est survenue';
}

 