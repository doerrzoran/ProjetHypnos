<!DOCTYPE html>
<html> 
<head>
    <link rel="stylesheet" type="date/css" href="CSS/style.css">
	<title>Hypnos</title>
</head>
<body>
    <?php
      require_once "CONSTANTS/header.php";
    ?>
    <nav>
        <form method="POST" action="../Back/scriptReservation.php" enctype="multipart/form-data">
          <label>veuillez choisir un établissement :</label>
            <select name="establishment">
              <option value="1">Paris</option>
              <option value="2">Bordeaux</option>
              <option value="3">Saint-Malo</option>
              <option value="4">La rochelle</option>
              <option value="5">Nice</option>
              <option value="6">Cherbourg</option>
              <option value="7">Bayonne</option>
            </select>
          <label>veuillez choisir une suite :</label>
          <select name="suite">
              <option value="224">Titre1</option>
              <option value="225">Titre2</option>
              <option value="226">Titre3</option>
              <option value="227">Titre4</option>
              <option value="228">Titre5</option>
              <option value="229">Titre6</option>
              <option value="230">Titre7</option>
              <option value="231">Titre8</option>
              <option value="232">Titre9</option>
              <option value="233">Titre10</option>
            </select>
          <label>date d'arrivé :</label><input type="date" name="startDate">
          <label>date de départ :</label><input type="date" name="endDate">
          <button type="submit">reserver</button>
        </form>
    <nav>
    <?php
      require_once "CONSTANTS/footer.php";
    ?>  
</body>
</html>