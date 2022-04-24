<?php
    require_once "../Back/ConnectToDatabase.php";
    $resultquery = selectFromDatabase("user_hypnos", "name", "Doerr", $conn);
    echo("Resultat ici :".'</br>');
    if(!$resultquery)
    {
        echo("pas de résultats");
    }
    else {
        print_r($resultquery);
    }
?>