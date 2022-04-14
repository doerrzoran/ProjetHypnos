<?php
require_once 'ConnectToDataBase.php';

 $infochangeSuite =  $_POST;

 var_dump($infochangeSuite);

 if(isset($infochangeSuite)){
    $suite = $infochangeSuite['ID'];
    foreach($infochangeSuite as $line => $newValue){
     $update = updateDatabase('Suite', $line, $newValue, 'ID', $suite, $conn);
     if($update == 0){
         die('erreur');
    }else
     echo $line.'<br>';
    }
    header('location: ../Front/PageGerant.php');
 } 