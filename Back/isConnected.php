<?php
    require_once 'UserID.php';
    
    if(isset($user)){
        echo 'Connecté en tant que '.$name.' '.$firstname.'</br>';
        ?><a href="../Back/UserRedirection.php">Consulter vos informations</a></br>
        <form methode="POST" action="../Back/Deconnexion.php" enctype="Multipart/form_data"><button>deconnexion</button></form><?php  
    }else{
        require_once "../Back/formConnexion.php";
        ?><a href="pageInscription.php">Creer un compte</a></br><?php  
    }

      

