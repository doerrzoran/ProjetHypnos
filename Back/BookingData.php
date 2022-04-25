<?php
require_once 'ConnectToDatabase.php';
require_once 'UserID.php';

$booking = selectFromDatabase('booking', 'client', $user, $conn);


    


