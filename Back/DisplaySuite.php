<?php
include_once 'ConnectToDatabase.php';

session_start();
$establishmentID = $_SESSION['EstablishmentID'];

$establishments = selectFromDatabase('Establishment', 'ID', $establishmentID, $conn);


foreach($establishments as $establishment){
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
       ?><form method="POST" action="../Back/scriptSuite.php" enctype="multipart/form-data">
         <input type="hidden" name="Suite" value="<?= $suiteTitle ?>">
         <input type="hidden" name="Establishment" value="<?= $establishmentName ?>">
       <input type="submit" value="reserver cette suite"></form> <?php
     }
     
     echo'<a href="http://www.booking.com">'.htmlspecialchars($suite['BookingLink']).'</a></br>';
     echo $suite['Description'].'</br>';
     echo '<img src="'.$suite['MainPic'].'">';
     echo $suite['Gallery'].'</br>';
     echo $suite['Price'].' €'.'</br>';
   }