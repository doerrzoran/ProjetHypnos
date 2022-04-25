<?php
    require_once "../Back/ConnectToDatabase.php";
    echo 'test</br>';
    // $query = pg_insert($conn, 'user_hypnos', ['test', 'testant', 'test@mail.com', 'test', 3]);
    // $query = "INSERT INTO user_hypnos (name, firstname, mail, role, password) VALUES (test, testant, test@mail.com, test, 3)";
    $name = 'test';
    $firstname = 'testant';
    $mail = 'test@mail.com';
    $password = 'test';
    $role = 3;
    // $query = "INSERT INTO user_hypnos (name, firstname, mail, password, role) VALUES ('test', 'testant', 'test@mail.com', 'test', '3')";
    $test = insertintoDatabase('user_hypnos', 'name, firstname, mail, password, role', 'test', "'testant', 'test@mail.com', 'test', '3'", $conn);
    // "INSERT INTO book VALUES ('$name','$firstname', '$email','$role')";
  print_r($test);