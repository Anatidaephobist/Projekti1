
<?php
include_once 'login.php';
include_once 'config.php';
include_once 'functions.php';
?>
<head>

  <meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="styleAdmin.css">
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
  
  </script>
  
 
  
</head>
<body background="football1.jpg">
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
   <select name="kotijoukkue" id="koti">
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
    <option id="awayTeam1"><?php echo databaseQuery('Joukkueet','Nimi','1')?></option>
  <option id="awayTeam2"><?php echo databaseQuery('Joukkueet','Nimi','2')?></option>
  <option id="awayTeam3"><?php echo databaseQuery('Joukkueet','Nimi','3')?></option>
  <option id="awayTeam4"><?php echo databaseQuery('Joukkueet','Nimi','4')?></option>
  <option id="awayTeam5"><?php echo databaseQuery('Joukkueet','Nimi','5')?></option>
  <option id="awayTeam6"><?php echo databaseQuery('Joukkueet','Nimi','6')?></option>
  <option id="awayTeam7"><?php echo databaseQuery('Joukkueet','Nimi','7')?></option>
  <option id="awayTeam8"><?php echo databaseQuery('Joukkueet','Nimi','8')?></option>
  <option id="awayTeam9"><?php echo databaseQuery('Joukkueet','Nimi','9')?></option>
  <option id="awayTeam10"><?php echo databaseQuery('Joukkueet','Nimi','10')?></option>
  <option id="awayTeam11"><?php echo databaseQuery('Joukkueet','Nimi','11')?></option>
  <option id="awayTeam12"><?php echo databaseQuery('Joukkueet','Nimi','12')?></option>
  <option id="awayTeam13"><?php echo databaseQuery('Joukkueet','Nimi','13')?></option>
  <option id="awayTeam14"><?php echo databaseQuery('Joukkueet','Nimi','14')?></option>
  <option id="awayTeam15"><?php echo databaseQuery('Joukkueet','Nimi','15')?></option>
  <option id="awayTeam16"><?php echo databaseQuery('Joukkueet','Nimi','16')?></option>
  <option id="awayTeam17"><?php echo databaseQuery('Joukkueet','Nimi','17')?></option>
  <option id="awayTeam18"><?php echo databaseQuery('Joukkueet','Nimi','18')?></option>
  <option id="awayTeam19"><?php echo databaseQuery('Joukkueet','Nimi','19')?></option>
  <option id="awayTeam20"><?php echo databaseQuery('Joukkueet','Nimi','20')?></option>
  <option id="awayTeam21"><?php echo databaseQuery('Joukkueet','Nimi','21')?></option>
  <option id="awayTeam22"><?php echo databaseQuery('Joukkueet','Nimi','22')?></option>
  <option id="awayTeam23"><?php echo databaseQuery('Joukkueet','Nimi','23')?></option>
  <option id="awayTeam24"><?php echo databaseQuery('Joukkueet','Nimi','24')?></option>
  <option id="awayTeam25"><?php echo databaseQuery('Joukkueet','Nimi','25')?></option>
  <option id="awayTeam26"><?php echo databaseQuery('Joukkueet','Nimi','26')?></option>
  <option id="awayTeam27"><?php echo databaseQuery('Joukkueet','Nimi','27')?></option>
  <option id="awayTeam28"><?php echo databaseQuery('Joukkueet','Nimi','28')?></option>
  <option id="awayTeam29"><?php echo databaseQuery('Joukkueet','Nimi','29')?></option>
  <option id="awayTeam30"><?php echo databaseQuery('Joukkueet','Nimi','30')?></option>
  <option id="awayTeam31"><?php echo databaseQuery('Joukkueet','Nimi','31')?></option>
  <option id="awayTeam32"><?php echo databaseQuery('Joukkueet','Nimi','32')?></option>   
</select>
 <br>
 <br>
 </div>
 <button type="submit" class="btn btn-primary formButton" name="adminSubmit2" onclick="changeAdminForm()">Submit</button>

</div>
 
</form>




<?php
if (isset($_POST["adminSubmit2"])) {
 $chosenHomeTeam = $_POST['kotijoukkue'];
 $chosenAwayTeam = $_POST['vierasjoukkue'];
 
}


?>
 
<form method="POST">
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

<!--- kesken -->

 <div id="goalScorerDiv1" class="goalScorerDiv">
    <hr>
    <h1>Maalin tekijä</h1>
    <?php
$sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$chosenHomeTeam;
$result = $mysqli->query($sql);

echo "<select name='EtuNimi'>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']."". $row['Sukunimi'] . "'>" . $row['EtuNimi']."". $row['Sukunimi']. "</option>";
}
echo "</select>";
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


  <input type="radio" onclick="yellowCardRadioButton()" value="yellowCard"id="yellowCard" name="yellowCard" > Keltainen kortti <br>
  <input type="radio" onclick="redCardRadioButton()" value="redCard"id="redCard" name="redCard"> Punainen kortti <br>

  <hr>


  </div>
  
  <!-- wrong doer 2 -->
  
   <div id="bookingScorerDiv2" class="wrongDoerDiv">
    <hr>
    <h1>Varoituksen saaja</h1>

    <select name="meemit">
   <option value="volvo">jonihoitaa</option>
   <option value="saab">Saab</option>
  </select>
  <br>


  <input type="radio" onclick="yellowCardRadioButton()" value="yellowCard"id="yellowCard" name="yellowCard" > Keltainen kortti <br>
  <input type="radio" onclick="redCardRadioButton()" value="redCard"id="redCard" name="redCard"> Punainen kortti <br>

  <hr>


  </div>
  
  <!-- wrong doer 3 -->
  
   <div id="bookingScorerDiv3" class="wrongDoerDiv">
    <hr>
    <h1>Varoituksen saaja</h1>

    <select name="meemit">
   <option value="volvo">jonihoitaa</option>
   <option value="saab">Saab</option>
  </select>
  <br>


  <input type="radio" onclick="yellowCardRadioButton()" value="yellowCard"id="yellowCard" name="yellowCard" > Keltainen kortti <br>
  <input type="radio" onclick="redCardRadioButton()" value="redCard"id="redCard" name="redCard"> Punainen kortti <br>

  <hr>


  </div>
  
  <!-- wrong doer 4 -->
  
   <div id="bookingScorerDiv4" class="wrongDoerDiv">
    <hr>
    <h1>Varoituksen saaja</h1>

    <select name="meemit">
   <option value="volvo">jonihoitaa</option>
   <option value="saab">Saab</option>
  </select>
  <br>


  <input type="radio" onclick="yellowCardRadioButton()" value="yellowCard"id="yellowCard" name="yellowCard" > Keltainen kortti <br>
  <input type="radio" onclick="redCardRadioButton()" value="redCard"id="redCard" name="redCard"> Punainen kortti <br>

  <hr>


  </div>
  
  <!-- wrong doer 5 -->
  
   <div id="bookingScorerDiv5" class="wrongDoerDiv">
    <hr>
    <h1>Varoituksen saaja</h1>

    <select name="meemit">
   <option value="volvo">jonihoitaa</option>
   <option value="saab">Saab</option>
  </select>
  <br>


  <input type="radio" onclick="yellowCardRadioButton()" value="yellowCard"id="yellowCard" name="yellowCard" > Keltainen kortti <br>
  <input type="radio" onclick="redCardRadioButton()" value="redCard"id="redCard" name="redCard"> Punainen kortti <br>

  <hr>


  </div>
    <label>Ottelun päivämäärä</label>
    <br>
   <input type="date" class="form-control"id="pvm" name="pvm" required>
   <br>
  <button type="submit" class="btn btn-primary formButton" name="adminSubmit">Submit</button>
  </div>
</form>




</div>
</div>

</body>