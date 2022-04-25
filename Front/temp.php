<?php
    require_once "../Back/ConnectToDatabase.php";
    // function selectFromDatabase($table, $key, $data, $conn)
    // $resultquery = selectFromDatabase("user_hypnos", "firstname", "Doerr", $conn);
    $values = array("name" => "test", "firstname" => "testant", "mail" => "test@test.com", "password" => "test", "role" => 3);
    $resultquery = pg_insert($conn, "user_hypnos", $values, PGSQL_DML_EXEC);
    if(!$resultquery)
    {
        echo("pas de résultats");
    }
    else {
        print_r($resultquery);
    }


    
?>