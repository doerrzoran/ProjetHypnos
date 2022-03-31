<?php
require_once 'scriptConnexion.php';
require_once 'scriptConnexion.php';

// function userData(){
     foreach($users as $user){
         $userID = $user['ID'];
         $userName = $user['Name'];
         $userFirstname = $user['Firstname'];
         $userMail = $user['Mail'];
         $userPassword = $user['Password'];
         $userRole = $user['Role'];
    }
// }

// echo userData();

