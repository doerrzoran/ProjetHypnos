<h2>supprimer un utilisateur</h2>
<form method="POST" action="../Back/scriptDeleteUser.php" enctype="multipart/form-data">
    <div class="form-group">
	    <label>Identifiant:</label>
	    <input type="text" name="Mail">
	    <label>Mot de passe:</label>
	    <input type="text" name="password">
	</div>
    <button type="submit" class="btn btn-primary">suppression du compte</button>
</form>