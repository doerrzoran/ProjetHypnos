<!DOCTYPE html>
<html> 
<head>
    <link rel="stylesheet" type="text/css" href="../Assets/css/Style.css">
	<title>Hypnos</title>
</head>
<body>
    <?php
      require_once "CONSTANTS/header.php";
    ?>
    <nav>
    <?php
      require_once "../back/isConnected.php";
      require_once "../Back/messageEnvoye.php";
    ?>
    <a href="../Back/resetReservation.php">Reserver</a></br>
    <a href="pageMessage.php">Nous écrire</a></br>
    <?php
      require_once "ListeEtablissement.php";
     ?> 
    <nav>
    <?php
      require_once "CONSTANTS/footer.php";
    ?>  
</body>
</html>