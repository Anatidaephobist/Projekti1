<?php
include_once 'login.php';
include_once 'config.php';
?>
<head>
  <script>
  @import "style.css";
  </script>
</head>


<div class="adminForm" id="adminForm">
    <label>Lisää Peli</label>

    <br>
    <br>
    <form method="POST">

        <label>Peli ID</label>
        <br>
         <select>
         <option value="peliID" disabled selected="selected" name="peliID"><?php echo $gameID; ?></option>
         </select>
         <br>
         <br>
     <!-- Kotijoukkueen valinta -->
  <div class="form-group addFormItem">
      <label>Valitse Kotijoukkue</label>
      <br>
   <select name="kotijoukkue" id="koti" onchange="checkTeam()">
       <option value="Joukkuevalinta" disabled selected="selected">Valitse Joukkue</option>
  <option value="Man united" id="homeTeam1"><?php echo databaseQuery('Joukkueet','Nimi','1')?></option>
  <option value="Man united" id="homeTeam2"><?php echo databaseQuery('Joukkueet','Nimi','2')?></option>
  <option value="Man united" id="homeTeam3"><?php echo databaseQuery('Joukkueet','Nimi','3')?></option>
  <option value="Man united" id="homeTeam4"><?php echo databaseQuery('Joukkueet','Nimi','4')?></option>
  <option value="Man united" id="homeTeam5"><?php echo databaseQuery('Joukkueet','Nimi','5')?></option>
  <option value="Man united" id="homeTeam6"><?php echo databaseQuery('Joukkueet','Nimi','6')?></option>
  <option value="Man united" id="homeTeam7"><?php echo databaseQuery('Joukkueet','Nimi','7')?></option>
  <option value="Man united" id="homeTeam8"><?php echo databaseQuery('Joukkueet','Nimi','8')?></option>
  <option value="Man united" id="homeTeam9"><?php echo databaseQuery('Joukkueet','Nimi','9')?></option>
  <option value="Man united" id="homeTeam10"><?php echo databaseQuery('Joukkueet','Nimi','10')?></option>
  <option value="Man united" id="homeTeam11"><?php echo databaseQuery('Joukkueet','Nimi','11')?></option>
  <option value="Man united" id="homeTeam12"><?php echo databaseQuery('Joukkueet','Nimi','12')?></option>
  <option value="Man united" id="homeTeam13"><?php echo databaseQuery('Joukkueet','Nimi','13')?></option>
  <option value="Man united" id="homeTeam14"><?php echo databaseQuery('Joukkueet','Nimi','14')?></option>
  <option value="Man united" id="homeTeam15"><?php echo databaseQuery('Joukkueet','Nimi','15')?></option>
  <option value="Man united" id="homeTeam16"><?php echo databaseQuery('Joukkueet','Nimi','16')?></option>
  <option value="Man united" id="homeTeam17"><?php echo databaseQuery('Joukkueet','Nimi','17')?></option>
  <option value="Man united" id="homeTeam18"><?php echo databaseQuery('Joukkueet','Nimi','18')?></option>
  <option value="Man united" id="homeTeam19"><?php echo databaseQuery('Joukkueet','Nimi','19')?></option>
  <option value="Man united" id="homeTeam20"><?php echo databaseQuery('Joukkueet','Nimi','20')?></option>
  <option value="Man united" id="homeTeam21"><?php echo databaseQuery('Joukkueet','Nimi','21')?></option>
  <option value="Man united" id="homeTeam22"><?php echo databaseQuery('Joukkueet','Nimi','22')?></option>
  <option value="Man united" id="homeTeam23"><?php echo databaseQuery('Joukkueet','Nimi','23')?></option>
  <option value="Man united" id="homeTeam24"><?php echo databaseQuery('Joukkueet','Nimi','24')?></option>
  <option value="Man united" id="homeTeam25"><?php echo databaseQuery('Joukkueet','Nimi','25')?></option>
  <option value="Man united" id="homeTeam26"><?php echo databaseQuery('Joukkueet','Nimi','26')?></option>
  <option value="Man united" id="homeTeam27"><?php echo databaseQuery('Joukkueet','Nimi','27')?></option>
  <option value="Man united" id="homeTeam28"><?php echo databaseQuery('Joukkueet','Nimi','28')?></option>
  <option value="Man united" id="homeTeam29"><?php echo databaseQuery('Joukkueet','Nimi','29')?></option>
  <option value="Man united" id="homeTeam30"><?php echo databaseQuery('Joukkueet','Nimi','30')?></option>
  <option value="Man united" id="homeTeam31"><?php echo databaseQuery('Joukkueet','Nimi','31')?></option>
  <option value="Man united" id="homeTeam32"><?php echo databaseQuery('Joukkueet','Nimi','32')?></option>
  
  </select>
<br>
<br>


   <!-- Vierasjoukkueen valinta -->
   <div class="form-group addFormItem">
      <label>Valitse Vierasjoukkue</label>
      <br>
   <select name="vierasjoukkue" id="vieras" onchange="checkTeam()">
   <option value="Joukkuevalinta" disabled selected="selected">Valitse Joukkue</option>
  <option value="Man united" id="manu"><?php echo databaseQuery('Joukkueet','Nimi','30')?></option>
  <option value="BASEL" id="basel">FC Basel 1893</option>
  <option value="CSKA Moskva" id="moskva">PFC CSKA Moskva</option>
  <option value="Benfica" id="benfica">SL Benfica</option>
</select>
 <br>
 <br>

  </div>

  <!-- maalintekijät -->
  <h1>Maalintekijät</h1>
  <br>
  <label>Maalien määrä pelissä</label>
  <br>
  <input id="numberOfGoals" class ="adminInputNumberField" onchange="addGoalScorer()" name = "input1" type="number" min="0">
  <br>
  <br>

<!-- goalmaker 1 -->
<div id="goalScorerDiv1" class="goalScorerDiv">
  <hr>
  <h1>Maalintekijä</h1>

  <select name="meemit">
 <option value="volvo">jonihoitaa</option>
 <option value="saab">Saab</option>
</select>
<br>
<input type="checkbox" value="ownGoal"> Oma maali
<hr>
<br>

</div>

<!-- goalmaker 2 -->
<div id="goalScorerDiv2" class="goalScorerDiv">
  <hr>
  <h1>Maalintekijä</h1>

  <select name="meemit">
 <option value="volvo">jonihoitaa</option>
 <option value="saab">Saab</option>
</select>
<br>
<input type="checkbox" value="ownGoal"> Oma maali
<hr>
<br>

</div>

<!-- goalmaker 3 -->
<div id="goalScorerDiv3" class="goalScorerDiv">
  <hr>
  <h1>Maalintekijä</h1>

  <select name="meemit">
 <option value="volvo">jonihoitaa</option>
 <option value="saab">Saab</option>
</select>
<br>
<input type="checkbox" value="ownGoal"> Oma maali
<hr>
<br>

</div>

<!-- goalmaker 4 -->
<div id="goalScorerDiv4" class="goalScorerDiv">
  <hr>
  <h1>Maalintekijä</h1>

  <select name="meemit">
 <option value="volvo">jonihoitaa</option>
 <option value="saab">Saab</option>
</select>
<br>
<input type="checkbox" value="ownGoal"> Oma maali
<hr>
<br>

</div>

<!-- goalmaker 5 -->
<div id="goalScorerDiv5" class="goalScorerDiv">
  <hr>
  <h1>Maalintekijä</h1>

  <select name="meemit">
 <option value="volvo">jonihoitaa</option>
 <option value="saab">Saab</option>
</select>
<br>
<input type="checkbox" value="ownGoal"> Oma maali
<hr>


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


  <input type="radio" onclick="yellowCardRadioButton()" value="yellowCard" id="yellowCard" name="yellowCard" > Keltainen kortti <br>
  <input type="radio" onclick="redCardRadioButton()" value="redCard" id="redCard" name="redCard"> Punainen kortti <br>

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


  <input type="radio" onclick="yellowCardRadioButton()" value="yellowCard" id="yellowCard" name="yellowCard" > Keltainen kortti <br>
  <input type="radio" onclick="redCardRadioButton()" value="redCard" id="redCard" name="redCard"> Punainen kortti <br>

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


  <input type="radio" onclick="yellowCardRadioButton()" value="yellowCard" id="yellowCard" name="yellowCard" > Keltainen kortti <br>
  <input type="radio" onclick="redCardRadioButton()" value="redCard" id="redCard" name="redCard"> Punainen kortti <br>

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


  <input type="radio" onclick="yellowCardRadioButton()" value="yellowCard" id="yellowCard" name="yellowCard" > Keltainen kortti <br>
  <input type="radio" onclick="redCardRadioButton()" value="redCard" id="redCard" name="redCard"> Punainen kortti <br>

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


  <input type="radio" onclick="yellowCardRadioButton()" value="yellowCard" id="yellowCard" name="yellowCard" > Keltainen kortti <br>
  <input type="radio" onclick="redCardRadioButton()" value="redCard" id="redCard" name="redCard"> Punainen kortti <br>

  <hr>


  </div>
    <label>Ottelun päivämäärä</label>
    <br>
   <input type="date" class="form-control" id="pvm" name="pvm" required>
   <br>
  <button type="submit" class="btn btn-primary formButton" name="adminSubmit">Submit</button>
</form>


</div>

</div>
