<?php
include_once 'ConnectToDatabase.php';
// require_once '../Back/establismentID.php';
session_start();
$establishmentID = $_SESSION['EstablishmentID'];

$sql = "SELECT * FROM Establishment WHERE (ID = '$establishmentID')";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$establishments = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach($establishments as $establishment){
 echo '<h1>'.$establishment['Name'].'</h1>' ;
}




$sql = "SELECT * FROM Suite WHERE (Establishment = '$establishmentID')";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$suites = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach($suites as $suite){

     echo '</br>';
     echo '<h3>'.htmlspecialchars($suite['Title']).'</br></h3>';
    
     echo ' Etat:'.htmlspecialchars($suite['IsOccupied']).'</br>';
     echo  '<a href="www.booking.com">'.htmlspecialchars($suite['BookingLink']).'</a></br>';
     echo ' Description:'.htmlspecialchars($suite['Description']).'</br>';
     echo ' lien image principale:'.htmlspecialchars($suite['MainPic']).'</br>';
     echo ' lien gallerie:'.htmlspecialchars($suite['Gallery']).'</br>';
     echo htmlspecialchars($suite['Price']).' €'.'</br>';
   }