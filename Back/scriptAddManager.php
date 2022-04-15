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
                 exit('cette adresse email est déjà utilisée !');
            
            }else{ 
                $result = insertintoDatabase( 'User', 'Name, Firstname, Mail, Password, Role', "'$name', '$firstname', '$mail', '$password', 3", $conn);
                if($result != 1){
                    die("inscription échouée !");
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


    

    // if($password != $password2){
    //     die("veuillez entrer un mot de passe identique!");
    // }else{
    //     $sql = "SELECT* FROM User WHERE Mail = '$mail'";
    //     $result = mysqli_query($conn, $sql);
    //     $verificationMail = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //     $sql = "SELECT* FROM User WHERE Password ='$password'";
    //     $result = mysqli_query($conn, $sql);
    //     $verificationPassword = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //     if($verificationMail == 0){
    //         die('cette adresse email est déjà utilisée !');
    //     }elseif($verificationPassword == 0){
    //             die('ce mot de passe est déja utilisé !');
    //     }else{ 
    //         $sql = "INSERT INTO User(Name, Firstname, Mail,	Password, Role) VALUES('$name', '$firstname', '$mail', '$password', 3)";
    //         $result = mysqli_query($conn, $sql);
    //         if($result != 1){
    //             die("inscription échouée !");
    //         }else{
    //             require_once "Identification.php";
    //         }
    //     }   
    // }
}
    
