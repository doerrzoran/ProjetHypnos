<?php


session_start();
if(isset($_SESSION['id'])){
    echo 'oui';
    $user = $_SESSION['id'];
    $name = $_SESSION['name'];
    $firstname = $_SESSION['firstname'];
    $mail = $_SESSION['mail'];
    $password = $_SESSION['password'];
    $role = $_SESSION['role'];
}else{

}


