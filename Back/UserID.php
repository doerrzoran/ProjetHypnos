<?php
echo 'la</br>';

session_start();
if(isset($_SESSION['id'])){
    $user = $_SESSION['id'];
    $name = $_SESSION['nme'];
    $firstname = $_SESSION['firstname'];
    $mail = $_SESSION['mail'];
    $password = $_SESSION['password'];
    $role = $_SESSION['role'];
}else{

}


