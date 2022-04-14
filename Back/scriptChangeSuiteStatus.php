<?php
require_once 'ConnectToDataBase.php';

 $infoStatus=  $_POST;

 if(isset($infoStatus)){
     $isOccupied = $infoStatus['isOccupied'];
     $suite = $infoStatus['ID'];

     $update = updateDatabase('Suite', 'isOccupied', $isOccupied, 'ID', $suite, $conn);
     if($update != 0){
         header("Location: ../Front/PageGerant.php");
     }else{
         echo 'erreur';
     }
 }