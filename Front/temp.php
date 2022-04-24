<?php
    require_once "../Back/ConnectToDatabase.php";
    // function selectFromDatabase($table, $key, $data, $conn)
    $resultquery = selectFromDatabase("user_hypnos", "firstname", "Doerr", $conn);
    echo("Resultat ici :".'</br>');
    if(!$resultquery)
    {
        echo("pas de résultats");
    }
    else {
        print_r($resultquery);
    }
?>