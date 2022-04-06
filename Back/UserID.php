<?php


session_start();
if(isset($_SESSION['ID'])){
    $user = $_SESSION['ID'];
    $name = $_SESSION['Name'];
    $firstname = $_SESSION['Firstname'];
    $mail = $_SESSION['Mail'];
    $password = $_SESSION['Password'];
    $role = $_SESSION['Role'];
}else{

}


