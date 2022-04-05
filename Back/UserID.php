<?php

session_start();
if(isset($_SESSION['ID'])){
    $user = $_SESSION['ID'];
    $userFirstname = $_SESSION['userFirstname'];
}else{
    header('location: ../front/pageInscription.php');
}


