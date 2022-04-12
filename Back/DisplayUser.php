<?php

include_once 'ConnectToDatabase.php';

// write query

$users = 
$sql = 'SELECT ID, Name, Firstname, Mail,	Password, Role FROM User';
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);


 foreach($users as $user){
   echo '</br>';
   echo ' ID: '.htmlspecialchars($user['ID']).'</br>';
   echo ' Nom: '.htmlspecialchars($user['Name']).'</br>';
   echo ' Prenom :'.htmlspecialchars($user['Firstname']).'</br>';
   echo ' email: '.htmlspecialchars($user['Mail']).'</br>';
   echo ' mot de passe: '.htmlspecialchars($user['Password']).'</br>';
   echo ' statut: '.htmlspecialchars($user['Role']).'</br>';
 }

 