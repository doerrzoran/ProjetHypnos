<?php
require_once "ConnectToDatabase.php";

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
        $sql = "SELECT* FROM Suite WHERE(ID = '$suite');";
        $result = mysqli_query($conn, $sql);
        $suites = mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach($suites as $suite){
            $suiteID = $suite['ID'];
            $sql = "INSERT INTO Booking(StartingDate, EndingDate, Suite,  Client) VALUES('$startDate', '$endDate', '$suiteID',  '$client');";
            $result = mysqli_query($conn, $sql);
                if($result != 1){
                    die("reservation échouée !");
                }else{
                    require_once "BookingData.php";
                    header('Location: ../front/PageClient.php');
                }
        }
    }  
  
}