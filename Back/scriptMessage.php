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

    $sql = "SELECT ID FROM User Where( Role = 1)";
    $result = mysqli_query($conn, $sql);
    $recepients = mysqli_fetch_all($result, MYSQLI_ASSOC);
    foreach($recepients as $recepient){
        $recepientID = $recepient['ID'];
    }

    $sql = "SELECT* FROM SubjectMessage_Ref WHERE(ID = '$subject')";
        $result = mysqli_query($conn, $sql);
        $labels = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach($labels as $label){
            $subject = $label['ID'];
        }


    $sql = "INSERT INTO Message(Name, Firstname, mail, MessageBody, Recipient, Subject) VALUES('$senderName', '$senderFirstname', '$senderMail', '$messageBody', '$recepientID',  '$subject')";
    $result = mysqli_query($conn, $sql);

    

    if($result == 0){
       die('message non enregistré !</br>');
    }else{
        $sql = "SELECT Mail FROM User Where( Role = 1)";
        $result = mysqli_query($conn, $sql);
        $adminMails = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach($adminMails as $adminMail){
            $destination = $adminMail['Mail'];
            // ini_set(sendmail_from, 'doerrzoran@gmail.com');
            mail($destination, $subject, $messageBody);
            // ini_restore(sendmail_from); 
            if(mail($destination, $subject, $messageBody) == NULL){
                echo 'Erreur d\'envoie</br>';
            }else{ 
                echo 'message envoyé !</br>';
            }
        }
    
    }





}