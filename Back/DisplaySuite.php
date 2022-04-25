<?php
require_once 'ConnectToDatabase.php';
require_once 'UserID.php';

if(isset($_SESSION['role']) && ($_SESSION['role'] == 2)){

  $manager = $_SESSION['id'];

  $establishments = selectFromDatabase('establishment', 'manager', $manager, $conn);
    $establishmentID = $establishment['0'];
    $establishmentName = $establishment['1'];
 


  echo '<h1>'.$establishmentName.'</h1>' ;
  
  $suites = selectAllFromDatabase('suite', 'establishment', $establishmentID, $conn);
  foreach($suites as $suite){
    $suiteID = $suite['0'];
    $suiteTitle = $suite['1'];
    $suitePrice = $suite['3'];
    $isOccupied = $suite['4'];
    $suiteBookingLink = $suite['5'];
    $suiteDescription = $suite['6'];
    

       echo '</br>';
       echo '<h3>'.$suiteTitle.'</br></h3>';
       if($isOccupied == 1){
         echo "Cette chambre est reservée</br>";
       }else{
         echo "Disponible</br>";
       }
       require '../Back/formChangeSuiteStatus.php';
       require '../Back/formModifySuite.php';   
       echo  '<a href="../www.booking.com">'.$suiteBookingLink.'</a></br>';
       echo $suiteDescription.'</br>';
       echo $suitePrice.' €'.'</br>';
     }
}else{
  
  $establishmentID = $_SESSION['EstablishmentID'];


$establishment = selectFromDatabase('establishment', 'id', $establishmentID, $conn);
    $establishmentID = $establishment['0'];
    $establishmentName = $establishment['3'];
    

echo '<h1>'.$establishmentName.'</h1>' ;

$suites = selectAllFromDatabase('suite', 'establishment', $establishmentID, $conn);
echo '4';

foreach($suites as $suite){
  echo '5';
  var_dump($suite);
    $suiteID = $suite['id'];
    $suiteTitle = $suite['title'];
    $suitePrice = $suite['price'];
    $isOccupied = $suite['isoccupied'];
    $suiteBookingLink = $suite['bookinglink'];
    $suiteDescription = $suite['description'];
    $suiteMainPic = $suite['mainpic'];
    $suiteGallery = $suite['gallery'];
    $suiteGallery2 = $suite['gallery2'];
    $suiteGallery3 = $suite['gallery3'];
  echo '6';
  echo '<div >
          <span>
             <h3>'.$suiteTitle.'</br></h3>
             <a href="http://www.booking.com">"'.$suiteBookingLink.'"</a></br>
             <p>"'.$suiteDescription.'"</p></br>
             <p>"'.$suitePrice.'"€</p></br>
           </span>
           <span>
               <img  class="img-responsive" src="'.$suiteMainPic.'" width="300" height="100">;
               <img class="d-inline"  class="img-responsive" src="'.$suiteGallery.'"  width="100" height="100">
               <img class="d-inline" class="img-responsive" src="'.$suiteGallery2.'"  width="100" height="100">
               <img class="d-inline" class="img-responsive"src="'.$suiteGallery3.'" width="100" height="100">
          </span></br>
        </div>';
        echo '7';
    
     if($isOccupied == 1){
      echo '8';
       echo "Cette chambre est reservée</br>";
     }else{
      echo '9';
       echo "Disponible</br>";
       ?><form method="POST" action="../Back/scriptSuite.php" enctype="multipart/form-data">
         <input type="hidden" name="suite" value="<?= $suiteTitle ?>">
         <input type="hidden" name="establishment" value="<?= $establishmentName ?>">
       <input type="submit" value="reserver cette suite"></form> <?php
     }  
    
   }
}
  
