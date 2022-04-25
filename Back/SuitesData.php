<?php
$sql = "SELECT * FROM suite WHERE(establishment = '$establishmentID')";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$suites = mysqli_fetch_all($result, MYSQLI_ASSOC);