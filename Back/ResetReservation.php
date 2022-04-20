<?php
 session_start();
 unset($_SESSION['Suite'], $_SESSION['Establishment']);
 header('Location: ../Front/pageReservation.php');