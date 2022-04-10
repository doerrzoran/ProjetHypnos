<?php
$sql = "SELECT * FROM Suite WHERE(Establishment = '$establishmentID')";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$suites = mysqli_fetch_all($result, MYSQLI_ASSOC);