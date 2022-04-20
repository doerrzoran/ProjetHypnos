<form method="POST" action="../back/scriptModifyEstablishment.php"enctype="multipart/form-data">
    <label>nouveau gerant :</label>
    <input name="Manager" type="number">
    <input name="Establishment" type="hidden" value ="<?= $establishmentID ?>">
    <button type="submit">modifier</button>
</form>