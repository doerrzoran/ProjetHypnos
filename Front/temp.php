<?php
    require_once "../Back/ConnectToDatabase.php";
    // function selectFromDatabase($table, $key, $data, $conn)
    // $resultquery = selectFromDatabase("user_hypnos", "firstname", "Doerr", $conn);
    $resultquery = insertintoDatabase("user_hypnos", "[name=>test, firstname=>testant, mail=>test@test.com, password=>test role=>3]", $data, $conn)
    if(!$resultquery)
    {
        echo("pas de résultats");
    }
    else {
        print_r($resultquery);
    }


    
?>