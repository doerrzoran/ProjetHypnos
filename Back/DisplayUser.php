<?php

include_once 'ConnectToDatabase.php';

// write query

$sql = 'SELECT ID, Name, Firstname, Mail,	Password, Role FROM User';

//make query and get result

$result = mysqli_query($conn, $sql);

//fetch the resulting rows as an array

$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result from memory
mysqli_free_result($result);

//close connection
mysqli_close($conn);

//afficher le resultat
// print_r($users);

 foreach($users as $user){
   echo '</br>';
   echo ' ID: '.htmlspecialchars($user['ID']).'</br>';
   echo ' Nom: '.htmlspecialchars($user['Name']).'</br>';
   echo ' Prenom :'.htmlspecialchars($user['Firstname']).'</br>';
   echo ' email: '.htmlspecialchars($user['Mail']).'</br>';
   echo ' mot de passe: '.htmlspecialchars($user['Password']).'</br>';
   echo ' statut: '.htmlspecialchars($user['Role']).'</br>';
 }

 