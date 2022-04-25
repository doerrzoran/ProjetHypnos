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
      
      <form method="POST" action="../Back/scriptEstablishment.php" enctype="multipart/form-data">
        <select name="establishment">
          <option value="1">Hotel Hypnos Paris</option>
          <option value="2">Hotel Hypnos Bordeaux</option>
          <option value="3">Hotel Hypnos Saint-Malo</option>
          <option value="4">Hotel Hypnos La Rochelle</option>
          <option value="5">Hotel Hypnos Nice</option>
          <option value="6">Hotel Hypnos Cherbourg</option>
          <option value="7">Hotel Hypnos Bayonne</option>
        </select>
        <button type='submit'>consulter</button>
      </form>
      
    <nav>
    <?php
      require_once "CONSTANTS/footer.php";
    ?>  
</body>
</div>
</html>