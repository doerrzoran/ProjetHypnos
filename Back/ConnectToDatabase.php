<?php
echo 'hello';
// connect to database
$conn = pg_connect("host=heroku-postgresql dbname=postgresql-tapered-22363");

// check connection

if(!$conn){
  die('Connection error: '). pg_connect_error();
}


function insertintoDatabase($table, $key, $data, $conn){
  $sql = "INSERT INTO $table($key) VALUES($data)";
  $result = pg_query($conn, $sql);
  return $result;
}

function selectFromDatabase($table, $key, $data, $conn){
  $sql = "SELECT * FROM $table WHERE $key = '$data'";
  $result = pg_query($conn, $sql);
  $row = pg_fetch_all($result, MYSQLI_ASSOC);
  return $row;
}

function selectAndFromDatabase($table, $key1, $data1, $key2, $data2, $conn){
  $sql = "SELECT * FROM $table WHERE $key1 = '$data1' AND $key2 = '$data2'";
  $result = pg_query($conn, $sql);
  $row = pg_fetch_all($result, MYSQLI_ASSOC);
  return $row;
}

function getEstablishmentAndSuite($conn){
  $sql = "SELECT e.ID, e.Name, s.ID suite_id, s.Title FROM establishment e JOIN suite s ON s.establishment = e.ID";
  $result = pg_query($conn, $sql);
  $row = pg_fetch_all($result, MYSQLI_ASSOC);
  return $row;
}

function updateDatabase($table, $line, $newvalue, $key, $data, $conn){
  $sql = "UPDATE $table SET $line = '$newvalue' WHERE $key = '$data'";
  $result = pg_query($conn, $sql);
  return $result;
}


function deleteFromDatabase($table, $key, $data, $conn){
  $sql = "DELETE FROM $table WHERE $key = '$data'";
  $result = pg_query($conn, $sql);
  return $result;
}