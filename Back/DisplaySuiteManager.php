<?php
include_once 'ConnectToDatabase.php';


$Manager = $_SESSION['ID'];

$sql = "SELECT * FROM Establishment WHERE(Manager = '$Manager')";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$establishments = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach($establishments as $establishment){
  $establishmentID = $establishment['ID'];
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
       
     }
     
     echo  '<a href="../www.booking.com">'.htmlspecialchars($suite['BookingLink']).'</a></br>';
     echo $suite['Description'].'</br>';
     echo $suite['MainPic'].'</br>';
     echo $suite['Gallery'].'</br>';
     echo $suite['Price'].' €'.'</br>';
   }