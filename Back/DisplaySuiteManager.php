<?php
include_once 'ConnectToDatabase.php';


$Manager = $_SESSION['ID'];

$establishments = selectFromDatabase('Establishment', 'Manager', $Manager, $conn);

foreach($establishments as $establishment){
  $establishmentID = $establishment['ID'];
  $establishmentName = $establishment['Name'];
}


echo '<h1>'.$establishmentName.'</h1>' ;

$suites = selectFromDatabase('Suite', 'Establishment', $establishmentID, $conn);
foreach($suites as $suite){
  $suiteID = $suite['ID'];
  $suiteTitle = $suite['Title'];

     echo '</br>';
     echo '<h3>'.htmlspecialchars($suite['Title']).'</br></h3>';
     $isOccupied = $suite['IsOccupied'];
     if($isOccupied == 1){
       echo "Cette chambre est reservée</br>";
     }else{
       echo "Disponible</br>";
       
     }
     
     echo  '<a href="../www.booking.com">'.htmlspecialchars($suite['BookingLink']).'</a></br>';
     echo $suite['Description'].'</br>';
     echo $suite['MainPic'].'</br>';
     echo $suite['Gallery'].'</br>';
     echo $suite['Price'].' €'.'</br>';
   }