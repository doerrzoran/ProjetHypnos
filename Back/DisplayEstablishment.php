<?php
include_once 'ConnectToDatabase.php';

$sql = 'SELECT* FROM Establishment';
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$establishments = mysqli_fetch_all($result, MYSQLI_ASSOC);




foreach($establishments as $establishment){
    echo '</br>';
    echo $establishment['Name'].'</br>';
    echo $establishment['Address'].'</br>';
     echo $establishment['City'].'</br>';
     echo $establishment['Name'].'</br>';
   }