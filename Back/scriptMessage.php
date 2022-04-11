<?php
require_once 'ConnectToDatabase.php';

$messageInfo = $_POST;

if(!isset($messageInfo)){
    
}else{
    $senderName = $messageInfo["Name"];
    $senderFirstname = $messageInfo["Firstname"];
    $senderMail = $messageInfo["Mail"];
    $subject = $messageInfo["Subject"];
    $messageBody = $messageInfo["MessageBody"];

    $recepients = selectFromDatabase('User', 'ID', 1152, $conn);
    // $sql = "SELECT * FROM User Where( Role = 1)"; //changer pour ne récupéré qu'un seul admin si il y en a plusieurs
    // $result = mysqli_query($conn, $sql);
    // $recepients = mysqli_fetch_all($result, MYSQLI_ASSOC);
    foreach($recepients as $recepient){
        $recepientID = $recepient['ID'];
        $destination = $recepient['Mail'];
    }

    $labels = selectFromDatabase('SubjectMessage_Ref', 'ID', $subject, $conn);
    // $sql = "SELECT * FROM SubjectMessage_Ref WHERE(ID = '$subject')";
    //     $result = mysqli_query($conn, $sql);
    //     $labels = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach($labels as $label){
            $subjectID = $label['ID'];
            $subject = $label['Label'];
        }


    $result = insertintoDatabase('Message', 'Name, Firstname, mail, MessageBody, Recipient, Subject', "'$senderName', '$senderFirstname', '$senderMail', '$messageBody', '$recepientID',  '$subjectID'", $conn);
    //     $sql = "INSERT INTO Message(Name, Firstname, mail, MessageBody, Recipient, Subject) VALUES('$senderName', '$senderFirstname', '$senderMail', '$messageBody', '$recepientID',  '$subjectID')";
    // $result = mysqli_query($conn, $sql);

    if($result == 0){
       die('message non enregistré !</br>');
    }else{
        
        $headers = "Content-Type: text/plain; charset=utf-8\r\n";
        $headers .= "From: hypnos2222222@gmail.com\r\n";
        $message = mail($destination, $subject, $messageBody, $headers); 
        if($message){
            session_start();
            $_SESSION['message'] = $message;
            header('Location: ../Front/PageAcceuil.php');
        } else {
            echo("Erreur !");
        }
    }
}