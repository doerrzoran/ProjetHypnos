<form method="POST" action="../back/scriptAddsuite.php" enctype="multipart/form-data">
    <label>Title</label>
    <input name="Title" type="text">
    <label>Description</label>
    <input name="Description" type="text">
    <label>Etablissement</label>
    <input name="Establissement" type="hidden" value ="<?= $establishmentID ?>">
    <label>Price</label>
    <input name="Price" type="int">
    <label>BookingLink</label>
    <input name="BookingLink" type="text">
    <label>MainPic</label>
    <input name="MainPic" type="text">
    <label>Gallery</label>
    <input name="Gallery" type="text">
    <button type="submit">enregistrer</button>
</form>