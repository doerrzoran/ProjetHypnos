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
   <form method="POST" action="../Back/scriptMessage.php" enctype="multipart/form-data">
  	<label>Nom:</label>
  	<input type="text" name="Name">
  	<label>Prénom:</label>
  	<input type="text" name="Firstname">
  	<label>Adresse Email:</label>
  	<input type="Email" name="Mail">
  	<label>Sujet:</label>
  	<select name="Subject">
		<option value="1">Je souhaite poser une reclamation</option>
		<option value="2">Je souhaite commander un service supplémentaire</option>
		<option value="3">Je souhaite en savoir plus sur une suite</option>
		<option value="4">J'ai un soucis avec cette application</option>
	</select>
  	<label>écrivez votre message</label>
  	<input type="text" name="MessageBody">
  	<button type="submit">Envoyer</button>
  </form>
    <nav>
    <?php
      require_once "CONSTANTS/footer.php";
    ?>  
</body>
</html>