<?php
 require_once 'BookingData.php';
    foreach($bookings as $booking){
     
        $bookingID = $booking['id'];
        $bookingSD = $booking['StartingDate'];
        $bookingED = $booking['EndingDate'];
        $bookingSuite = $booking['suite'];
        $booking = $booking['client'];
        echo 'votre reservations: du '.$bookingSD.' au '.$bookingED.'</br>';

        $origin = new DateTime($bookingSD);
        $target = new DateTime(date('Y-m-d'));
        $interval = $origin->diff($target);
    
        if($interval->d <= 3){
          require 'formDeleteReservation.php';  
        }else{
                 
        }    
    }