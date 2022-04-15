
<?php
require_once "../Back/BookingData.php";

    $bookingID = $booking['ID'];
    echo $bookingID;
      ?><form method='POST' action='../Back/scriptDeleteReservation.php' enctype='multipart/form-data'>
         <input type="hidden" value="<?= $bookingID ?>">
         <button type='submit'>Annuler la reservation</button>
    </form>