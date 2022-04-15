<?php
 require_once 'BookingData.php';
 foreach ($bookingArr as $booking){
   echo $bookingID.'</br>';
 }

 if(!isset($bookingSD) || !isset($bookingED)){
  echo ' ';
}else{
    echo 'vos reservations: du '.$bookingSD.' au '.$bookingED;
    
} 

 