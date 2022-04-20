<?php
require_once 'userID.php';



if(isset($_SESSION['ID'])){
    $name = $_SESSION['Name'];
    $firstname = $_SESSION['Firstname'];
    $mail = $_SESSION['Mail'];

    ?><form method='POST' action='../Back/scriptMessage.php' enctype='multipart/form-data'>
	   <div class="form-group">
         <label>Nom:</label>
         <input type='text' name='Name' value='<?=  $name; ?>' disabled='disabled' />
         <label>Prénom:</label>
         <input type='text' name='Firstname' value='<?=  $firstname; ?>' disabled='disabled' />
	   </div> 
		 <div class="form-group">
         <label>Adresse Email:</label>
  	     <input type="Email" name="Mail" value='<?=  $mail; ?>' disabled='disabled'>
	   </div>
	   <div class="form-group"> 
         <label>Sujet:</label>
  	    <select name="Subject">
	    	<option value="1">Je souhaite poser une reclamation</option>
	    	<option value="2">Je souhaite commander un service supplémentaire</option>
	    	<option value="3">Je souhaite en savoir plus sur une suite</option>
	    	<option value="4">J'ai un soucis avec cette application</option>
	    </select>
  	    <label>écrivez votre message</label>
  	    <input type="text" name="MessageBody">
	  </div>  
  	    <button type="submit">Envoyer</button>
        </form><?php



}else{
    ?>
   <form method="POST" action="../Back/scriptMessage.php" enctype="multipart/form-data">
  	<label>Nom:</label>
  	<input type="text" name="Name">
  	<label>Prénom:</label>
  	<input type="text" name="Firstname">
  	<label>Adresse Email:</label>
  	<input type="Email" name="Mail">
  	<label>Sujet:</label>
  	<select name="Subject">
		<option value="1">Je souhaite poser une reclamation</option>
		<option value="2">Je souhaite commander un service supplémentaire</option>
		<option value="3">Je souhaite en savoir plus sur une suite</option>
		<option value="4">J'ai un soucis avec cette application</option>
	</select>
  	<label>écrivez votre message</label>
  	<input type="text" name="MessageBody">
  	<button type="submit">Envoyer</button>
  </form>
    <?php
}