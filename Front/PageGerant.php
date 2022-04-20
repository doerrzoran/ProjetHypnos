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
      require_once '../Back/WelcomUser.php';
      require_once '../Back/DisplaySuite.php';
      require_once '../Back/formSuite.php';
      require_once '../Back/formDeleteSuite.php';
    ?>
    <nav>
    <?php
      require_once "CONSTANTS/footer.php";
    ?>  
</body>
</div>
</html>