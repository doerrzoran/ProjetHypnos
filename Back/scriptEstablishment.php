<?php
require_once 'ConnectToDatabase.php';

$infoEstablishment = $_POST;

if(!isset($infoEstablishment)){
    echo 'non reçu';
}else{
    $establishment = $infoEstablishment['establishment'];
}

$establishments = selectFromDatabase('establishment', 'id', $establishment, $conn);
// $sql = "SELECT* FROM establishment WHERE(id = $establishment)";
// $result = mysqli_query($conn, $sql);
// $establishments = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach($establishments as $establishment){
    $establishmentID = $establishment['0'];
    session_start();
    $_SESSION['EstablishmentID'] = $establishmentID;
    header('Location: ../Front/PageEtablissement.php');

}

