<?php
 session_start();
 unset($_SESSION['suite'], $_SESSION['establishment']);
 header('Location: ../Front/PageReservation.php');