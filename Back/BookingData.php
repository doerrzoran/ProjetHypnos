<?php


foreach($bookings as $booking){
     $booking['ID'] = $bookingID;
     $booking['StartingDate'] = $bookingSD;
     $booking['EndingDate'] = $bookingED;
     $booking['Suite'] = $bookingSuite;
     $booking['Client'] = $booking;

    setcookie("booking", "hello");
}