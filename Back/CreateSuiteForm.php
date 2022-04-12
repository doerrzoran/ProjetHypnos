<?php

$establishmentID = (int) ($_POST['data']);

require "ConnectToDatabase.php";

$query = selectFromDatabase('suite', 'Establishment', $establishmentID, $conn);
$suiteArr = [];

foreach($query as $row) {
    $suiteArr[$row['ID']] = $row['Title'];
}

print_r(json_encode($suiteArr));

