<h2>ajouter un gérant</h2>
<form method="POST" action="../Back/scriptAddManager.php" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nom:</label>
        <input type="text" id="name" name="Name">
        <label>Prénom:</label>
        <input type="text" name="Firstname">
    </div>
    <div class="form-group">
        <label>Adresse Email:</label>
        <input type="Email" name="email">
    </div>
    <div class="form-group">
        <label>mot de passe:</label>
        <input type="text" name="Password">
        <label>confirmation du mot de passe:</label>
        <input type="text" name="Password2">
    </div>
    <button type="submit">enregistrer</button>
</form>