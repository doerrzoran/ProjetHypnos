<?php

// connect to database
$conn = pg_connect("host=ec2-63-32-248-14.eu-west-1.compute.amazonaws.com dbname=dfsrbf4pagn23n user=qrtrrqgjywffca port=5432 password=7537f48e0ddc569f78f58808220b37e0430d58f186a680c8a61216700223bf27");

// check connection

if(!$conn){
  die('Connection error: '). pg_connect_error();
}


function selectFromDatabase($table, $key, $data, $conn){
  $sql = "select * from ". $table ." WHERE ". $key ." = ".$data;
  $inter = $sql;
  echo($sql.'/n');
  $result = pg_query($conn, $inter);
  // $result = pg_query($conn, "select * from user_hypnos");
  $row = pg_fetch_row($result);
  return $row;
}

function executeQuery($sql, $conn){
  $result = pg_query($sql, $inter);
  $row = pg_fetch_row($result);
  return $row;
}

function insertintoDatabase($table, $key, $data, $conn){
  $query = "INSERT INTO $table($key) VALUES($data)";
  $result = pg_query($query);
  return $result;
}

// function selectFromDatabase($table, $key, $data, $conn){
//   $query = "SELECT * FROM $table WHERE $key = '$data'";
//   $result = pg_query($query);
//   $row = pg_fetch_all($result, PGSQL_ASSOC);
//   return $row;
// }

function selectAndFromDatabase($table, $key1, $data1, $key2, $data2, $conn){
  $query = "SELECT * FROM $table WHERE $key1 = '$data1' AND $key2 = '$data2'";
  $result = pg_query($query);
  $row = pg_fetch_all($result, PGSQL_ASSOC);
  return $row;
}

function getEstablishmentAndSuite($conn){
  $query = "SELECT e.ID, e.Name, s.ID suite_id, s.Title FROM establishment e JOIN suite s ON s.establishment = e.ID";
  $result = pg_query($query);
  $row = pg_fetch_all($result, PGSQL_ASSOC);
  return $row;
}

function updateDatabase($table, $line, $newvalue, $key, $data, $conn){
  $query = "UPDATE $table SET $line = '$newvalue' WHERE $key = '$data'";
  $result = pg_query($query);
  return $result;
}


function deleteFromDatabase($table, $key, $data, $conn){
  $query = "DELETE FROM $table WHERE $key = '$data'";
  $result = pg_query($query);
  return $result;
}