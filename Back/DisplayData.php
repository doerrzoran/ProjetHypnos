

<?php
// connect to database
$conn = mysqli_connect('localhost', 'Zoran', 'test1234', 'hypnos_bdd');

// check connection

if(!$conn){
  echo 'Connection error: ' . mysqli_connect_error();
}

// write query

$sql = 'SELECT ID, Name, Firstname, Mail, Password FROM User';

//make query and get result

$result = mysqli_query($conn, $sql);

//fetch the resulting rows as an array

$user =mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result from memory
mysqli_free_result($result);

//close connection
mysqli_close($conn);

//afficher le resultat
 print_r($user);