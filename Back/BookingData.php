<?php
require_once 'ConnectToDatabase.php';
require_once 'UserID.php';


$sql = "SELECT* FROM Booking WHERE(Client = '$user')";
$result = mysqli_query($conn, $sql);
  if($result == false){
      die('Une erreur est survenue!');
  }else{ 
      $bookings = mysqli_fetch_all($result, MYSQLI_ASSOC);
    foreach($bookings as $booking){
         $bookingID = $booking['ID'];
         $bookingSD = $booking['StartingDate'];
         $bookingED = $booking['EndingDate'];
         $bookingSuite = $booking['Suite'];
         $booking = $booking['Client'];
     }
}


