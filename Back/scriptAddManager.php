<?php



class ScriptInscription{
    public string $name;
    public string $firstname;
    public string $mail;
    public string $password;
    public string $password2;

    public function __construct($name, $firstname, $mail, $password, $password2){
        $this->name = $name;
        $this->firstname = $firstname;
        $this->mail = $mail;
        $this->password = $password;
        $this->password2 = $password2;
    }

    public function createAccount($name, $firstname, $mail, $password, $password2){
        if($password != $password2){
            die("veuillez entrer un mot de passe identique!");
        }else{
            require_once "ConnectToDatabase.php";
            $verificationMail = selectFromDatabase('User', 'Mail', $mail, $conn);
            if($verificationMail != NULL){
                 die('cette adresse email est déjà utilisée !');
            }else{ 
                $result = insertintoDatabase( 'User', 'Name, Firstname, Mail, Password, Role', "'$name', '$firstname', '$mail', '$password', 2", $conn);
                if($result != 1){
                    die("le compte n'as pas pu être crée !");
                }else{
                    header('Location: ../Front/PageAdmin.php');
                }
            }   
        }
    }
}




$infoManager = $_POST;

if(!isset($infoManager['Name']) || !isset($infoManager['Firstname']) || !isset($infoManager['email']) || !isset($infoManager['Password']) || !isset($infoManager['Password2'])) {
    echo('');
  }else{ 
        $name = $infoManager['Name'];
        $firstname = $infoManager['Firstname'];
        $mail = $infoManager['email'];
        $password = $infoManager['Password'];
        $password2 = $infoManager['Password2'];
      
    $scriptInscription = new ScriptInscription($name, $firstname, $mail, $password, $password2);

      echo $scriptInscription->createAccount($name, $firstname, $mail, $password, $password2);

}
    
