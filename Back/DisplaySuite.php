<?php
include_once 'ConnectToDatabase.php';

// write query

$sql = 'SELECT Title, Establishment, Price, IsOccupied, BookingLink, Description, MainPic, Gallery FROM Suite';
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$suites = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

//close connection
mysqli_close($conn);

//afficher le resultat
// print_r($suites);

foreach($suites as $suite){
    echo '</br>';
    echo ' Titre: '.htmlspecialchars($suite['Title']).'</br>';
    echo ' Etablissement: '.htmlspecialchars($suite['Establishment']).'</br>';
    echo ' Prix:'.htmlspecialchars($suite['Price']).' €'.'</br>';
    echo ' Etat:'.htmlspecialchars($suite['IsOccupied']).'</br>';
    echo ' Lien Booking:' ?><a href="www.booking.com"><?= htmlspecialchars($suite['BookingLink'])?></a><?='</br>';
    echo ' Description:'.htmlspecialchars($suite['Description']).'</br>';
    echo ' lien image principale:'.htmlspecialchars($suite['MainPic']).'</br>';
    echo ' lien gallerie:'.htmlspecialchars($suite['Gallery']).'</br>';
   }