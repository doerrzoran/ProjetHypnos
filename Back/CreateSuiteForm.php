<?php

$establishmentID = (int) ($_POST['data']);

require "ConnectToDatabase.php";

$query = selectAndFromDatabase('suite', 'establishment', $establishmentID, 'isOccupied', 0, $conn);
// $sql = "SELECT * FROM suite WHERE establishment = '$establishmentID' AND isOccupied = 0";
// $result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_all($result, MYSQLI_ASSOC);


$suiteArr = [];

foreach($query as $row) {
    $suiteArr[$row['id']] = $row['title']; 
}

  print_r(json_encode($suiteArr));

