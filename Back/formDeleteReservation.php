
<?php

  if(date('d/m/Y') >= date($bookingSD, strtotime('-3 days'))){
      
  }else{
        
      ?>
      <form method="POST" action="../Back/scriptDeleteReservation.php" enctype="multipart/form-data">
         <input name="ID" type="hidden" value="<?= $bookingID ?>">
         <button>Annuler la reservation</button>
    </form>
 <?php
}    