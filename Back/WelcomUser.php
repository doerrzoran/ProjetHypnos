<?php

session_start();

    if(isset($_SESSION['userFirstname'])){
        echo 'Bonjour '.$_SESSION['userFirstname'].'</br>';
    }

      

