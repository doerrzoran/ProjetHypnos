<?php


if(isset($_SESSION['message'])){
    ?><script src="../JS/confimationEnvoie.js"></script><?php
    unset($_SESSION['message']);
}else{
    
}

