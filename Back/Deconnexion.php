<?php
session_start();
session_destroy();
header('Location: ../Front/PageAcceuil.php');