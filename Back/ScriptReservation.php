<?php
require_once "ConnectToDatabase.php";
require_once 'UserID.php';

if(!isset($_SESSION['ID'])){
    require_once "UserID.php";
    header('location: ../front/Redirection.php'); 
}else{
    $user = $_SESSION['ID'];
    $userFirstname = $_SESSION['userFirstname'];
    $infoReservation = $_POST;
    if(!isset($infoReservation)){
        echo ' ';
    }else{
        $suite = $infoReservation['suite'];
        $startDate = $infoReservation['startDate'];
        $endDate = $infoReservation['endDate'];
        $client = $_SESSION['ID'];

        if(!isset($infoReservation['suite'])){
            echo 'veuillez renseigner une suite';
        }else{
            $suite = selectFromDatabase('Suite', 'id', $suite, $conn);
            
                $suiteID = $suite['0'];
                $result = insertintoDatabase('Booking', 'StartingDate, EndingDate, Suite,  Client', "'$startDate', '$endDate', '$suiteID',  '$client'", $conn);
                    if($result != 1){
                        die("reservation échouée !");
                    }else{
                        require_once "BookingData.php";
                        header('Location: ../front/PageClient.php');
                    }
        }  
    


    }
}


