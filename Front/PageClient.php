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
      <?php
        require_once '../Back/WelcomUser.php';
        require_once '../Back/UserBooking.php';
      ?>
      <p><a href="pageReservation.php">Reserver</a></p></br>
      <a href="pageMessage.php">Nous écrire</a></br>
    <nav>
    <?php
      require_once "CONSTANTS/footer.php";
    ?>  
</body>
</html>