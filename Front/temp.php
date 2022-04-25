<?php
   echo 'lalallalalalal</br>';
    require_once "../Back/ConnectToDatabase.php";
    echo 'test</br>';
    // $query = pg_insert($conn, 'user_hypnos', ['test', 'testant', 'test@mail.com', 'test', 3]);
    $query = "INSERT INTO user_hypnos VALUES('153145315151', 'test', 'testant', 'test@mail.com', 'test', '3')";
    if (pg_query($conn,$query))
{
    echo "saved";
}
else
{
    echo "error insering data";
}
?>