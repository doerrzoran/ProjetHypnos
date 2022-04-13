<?php
require_once 'ConnectToDatabase.php';
require_once 'UserID.php';

if(isset($_SESSION['Role']) && ($_SESSION['Role'] == 2)){

  $Manager = $_SESSION['ID'];

  $establishments = selectFromDatabase('Establishment', 'Manager', $Manager, $conn);

  foreach($establishments as $establishment){
    $establishmentID = $establishment['ID'];
    $establishmentName = $establishment['Name'];
  }


  echo '<h1>'.$establishmentName.'</h1>' ;
  
  $suites = selectFromDatabase('Suite', 'Establishment', $establishmentID, $conn);
  foreach($suites as $suite){
    $suiteID = $suite['ID'];
    $suiteTitle = $suite['Title'];
  
       echo '</br>';
       echo '<h3>'.htmlspecialchars($suite['Title']).'</br></h3>';
       $isOccupied = $suite['IsOccupied'];
       if($isOccupied == 1){
         echo "Cette chambre est reservée</br>";
       }else{
         echo "Disponible</br>";
       }
       require_once '../back/formChangeSuiteStatus.php';
       echo  '<a href="../www.booking.com">'.htmlspecialchars($suite['BookingLink']).'</a></br>';
       echo $suite['Description'].'</br>';
       echo $suite['MainPic'].'</br>';
       echo $suite['Gallery'].'</br>';
       echo $suite['Price'].' €'.'</br>';
     }
}else{

  $establishmentID = $_SESSION['EstablishmentID'];

$establishments = selectFromDatabase('Establishment', 'ID', $establishmentID, $conn);


foreach($establishments as $establishment){
  $establishmentName = $establishment['Name'];
  
}


echo '<h1>'.$establishmentName.'</h1>' ;

$suites = selectFromDatabase('Suite', 'Establishment', $establishmentID, $conn);


foreach($suites as $suite){
  $suiteID = $suite['ID'];
  $suiteTitle = $suite['Title'];

     echo '</br>';
     echo '<h3>'.htmlspecialchars($suite['Title']).'</br></h3>';
     $isOccupied = $suite['IsOccupied'];
     if($isOccupied == 1){
       echo "Cette chambre est reservée</br>";
     }else{
       echo "Disponible</br>";
       ?><form method="POST" action="../Back/scriptSuite.php" enctype="multipart/form-data">
         <input type="hidden" name="Suite" value="<?= $suiteTitle ?>">
         <input type="hidden" name="Establishment" value="<?= $establishmentName ?>">
       <input type="submit" value="reserver cette suite"></form> <?php
     }
     
     echo'<a href="http://www.booking.com">'.htmlspecialchars($suite['BookingLink']).'</a></br>';
     echo $suite['Description'].'</br>';
     echo '<img src="'.$suite['MainPic'].'">';
     echo $suite['Gallery'].'</br>';
     echo $suite['Price'].' €'.'</br>';
   }
}
  