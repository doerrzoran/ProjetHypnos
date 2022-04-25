<form method="POST" action="../Back/scriptInscription.php" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nom:</label>
        <input type="text" id="name" name="name">
        <label>Prénom:</label>
        <input type="text" name="firstname">
    </div>
    <div class="form-group">
        <label>Adresse Email:</label>
        <input type="Email" name="email">
    </div>
    <div class="form-group">
        <label>mot de passe:</label>
        <input type="text" name="password">
        <label>confirmation du mot de passe:</label>
        <input type="text" name="Password2">
    </div>
    <button type="submit" class="btn btn-primary">Creer un compte</button>
</form>