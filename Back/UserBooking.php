<?php
 require_once 'BookingData.php';

 if(!isset($bookingSD) || !isset($bookingED)){
  echo ' ';
}else{
    echo 'vos reservation: du '.$bookingSD.' au '.$bookingED;
} 

 