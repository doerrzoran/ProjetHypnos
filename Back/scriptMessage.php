<?php
require_once 'ConnectToDatabase.php';

$messageInfo = $_POST;

if(!isset($messageInfo)){
    
}else{
    $senderName = $messageInfo["Name"];
    echo $senderName.'</br>';
    $senderFirstname = $messageInfo["Firstname"];
    echo $senderFirstname.'</br>';
    $senderMail = $messageInfo["Mail"];
    echo $senderMail.'</br>';
    $subject = $messageInfo["Subject"];
    echo $subject.'</br>';
    $messageBody = $messageInfo["MessageBody"];
    echo $messageBody.'</br>';

    $sql = "SELECT * FROM User Where( Role = 1)"; //changer pour ne récupéré qu'un seul admin si il y en a plusieurs
    $result = mysqli_query($conn, $sql);
    $recepients = mysqli_fetch_all($result, MYSQLI_ASSOC);
    foreach($recepients as $recepient){
        $recepientID = $recepient['ID'];
        $destination = $recepient['Mail'];
    }

    $sql = "SELECT * FROM SubjectMessage_Ref WHERE(ID = '$subject')";
        $result = mysqli_query($conn, $sql);
        $labels = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach($labels as $label){
            $subjectID = $label['ID'];
            $subject = $label['Label'];
        }


    $sql = "INSERT INTO Message(Name, Firstname, mail, MessageBody, Recipient, Subject) VALUES('$senderName', '$senderFirstname', '$senderMail', '$messageBody', '$recepientID',  '$subjectID')";
    $result = mysqli_query($conn, $sql);

    

    if($result == 0){
       die('message non enregistré !</br>');
    }else{
        $returnMail = mail($destination, $subject, $messageBody);
        if($returnMail === false){
            echo 'Erreur d\'envoie</br>';
        }else{ 
            echo 'message envoyé !</br>';
        }
    }
}