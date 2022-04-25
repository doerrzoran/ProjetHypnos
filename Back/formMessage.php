<?php
require_once 'UserID.php';



if(isset($_SESSION['id'])){
    $name = $_SESSION['name'];
    $firstname = $_SESSION['firstname'];
    $mail = $_SESSION['mail'];

    ?><form method='POST' action='../Back/scriptMessage.php' enctype='multipart/form-data'>
	   <div class="form-group">
         <label>Nom:</label>
         <input type='text' name='name' value='<?=  $name; ?>' disabled='disabled' />
         <label>Prénom:</label>
         <input type='text' name='firstname' value='<?=  $firstname; ?>' disabled='disabled' />
	   </div> 
		 <div class="form-group">
         <label>Adresse Email:</label>
  	     <input type="Email" name="mail" value='<?=  $mail; ?>' disabled='disabled'>
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
  	<input type="text" name="name">
  	<label>Prénom:</label>
  	<input type="text" name="firstname">
  	<label>Adresse Email:</label>
  	<input type="Email" name="mail">
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