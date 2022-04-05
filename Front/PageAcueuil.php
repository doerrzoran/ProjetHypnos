<!DOCTYPE html>
<html> 
<head>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
	<title>Hypnos</title>
</head>
<body>
    <?php
      require_once "CONSTANTS/header.php";
    ?>
    <nav>
    <?php
      require_once "../back/formConnexion.php";
    ?>
  

    <a href="pageInscription.php">Creer un compte</a></br>
    <a href="pageReservation.php">Reserver</a></br>
    
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