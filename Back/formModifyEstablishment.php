<form method="POST" action="../Back/scriptModifyEstablishment.php"enctype="multipart/form-data">
    <label>nouveau gerant :</label>
    <input name="manager" type="number">
    <input name="establishment" type="hidden" value ="<?= $establishmentID ?>">
    <button type="submit">modifier</button>
</form>