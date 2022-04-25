<?php

$infoSuite = $_POST;

if($infoSuite){
    session_start();
    $_SESSION['suite'] = $infoSuite['suite'];
    var_dump($_SESSION['establishment']);
    $_SESSION['establishment'] = $infoSuite['establishment'];
    header('Location: ../Front/PageReservation.php');
}else{

}