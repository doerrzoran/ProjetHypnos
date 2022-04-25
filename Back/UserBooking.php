<?php
 require_once 'BookingData.php';
     
        $bookingID = $booking['0'];
        $bookingSD = $booking['1'];
        $bookingED = $booking['2'];
        $bookingSuite = $booking['3'];
        $booking = $booking['4'];
        echo 'votre reservations: du '.$bookingSD.' au '.$bookingED.'</br>';

        $origin = new DateTime($bookingSD);
        $target = new DateTime(date('Y-m-d'));
        $interval = $origin->diff($target);
    
        if($interval->d <= 3){
          require 'formDeleteReservation.php';  
        }else{
                 
        }    
  