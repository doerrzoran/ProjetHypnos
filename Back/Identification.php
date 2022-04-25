<?php
echo '3';
require_once "ConnectToDatabase.php";
$user = selectFromDatabase('user_hypnos', 'mail', $mail, $conn);
if($user == NULL){

}else{
    var_dump($user);
    print_r($user);
    echo '4';
    session_start();
    $_SESSION['id'] = $user['0'];
    $_SESSION['name'] = $user['1'];
    $_SESSION['firstname'] = $user['2'];
    $_SESSION['mail'] = $user['3'];
    $_SESSION['password'] = $user['4'];
    $_SESSION['role'] = $user['5'];
    echo '5';
    require_once 'UserRedirection.php';
}