<?php
    require_once "../Back/ConnectToDatabase.php";
    // function selectFromDatabase($table, $key, $data, $conn)
    $resultquery = insertintoDatabase($table, $key, $data, $conn);
    echo("Resultat ici :".'</br>');
    



?>