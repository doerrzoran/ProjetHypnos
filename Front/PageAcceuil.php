<!DOCTYPE html>
<html> 
<head>
    <link rel="stylesheet" type="text/css" href="../Assets/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hypnos</title>
</head>
<div class="container-fluid">
  <body class="bg-warning">
      <?php
      echo 'Bonjour';
        require_once "CONSTANTS/header.php";
      ?>
      <nav>
      <?php
        require_once "../Back/isConnected.php";
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
</div>
</html>