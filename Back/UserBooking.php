<?php
 require_once 'BookingData.php';
    foreach($bookings as $booking){
     
        $bookingID = $booking['ID'];
        $bookingSD = $booking['StartingDate'];
        $bookingED = $booking['EndingDate'];
        $bookingSuite = $booking['Suite'];
        $booking = $booking['Client'];
        echo 'vos reservations: du '.$bookingSD.' au '.$bookingED;
        require 'formDeleteReservation.php';
    }



 