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
  </div>
</html>