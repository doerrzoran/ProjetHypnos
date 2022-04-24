
<?php
session_start();

?><p></p><form method='POST' action='../Back/scriptReservation.php' enctype='multipart/form-data'>
  
<?php
if(isset($_SESSION['Suite'])){
    $suite = $_SESSION['Suite'];
    $establishment = $_SESSION['Establishment'];
    
    
?>
    
         <label>veuillez choisir un établissement :</label>
         <input type='select' name='establishment' value='<?=  $establishment; ?>' disabled='disabled' />
         <label>veuillez choisir une suite :</label>
         <input type='select' name='suite' value='<?=  $suite; ?>' disabled='disabled' />
         
<?php

}else{


  require ($_SERVER['DOCUMENT_ROOT']."/Back/ConnectToDatabase.php");
  $result = getEstablishmentAndSuite($conn);

  $establishmentArr = [];
  
  foreach($result as $row){
    if(in_array($row['Name'], $establishmentArr)){
    }else{
      $establishmentArr[$row['ID']] = $row['Name'];
    }
  }

  

?>
         <label>veuillez choisir un établissement :</label>
           <select name='establishment' id='establishmentID' onchange="callPHP('data='+getOptionVal())">
            <?php
              foreach($establishmentArr as $optionVal => $optionName){
                echo("<option value='".$optionVal."'>".$optionName."</option>");
              }
            ?>
           </select>

         <label>veuillez choisir une suite :</label>

          <select name='suite' id='suiteID'>
          </select>

        <script>
          callPHP('data='+getOptionVal())

          function getOptionVal() {
            var select = document.getElementById('establishmentID');
            var value = select.options[select.selectedIndex].value;
            return value;
          }

          var param = getOptionVal();

          function callPHP(params) {
              var httpc = new XMLHttpRequest();
              var url = "../Back/CreateSuiteForm.php";
              httpc.open("POST", url, true);
              httpc.setRequestHeader("Content-type","application/x-www-form-urlencoded");
              httpc.responseType = 'json';

              httpc.onreadystatechange = function() {
                  if(httpc.readyState == 4 && httpc.status == 200) {
                      creatOptionSuite(this.response);
                  }
              };
              httpc.send(params);
          }

          function creatOptionSuite(jsonResp) {
            var selectSuite = document.getElementById('suiteID');
            while (selectSuite.firstChild) {
              selectSuite.removeChild(selectSuite.firstChild);
            }
            var jsonKeys = Object.keys(jsonResp);
            jsonKeys.forEach(element => createOptionElem(element, jsonResp, selectSuite));
          }

          function createOptionElem(key, json, parent) {
            var option = document.createElement("option");
            option.text = json[key];
            option.value = key;
            parent.appendChild(option);
          }

        </script>
<?php
         
}

$minDate = date('Y-m-d');
?>

   <label>date d'arrivé :</label>
   <input type='date' name='startDate' min="<?= $minDate ?>">
   <label>date de départ :</label>
   <input type='date' name='endDate'>
   <button type='submit'>reserver</button>
 </form>