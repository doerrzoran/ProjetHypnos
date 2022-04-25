<?php
require_once 'ConnectToDataBase.php';

 $infoStatus=  $_POST;

 if(isset($infoStatus)){
     $isOccupied = $infoStatus['isOccupied'];
     $suite = $infoStatus['id'];

     $update = updateDatabase('Suite', 'isOccupied', $isOccupied, 'id', $suite, $conn);
     if($update != 0){
         header("Location: ../Front/PageGerant.php");
     }else{
         echo 'erreur';
     }
 }