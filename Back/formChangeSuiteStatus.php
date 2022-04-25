
<form method="POST" action="../Back/scriptChangeSuiteStatus.php" enctype="multipart/form-data">
    <input type="hidden" name ="id" value="<?php echo $suiteID ?>">
    <select name="isOccupied">
        <option value="0">Disponible</option>
        <option value="1">Indisponible</option>
    </select>
    <button type="submit">changer le status</button>
</form>

