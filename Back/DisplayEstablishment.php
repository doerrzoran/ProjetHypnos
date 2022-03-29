<?php
include_once 'ConnectToDatabase.php';

// write query

$sql = 'SELECT ID, Address, City, Name, Manager FROM Establishment';

//make query and get result

$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);


//fetch the resulting rows as an array
$establishments = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result from memory
mysqli_free_result($result);

//close connection
mysqli_close($conn);

//afficher le resultat
// print_r($establishments);

foreach($establishments as $establishment){
    echo '</br>';
    echo ' Adresse: '.htmlspecialchars($establishment['Address']).'</br>';
     echo ' Ville: '.htmlspecialchars($establishment['City']).'</br>';
     echo ' Nom:'.htmlspecialchars($establishment['Name']).'</br>';
   }