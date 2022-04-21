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
        require_once "CONSTANTS/header.php";
      ?>
      <nav>
      <?php
        require_once ($_SERVER['DOCUMENT_ROOT']."/Back/isConnected.php");
      ?>
      <a href="../Back/ResetReservation.php">Reserver</a></br>
      <a href="PageMessage.php">Nous écrire</a></br>
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