<?php

$establishmentID = 1;

require "ConnectToDatabase.php";

$query = selectFromDatabase('suite', 'Establishement', $establishmentID, $conn);
print_r($query);

