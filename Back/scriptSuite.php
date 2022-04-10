<?php

$infoSuite = $_POST;

if($infoSuite){
    session_start();
    $_SESSION['Suite'] = $infoSuite['Suite'];
    var_dump($_SESSION['Establishment']);
    $_SESSION['Establishment'] = $infoSuite['Establishment'];
    header('Location: ../Front/PageReservation.php');
}else{

}