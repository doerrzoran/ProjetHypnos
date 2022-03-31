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
        <form method="POST" action="PageClient.php" enctype="multipart/form-data">
	        <label>Nom:</label>
	        <input type="text" id="name" name="Name">
	        <label>Prénom:</label>
	        <input type="text" name="Firstname">
	        <label>Adresse Email:</label>
	        <input type="Email" name="email">
	        <label>mot de passe:</label>
	        <input type="text" name="Password">
	        <label>confirmation du mot de passe:</label>
	        <input type="text" name="Password2">
	        <button type="submit"> Creer un compte</button>
        </form>
    <nav>
    <?php
      require_once "CONSTANTS/footer.php";
    ?>  
</body>
</html>