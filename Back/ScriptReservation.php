<?php
require_once "ConnectToDatabase.php";
require_once 'UserID.php';

if(!isset($_SESSION['id'])){
    require_once "UserID.php";
    header('location: ../Front/Redirection.php'); 
}else{
    $user = $_SESSION['id'];
    $userFirstname = $_SESSION['userFirstname'];
    $infoReservation = $_POST;
    if(!isset($infoReservation)){
        echo ' ';
    }else{
        $suite = $infoReservation['suite'];
        $startDate = $infoReservation['startDate'];
        $endDate = $infoReservation['endDate'];
        $client = $_SESSION['id'];

        if(!isset($infoReservation['suite'])){
            echo 'veuillez renseigner une suite';
        }else{
            $suites = selectFromDatabase('suite', 'id', $suite, $conn);
            

            foreach($suites as $suite){
                $suiteID = $suite['id'];
                $result = insertintoDatabase('booking', 'StartingDate, EndingDate, suite,  client', "'$startDate', '$endDate', '$suiteID',  '$client'", $conn);
                    if($result != 1){
                        die("reservation échouée !");
                    }else{
                        require_once "BookingData.php";
                        header('Location: ../Front/PageClient.php');
                    }
            }
        }  
    
    }
}

