<?php
session_start();
require_once "ConnectToDatabase.php";

$infoReservation = $_POST;
// var_dump($infoReservation);

if(!isset($infoReservation)){
    echo ' ';
}else{
    $suite = $infoReservation['suite'];
    $startDate = $infoReservation['startDate'];
    $endDate = $infoReservation['endDate'];
    $client = $_SESSION['ID'];
    echo $client;

    if(!isset($infoReservation['suite'])){
        echo 'veuillez renseigner une suite';
    }else{
        $sql = "SELECT* FROM Suite WHERE(ID = '$suite');";
        $result = mysqli_query($conn, $sql);
        $suites = mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach($suites as $suite){
            // var_dump($suite);
            $suiteID = $suite['ID'];
            echo $suiteID;

            $sql = "INSERT INTO Booking(StartingDate, EndingDate, Suite,  Client) VALUES('$startDate', '$endDate', '$suiteID',  '$client');";
            $result = mysqli_query($conn, $sql);
            // var_dump($result);
                if($result != 1){
                    die("reservation échouée !");
                }else{
                    $sql = "SELECT* FROM Booking WHERE(Client = '$client');";
                    $result = mysqli_query($conn, $sql);
                    $bookings = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    if($result != 1){
                        die('Une erreur est survenue!');
                    }else{ 
                    require_once "BookingData.php";
                    header('Location: ../front/PageClient.php');
                    }
                }
        }
    }  
  
}