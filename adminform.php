<?php
session_start();
include_once 'login.php';
include_once 'config.php';
include_once 'functions.php';

 $_SESSION['userIsAdmin'] = 1; 
 
?>
<head>

  <meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="styleAdmin.css">
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
  </script>
  
  
  
  
  
  <script>
  
   function adminLogOut()  {
       <?php $_SESSION['userIsAdmin'] = 0; ?>
       window.location.href = "Index.php";
   }
  
  
  
  function adminform2Direct() {
   window.location.href = "adminform2.php";
  }
   
   

    document.getElementById("koti").addEventListener("change", checkHomeTeam());
    document.getElementById("vieras").addEventListener("change", checkAwayTeam());
   


function checkHomeTeam() {
   
    var i;
 
    var select = document.getElementById("vieras");
    var length = select.options.length;
        for (i = 0; i < length; i++) {
         select.options[i].disabled = false;
}


    var homeTeam = document.getElementById("koti");
    var awayTeam = document.getElementById("vieras");
    var homeTeamValue = document.getElementById("koti").value;
    var awayTeamValue = document.getElementById("vieras").value;

   awayTeam.options[homeTeamValue].disabled = true;


}


function checkAwayTeam() {
    var i;

    var select = document.getElementById("koti");
    var length = select.options.length;
        for (i = 0; i < length; i++) {
         select.options[i].disabled = false;
}


    var homeTeam = document.getElementById("koti");
    var awayTeam = document.getElementById("vieras");
    var homeTeamValue = document.getElementById("koti").value;
    var awayTeamValue = document.getElementById("vieras").value;

   homeTeam.options[awayTeamValue].disabled = true;


}


   
  </script>
  
 
  
</head>
<body background="football1.jpg">
<button onclick="adminLogOut()" class="btn btn-primary" id="logOutButton" name="logOutForm"> Kirjaudu Ulos</button>
<form method="POST">
<div class="formBox" id="adminForm1">
    <label>Valitse koti ja vierasjoukkue</label>

    <br>
    <br>
        <label>Peli ID</label>
        <br>
         <select>
         <option value="peliID" disabled selected="selected" name="peliID"><?php echo $gameID; ?></option>
         </select>
         <br>
         <br>
     <!-- Kotijoukkueen valina -->

  <div class="form-group addFormItem">
      <label>Valitse Kotijoukkue</label>
      <br>
   <select name="kotijoukkue" id="koti" onchange="checkHomeTeam()">
       <option value="Joukkuevalinta" disabled selected="selected">Valitse Joukkue</option>
        <option id="homeTeam1" value="1"><?php echo databaseQuery('Joukkueet','Nimi','1')?></option>
  <option id="homeTeam2" value="2"><?php echo databaseQuery('Joukkueet','Nimi','2')?></option>
  <option id="homeTeam3" value="3"><?php echo databaseQuery('Joukkueet','Nimi','3')?></option>
  <option id="homeTeam4" value="4"><?php echo databaseQuery('Joukkueet','Nimi','4')?></option>
  <option id="homeTeam5" value="5"><?php echo databaseQuery('Joukkueet','Nimi','5')?></option>
  <option id="homeTeam6" value="6"><?php echo databaseQuery('Joukkueet','Nimi','6')?></option>
  <option id="homeTeam7" value="7"><?php echo databaseQuery('Joukkueet','Nimi','7')?></option>
  <option id="homeTeam8" value="8"><?php echo databaseQuery('Joukkueet','Nimi','8')?></option>
  <option id="homeTeam9" value="9"><?php echo databaseQuery('Joukkueet','Nimi','9')?></option>
  <option id="homeTeam10" value="10"><?php echo databaseQuery('Joukkueet','Nimi','10')?></option>
  <option id="homeTeam11" value="11"><?php echo databaseQuery('Joukkueet','Nimi','11')?></option>
  <option id="homeTeam12" value="12"><?php echo databaseQuery('Joukkueet','Nimi','12')?></option>
  <option id="homeTeam13" value="13"><?php echo databaseQuery('Joukkueet','Nimi','13')?></option>
  <option id="homeTeam14" value="14"><?php echo databaseQuery('Joukkueet','Nimi','14')?></option>
  <option id="homeTeam15" value="15"><?php echo databaseQuery('Joukkueet','Nimi','15')?></option>
  <option id="homeTeam16" value="16"><?php echo databaseQuery('Joukkueet','Nimi','16')?></option>
  <option id="homeTeam17" value="17"><?php echo databaseQuery('Joukkueet','Nimi','17')?></option>
  <option id="homeTeam18" value="18"><?php echo databaseQuery('Joukkueet','Nimi','18')?></option>
  <option id="homeTeam19" value="19"><?php echo databaseQuery('Joukkueet','Nimi','19')?></option>
  <option id="homeTeam20" value="20"><?php echo databaseQuery('Joukkueet','Nimi','20')?></option>
  <option id="homeTeam21" value="21"><?php echo databaseQuery('Joukkueet','Nimi','21')?></option>
  <option id="homeTeam22" value="22"><?php echo databaseQuery('Joukkueet','Nimi','22')?></option>
  <option id="homeTeam23" value="23"><?php echo databaseQuery('Joukkueet','Nimi','23')?></option>
  <option id="homeTeam24" value="24"><?php echo databaseQuery('Joukkueet','Nimi','24')?></option>
  <option id="homeTeam25" value="25"><?php echo databaseQuery('Joukkueet','Nimi','25')?></option>
  <option id="homeTeam26" value="26"><?php echo databaseQuery('Joukkueet','Nimi','26')?></option>
  <option id="homeTeam27" value="27"><?php echo databaseQuery('Joukkueet','Nimi','27')?></option>
  <option id="homeTeam28" value="28"><?php echo databaseQuery('Joukkueet','Nimi','28')?></option>
  <option id="homeTeam29" value="29"><?php echo databaseQuery('Joukkueet','Nimi','29')?></option>
  <option id="homeTeam30" value="30"><?php echo databaseQuery('Joukkueet','Nimi','30')?></option>
  <option id="homeTeam31" value="31"><?php echo databaseQuery('Joukkueet','Nimi','31')?></option>
  <option id="homeTeam32" value="32"><?php echo databaseQuery('Joukkueet','Nimi','32')?></option>
  </select>
  
  

<br>
<br>


</div>
   <!-- Vierasjoukkueen valinta -->
   <div class="form-group addFormItem">
      <label>Valitse Vierasjoukkue</label>
      <br>
   <select name="vierasjoukkue" id="vieras" onchange="checkAwayTeam()">
   <option value="Joukkuevalinta" disabled selected="selected">Valitse Joukkue</option>
    <option id="awayTeam1" value="1"><?php echo databaseQuery('Joukkueet','Nimi','1')?></option>
  <option id="awayTeam2" value="2"><?php echo databaseQuery('Joukkueet','Nimi','2')?></option>
  <option id="awayTeam3" value="3"><?php echo databaseQuery('Joukkueet','Nimi','3')?></option>
  <option id="awayTeam4" value="4"><?php echo databaseQuery('Joukkueet','Nimi','4')?></option>
  <option id="awayTeam5" value="5"><?php echo databaseQuery('Joukkueet','Nimi','5')?></option>
  <option id="awayTeam6" value="6"><?php echo databaseQuery('Joukkueet','Nimi','6')?></option>
  <option id="awayTeam7" value="7"><?php echo databaseQuery('Joukkueet','Nimi','7')?></option>
  <option id="awayTeam8" value="8"><?php echo databaseQuery('Joukkueet','Nimi','8')?></option>
  <option id="awayTeam9" value="9"><?php echo databaseQuery('Joukkueet','Nimi','9')?></option>
  <option id="awayTeam10" value="10"><?php echo databaseQuery('Joukkueet','Nimi','10')?></option>
  <option id="awayTeam11" value="11"><?php echo databaseQuery('Joukkueet','Nimi','11')?></option>
  <option id="awayTeam12" value="12"><?php echo databaseQuery('Joukkueet','Nimi','12')?></option>
  <option id="awayTeam13" value="13"><?php echo databaseQuery('Joukkueet','Nimi','13')?></option>
  <option id="awayTeam14" value="14"><?php echo databaseQuery('Joukkueet','Nimi','14')?></option>
  <option id="awayTeam15" value="15"><?php echo databaseQuery('Joukkueet','Nimi','15')?></option>
  <option id="awayTeam16" value="16"><?php echo databaseQuery('Joukkueet','Nimi','16')?></option>
  <option id="awayTeam17" value="17"><?php echo databaseQuery('Joukkueet','Nimi','17')?></option>
  <option id="awayTeam18" value="18"><?php echo databaseQuery('Joukkueet','Nimi','18')?></option>
  <option id="awayTeam19" value="19"><?php echo databaseQuery('Joukkueet','Nimi','19')?></option>
  <option id="awayTeam20" value="20"><?php echo databaseQuery('Joukkueet','Nimi','20')?></option>
  <option id="awayTeam21" value="21"><?php echo databaseQuery('Joukkueet','Nimi','21')?></option>
  <option id="awayTeam22" value="22"><?php echo databaseQuery('Joukkueet','Nimi','22')?></option>
  <option id="awayTeam23" value="23"><?php echo databaseQuery('Joukkueet','Nimi','23')?></option>
  <option id="awayTeam24" value="24"><?php echo databaseQuery('Joukkueet','Nimi','24')?></option>
  <option id="awayTeam25" value="25"><?php echo databaseQuery('Joukkueet','Nimi','25')?></option>
  <option id="awayTeam26" value="26"><?php echo databaseQuery('Joukkueet','Nimi','26')?></option>
  <option id="awayTeam27" value="27"><?php echo databaseQuery('Joukkueet','Nimi','27')?></option>
  <option id="awayTeam28" value="28"><?php echo databaseQuery('Joukkueet','Nimi','28')?></option>
  <option id="awayTeam29" value="29"><?php echo databaseQuery('Joukkueet','Nimi','29')?></option>
  <option id="awayTeam30" value="30"><?php echo databaseQuery('Joukkueet','Nimi','30')?></option>
  <option id="awayTeam31" value="31"><?php echo databaseQuery('Joukkueet','Nimi','31')?></option>
  <option id="awayTeam32" value="32"><?php echo databaseQuery('Joukkueet','Nimi','32')?></option>  
</select>
 <br>
 <br>
 </div>
 <button type="submit" class="btn btn-primary formButton" name="adminSubmit2">Submit</button>

</div>
 
</form>




<?php
if (isset($_POST["adminSubmit2"])) {
 
 $_SESSION['kotijoukkue'] =  $_POST['kotijoukkue'];
 $_SESSION['vierasjoukkue'] =  $_POST['vierasjoukkue'];
 
echo '<script type="text/javascript">',
     'adminform2Direct();',
     '</script>'
;
 
}


?>
 
<form method=POST>
<div class="formBox" id="adminForm2">
 <label>Valitse maalintekijät ja varoitusten saajat</label>
  <!-- maalintekijät -->
  <h1>Maalintekijät</h1>
  <br>
  <label>Maalien määrä pelissä</label>
  <br>
 <input id="numberOfGoals" class ="adminInputNumberField" onchange="addGoalScorer()" name="input1" type="number" min="0">
  <br>
  <br>
<div>
 <?php
 

 
 ?>
 
</div>



 


<!-- bookings -->
<div>
<h1>Varoitukset</h1>
<label>Varoitusten määrä pelissä</label>
<br>
<input id="numberOfBookings" class ="adminInputNumberField" onchange="addbookingScorer()" name="input2" type="number" min="0">
</div>

<!-- wrongdoer1 -->
  <div id="bookingScorerDiv1" class="wrongDoerDiv">
    <hr>
    <h1>Varoituksen saaja</h1>

    <select name="meemit">
   <option value="volvo">jonihoitaa</option>
   <option value="saab">Saab</option>
  </select>
  <br>



  <hr>


  </div>
 
 <label>Ottelun päivämäärä</label>
    <br>
   <input type="date" class="form-control"id="pvm" name="pvm" required>
   <br>
  <button type="submit" class="btn btn-primary formButton" name="adminSubmit">Submit</button>

  </div>
   
  </div>
</form>




</div>
</div>



</body>