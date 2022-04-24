<?php
var_dump($_SESSION['id']).'</br>';
echo '1';
session_start();
var_dump($_SESSION['id']).'</br>';
echo '2';
if(isset($_SESSION['id'])){
    echo '3';
    $user = $_SESSION['id'];
    $name = $_SESSION['name'];
    $firstname = $_SESSION['firstname'];
    $mail = $_SESSION['mail'];
    $password = $_SESSION['password'];
    $role = $_SESSION['role'];
}else{

}


