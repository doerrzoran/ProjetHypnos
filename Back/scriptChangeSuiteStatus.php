<?php
require_once 'ConnectToDataBase.php';

 $infoStatus=  $_POST;
 var_dump($infoStatus);
 echo '</br>';

 if(isset($infoStatus)){
     $isOccupied = $infoStatus['isOccupied'];
     $suite = $infoStatus['ID'];

     $update = updateDatabase('Suite', 'isOccupied', $isOccupied, 'ID', $suite, $conn);
     if($update != 0){
         header("Location: ../Front/PageGerant.php");
         var_dump($update);
     }else{
         echo 'erreur';
     }
 }