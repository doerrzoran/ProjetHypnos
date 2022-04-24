<?php


session_start();
if(isset($_SESSION['id'])){
    $user = $_SESSION['id'];
    echo $user;
    $name = $_SESSION['nme'];
    $firstname = $_SESSION['firstname'];
    $mail = $_SESSION['mail'];
    $password = $_SESSION['password'];
    $role = $_SESSION['role'];
    echo $role;
}else{

}


