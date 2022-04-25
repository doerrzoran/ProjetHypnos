<?php
   echo 'lalallalalalal</br>';
    require_once "../Back/ConnectToDatabase.php";
    echo 'test</br>';
    $query = pg_insert($conn, 'user_hypnos', ['test', 'testant', 'test@mail.com', 'test', 3]);

    
?>