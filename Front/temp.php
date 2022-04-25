<?php
    require_once "../Back/ConnectToDatabase.php";
    $query = "INSERT INTO user_hypnos Values('Test', 'Testant', 'test@test.mail', 'test', 3)";
    $result = pg_query($conn, $query);
    if($reult){
        echo 'oui';
    }else{
        echo 
    }


    
?>