<?php
require_once 'ConnectToDatabase.php';
require_once 'UserID.php';

$bookings = selectFromDatabase('booking', 'client', $user, $conn);

    


