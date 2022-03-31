<?php
// connect to database
$conn = mysqli_connect('localhost', 'Zoran', 'test1234', 'hypnos_bdd');

// check connection

if(!$conn){
  die('Connection error: '). mysqli_connect_error();
}