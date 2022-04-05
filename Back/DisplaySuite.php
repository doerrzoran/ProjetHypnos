<?php
include_once 'ConnectToDatabase.php';

session_start();
$establishmentID = $_SESSION['EstablishmentID'];

$sql = "SELECT * FROM Establishment WHERE (ID = '$establishmentID')";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$establishments = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach($establishments as $establishment){
  $establishmentName = $establishment['Name'];
  
}


echo '<h1>'.$establishmentName.'</h1>' ;

$sql = "SELECT * FROM Suite WHERE (Establishment = '$establishmentID')";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$suites = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
       <input type="submit" value="reserver cette suite"></form> <?php;
     }
     
     echo  '<a href="../www.booking.com">'.htmlspecialchars($suite['BookingLink']).'</a></br>';
     echo $suite['Description'].'</br>';
     echo $suite['MainPic'].'</br>';
     echo $suite['Gallery'].'</br>';
     echo $suite['Price'].' €'.'</br>';
   }