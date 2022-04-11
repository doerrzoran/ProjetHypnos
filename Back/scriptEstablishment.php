<?php
require_once 'ConnectToDatabase.php';

$infoEstablishment = $_POST;

if(!isset($infoEstablishment)){
    echo 'non reçu';
}else{
    $establishment = $infoEstablishment['Establishment'];
}

$establishments = selectFromDatabase('Establishment', 'ID', $establishment, $conn);
// $sql = "SELECT* FROM Establishment WHERE(ID = $establishment)";
// $result = mysqli_query($conn, $sql);
// $establishments = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach($establishments as $establishment){
    $establishmentID = $establishment['ID'];
    session_start();
    $_SESSION['EstablishmentID'] = $establishmentID;
    header('Location: ../Front/PageEtablissement.php');

}

