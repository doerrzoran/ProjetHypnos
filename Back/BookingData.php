<?php
require_once 'ConnectToDatabase.php';
require_once 'UserID.php';

$bookings = selectFromDatabase('Booking', 'Client', $user, $conn);

    


