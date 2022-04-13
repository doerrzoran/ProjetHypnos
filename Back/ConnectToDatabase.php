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
  return $result;
}

function selectFromDatabase($table, $key, $data, $conn){
  $sql = "SELECT * FROM $table WHERE $key = '$data'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
  return $row;
}

function selectAndFromDatabase($table, $key1, $data1, $key2, $data2, $conn){
  $sql = "SELECT * FROM $table WHERE $key1 = '$data1' AND $key2 = '$data2'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
  return $row;
}

function getEstablishmentAndSuite($conn){
  $sql = "SELECT e.ID, e.Name, s.ID suite_id, s.Title FROM establishment e JOIN suite s ON s.establishment = e.ID";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
  return $row;
}