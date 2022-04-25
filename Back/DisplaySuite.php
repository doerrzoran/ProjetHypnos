<?php
require_once 'ConnectToDatabase.php';
require_once 'UserID.php';

if(isset($_SESSION['role']) && ($_SESSION['role'] == 2)){

  $manager = $_SESSION['id'];

  $establishments = selectFromDatabase('establishment', 'manager', $manager, $conn);

  foreach($establishments as $establishment){
    $establishmentID = $establishment['id'];
    $establishmentName = $establishment['name'];
  }


  echo '<h1>'.$establishmentName.'</h1>' ;
  
  $suites = selectFromDatabase('suite', 'establishment', $establishmentID, $conn);
  foreach($suites as $suite){
    $suiteID = $suite['id'];
    $suiteTitle = $suite['title'];
  
       echo '</br>';
       echo '<h3>'.htmlspecialchars($suite['title']).'</br></h3>';
       $isOccupied = $suite['IsOccupied'];
       if($isOccupied == 1){
         echo "Cette chambre est reservée</br>";
       }else{
         echo "Disponible</br>";
       }
       require '../Back/formChangeSuiteStatus.php';
       require '../Back/formModifySuite.php';   
       echo  '<a href="../www.booking.com">'.htmlspecialchars($suite['BookingLink']).'</a></br>';
       echo $suite['description'].'</br>';
       echo $suite['MainPic'].'</br>';
       echo $suite['gallery'].'</br>';
       echo $suite['price'].' €'.'</br>';
     }
}else{

  $establishmentID = $_SESSION['EstablishmentID'];

$establishments = selectFromDatabase('establishment', '*', $establishmentID, $conn);


foreach($establishments as $establishment){
  $establishmentName = $establishment['name'];
  
}


echo '<h1>'.$establishmentName.'</h1>' ;

$suites = selectFromDatabase('suite', '*', $establishmentID, $conn);


foreach($suites as $suite){
  $suiteID = $suite['id'];
  $suiteTitle = $suite['title'];

  echo '<div >
          <span >
             <h3>"'.$suite['title'].'"</br></h3>
             <a href="http://www.booking.com">"'.$suite['BookingLink'].'"</a></br>
             <p>"'.$suite['description'].'"</p></br>
             <p>"'.$suite['price'].'"€</p></br>
           </span>
           <span>
               <img  class="img-responsive" src="'.$suite['MainPic'].'" width="300" height="100">;
               <img class="d-inline"  class="img-responsive" src="'.$suite['gallery'].'"  width="100" height="100">
               <img class="d-inline" class="img-responsive" src="'.$suite['gallery2'].'"  width="100" height="100">
               <img class="d-inline" class="img-responsive"src="'.$suite['gallery3'].'" width="100" height="100">
          </span></br>
        </div>';

      $isOccupied = $suite['IsOccupied'];
     if($isOccupied == 1){
       echo "Cette chambre est reservée</br>";
     }else{
       echo "Disponible</br>";
       ?><form method="POST" action="../Back/scriptSuite.php" enctype="multipart/form-data">
         <input type="hidden" name="suite" value="<?= $suiteTitle ?>">
         <input type="hidden" name="establishment" value="<?= $establishmentName ?>">
       <input type="submit" value="reserver cette suite"></form> <?php
     }  
    
   }
}
  
