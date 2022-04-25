<?php
include_once 'ConnectToDatabase.php';

$sql = 'SELECT* FROM establishment';
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$establishments = mysqli_fetch_all($result, MYSQLI_ASSOC);




foreach($establishments as $establishment){
    echo '</br>';
    echo $establishment['name'].'</br>';
    echo $establishment['address'].'</br>';
    echo $establishment['city'].'</br>';
    echo $establishment['name'].'</br>';
    $establishmentID = $establishment['id'];
    require "formModifyEstablishment.php";
   }

