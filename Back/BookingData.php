<?php
require_once 'ConnectToDatabase.php';
require_once 'UserID.php';

$bookings = selectFromDatabase('Booking', 'Client', $user, $conn);
    foreach($bookings as $booking){
      // var_dump($booking);
      // echo '</br>';
         $bookingID = $booking['ID'];
         $bookingSD = $booking['StartingDate'];
         $bookingED = $booking['EndingDate'];
         $bookingSuite = $booking['Suite'];
         $booking = $booking['Client'];

         $bookingArr = [$bookingID, $bookingSD, $bookingED, $bookingED, $booking];
         print_r($bookingArr);
     }



