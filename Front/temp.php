<?php
    require_once "../Back/ConnectToDatabase.php";
    echo 'test</br>';
    // $query = pg_insert($conn, 'user_hypnos', ['test', 'testant', 'test@mail.com', 'test', 3]);
    $query = "INSERT INTO user_hypnos (name, firstname, mail, role, password) VALUES (test, testant, test@mail.com, test, 3)";
    // $query = "INSERT INTO users (email, name, surname) VALUES ('$email', '$name', '$surname')"
    // "INSERT INTO book VALUES ('$name','$firstname', '$email','$role')";
    if (pg_query($conn,$query))
{
    echo "saved";
}
else
{
    echo "error inserting data";
}
?>