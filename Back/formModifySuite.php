<form method="POST" action="../Back/scriptModifySuite.php"enctype="multipart/form-data">
    <label>Title</label>
    <input name="ID" type="hidden" value ="<?= $suiteID ?>">
    <input name="Title" type="text">
    <label>Description</label>
    <input name="Description" type="text">
    <label>Etablissement</label>
    <label>Price</label>
    <input name="Price" type="int">
    <label>MainPic</label>
    <input name="MainPic" type="text">
    <label>Gallery</label>
    <input name="Gallery" type="text">
    <button type="submit">modifier</button>
</form>