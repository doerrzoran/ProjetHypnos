<?php
// require_once "ConnectToDatabase.php";


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
            echo selectFromDatabase("User", "Mail", "'$mail'", $conn);
            // $sql = "SELECT* FROM User WHERE Mail = '$mail'";
            // $result = mysqli_query($conn, $sql);
            $VerificationMail = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
            echo selectFromDatabase("User", "Password", "'$password'", $conn);
            // $sql = "SELECT* FROM User WHERE Password ='$password'";
            // $result = mysqli_query($conn, $sql);
            $VerificationPassword = mysqli_fetch_all($result, MYSQLI_ASSOC);

            if($VerificationMail == 0){
                die('cette adresse email est déjà utilisée !');
            }elseif($VerificationPassword == 0){
                    die('ce mot de passe est déja utilisé !');
            }else{ 
                echo insertintoDatabase("User", "Name, Firstname, Mail,	Password, Role", "'$name', '$firstname', '$mail', '$password', 3", $conn);
                // $sql = "INSERT INTO User(Name, Firstname, Mail,	Password, Role) VALUES('$name', '$firstname', '$mail', '$password', 3)";
                // $result = mysqli_query($conn, $sql);
                if($result != 1){
                    die("inscription échouée !");
                }else{
                    require_once "Identification.php";
                }
            }   
        }
}
    
