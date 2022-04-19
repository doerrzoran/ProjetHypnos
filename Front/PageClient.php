<!DOCTYPE html>
<html> 
<head>
    <link rel="stylesheet" type="text/css" href="../Assets/css/Style.css">
	<title>Hypnos</title>
</head>
<body>
    <?php
      require_once "CONSTANTS/header.php";
    ?>
    <nav>
      <?php
        require_once '../Back/WelcomUser.php';
        require_once '../Back/UserBooking.php';
        
      ?>
      <p><a href="../Back/resetReservation.php">Reserver</a></br></p></br>
      <a href="pageMessage.php">Nous écrire</a></br>
      <a href="../Front/PageSuppression.php">supprimer votre compte</a></br>
      
    <nav>
    <?php
      require_once "CONSTANTS/footer.php";
    ?>  
</body>
</html>