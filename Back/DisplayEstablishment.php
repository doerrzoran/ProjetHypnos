<?php
include_once 'ConnectToDatabase.php';

$query = "SELECT* FROM establishment";
$result = pg_query($conn, $query);
$establishments = pg_fetch_row($result);

var_dump($establishments);




foreach($establishments as $establishment){
    echo '</br>';
    echo $establishment['name'].'</br>';
    echo $establishment['address'].'</br>';
    echo $establishment['city'].'</br>';
    echo $establishment['name'].'</br>';
    $establishmentID = $establishment['id'];
    require "formModifyEstablishment.php";
   }

