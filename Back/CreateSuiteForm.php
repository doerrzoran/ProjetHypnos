<?php

$establishmentID = (int) ($_POST['data']);

require "ConnectToDatabase.php";

$query = selectAndFromDatabase('suite', 'Establishment', $establishmentID, 'isOccupied', 0, $conn);
// $sql = "SELECT * FROM suite WHERE Establishment = '$establishmentID' AND isOccupied = 0";
// $result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_all($result, MYSQLI_ASSOC);


$suiteArr = [];

foreach($query as $row) {
    $suiteArr[$row['ID']] = $row['Title']; 
}

  print_r(json_encode($suiteArr));

