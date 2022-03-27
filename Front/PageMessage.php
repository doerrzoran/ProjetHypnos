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
  	<label>Nom:</label>
  	<input type="text" name="Name">
  	<label>Prénom:</label>
  	<input type="text" name="Firstname">
  	<label>Adresse Email:</label>
  	<input type="Email" name="email">
  	<label>Sujet:</label>
  	<input type="list" name="object">
  	<label>écrivez votre message</label>
  	<input type="text" name="Name">
  	<button type="submit" dir="">Creer un compte</button>
  </form>
    <nav>
    <?php
      require_once "CONSTANTS/footer.php";
    ?>  
</body>
</html>