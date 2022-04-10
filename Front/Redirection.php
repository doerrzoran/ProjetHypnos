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
      <h2>veuillez-vous identifier ou creer un compte</h2>
    <?php
      require_once "../Back/formConnexion.php";
    ?>
    <a href="pageInscription.php">Creer un compte</a></br>
    <nav>
    <?php
      require_once "CONSTANTS/footer.php";
    ?>  
</body>
</html>