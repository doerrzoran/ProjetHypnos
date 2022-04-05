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
    <form method="POST" action="../Back/scriptConnexion.php", enctype="multipart/form-data">
	    <label>Identifiant:</label>
	    <input type="text" name="Mail">
	    <label>Mot de passe:</label>
	    <input type="text" name="password">
	    <button type="submit"> Se connecter</button>
    </form>

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