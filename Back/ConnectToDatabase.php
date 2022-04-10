<?php
// connect to database
$conn = mysqli_connect('localhost', 'Zoran', 'test1234', 'hypnos_bdd');

// check connection

if(!$conn){
  die('Connection error: '). mysqli_connect_error();
}


function insertintoDatabase($table, $key, $data, $conn){
  $sql = "INSERT INTO $table($key) VALUES($data)";
  $result = mysqli_query($conn, $sql);
}


function selectFromDatabase($table, $key, $data, $conn){
  $sql = "SELECT* FROM $table WHERE($key = $data)";
  $result = mysqli_query($conn, $sql);
  var_dump($result);
}



 // $sql = "SELECT* FROM User WHERE Password ='$password'";
            // $result = mysqli_query($conn, $sql);
            // $VerificationPassword = mysqli_fetch_all($result, MYSQLI_ASSOC);