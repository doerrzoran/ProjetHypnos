<?php
// connect to database
$conn = mysqli_connect('localhost', 'Zoran', 'test1234', 'hypnos_bdd');

// check connection

if(!$conn){
  echo 'Connection error: ' . mysqli_connect_error();
}else{
    echo 'Database connected!</br>';
}