<?php

$conn = mysqli_connect('localhost', 'Zoran', 'test1234', 'hypnos_bdd');

if(!$conn){
  echo 'Connection error: ' . mysqli_connect_error();
}