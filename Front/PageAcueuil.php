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
    <form>
	    <label>Identifiant:</label>
	    <input type="text" name="id">
	    <label>Mot de passe:</label>
	    <input type="text" name="password">
	    <button type="submit"><a href="PageClient.php">Se connecter</a></button>
    </form>
    <a href="pageInscription.php">Creer un compte</a>
    <nav>
    <?php
      require_once "CONSTANTS/footer.php";
    ?>  
</body>
</html>