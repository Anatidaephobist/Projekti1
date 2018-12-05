<?php
include_once 'login.php';
include_once 'config.php';
?>
<head>
  <script>
  @import "style.css";
  </script>
  <meta charset="UTF-8">
  
  <script>
  

      
      
  </script>
  
  
</head>

<form autocomplete="off" method="POST">
<div class="adminForm"id="adminForm">
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
   <select name="kotijoukkue" id="koti" onchange="checkHomeTeam()">
       <option value="Joukkuevalinta" disabled selected="selected">Valitse Joukkue</option>
        <option id="homeTeam1"><?php echo databaseQuery('Joukkueet','Nimi','1')?></option>
  <option id="homeTeam2"><?php echo databaseQuery('Joukkueet','Nimi','2')?></option>
  <option id="homeTeam3"><?php echo databaseQuery('Joukkueet','Nimi','3')?></option>
  <option id="homeTeam4"><?php echo databaseQuery('Joukkueet','Nimi','4')?></option>
  <option id="homeTeam5"><?php echo databaseQuery('Joukkueet','Nimi','5')?></option>
  <option id="homeTeam6"><?php echo databaseQuery('Joukkueet','Nimi','6')?></option>
  <option id="homeTeam7"><?php echo databaseQuery('Joukkueet','Nimi','7')?></option>
  <option id="homeTeam8"><?php echo databaseQuery('Joukkueet','Nimi','8')?></option>
  <option id="homeTeam9"><?php echo databaseQuery('Joukkueet','Nimi','9')?></option>
  <option id="homeTeam10"><?php echo databaseQuery('Joukkueet','Nimi','10')?></option>
  <option id="homeTeam11"><?php echo databaseQuery('Joukkueet','Nimi','11')?></option>
  <option id="homeTeam12"><?php echo databaseQuery('Joukkueet','Nimi','12')?></option>
  <option id="homeTeam13"><?php echo databaseQuery('Joukkueet','Nimi','13')?></option>
  <option id="homeTeam14"><?php echo databaseQuery('Joukkueet','Nimi','14')?></option>
  <option id="homeTeam15"><?php echo databaseQuery('Joukkueet','Nimi','15')?></option>
  <option id="homeTeam16"><?php echo databaseQuery('Joukkueet','Nimi','16')?></option>
  <option id="homeTeam17"><?php echo databaseQuery('Joukkueet','Nimi','17')?></option>
  <option id="homeTeam18"><?php echo databaseQuery('Joukkueet','Nimi','18')?></option>
  <option id="homeTeam19"><?php echo databaseQuery('Joukkueet','Nimi','19')?></option>
  <option id="homeTeam20"><?php echo databaseQuery('Joukkueet','Nimi','20')?></option>
  <option id="homeTeam21"><?php echo databaseQuery('Joukkueet','Nimi','21')?></option>
  <option id="homeTeam22"><?php echo databaseQuery('Joukkueet','Nimi','22')?></option>
  <option id="homeTeam23"><?php echo databaseQuery('Joukkueet','Nimi','23')?></option>
  <option id="homeTeam24"><?php echo databaseQuery('Joukkueet','Nimi','24')?></option>
  <option id="homeTeam25"><?php echo databaseQuery('Joukkueet','Nimi','25')?></option>
  <option id="homeTeam26"><?php echo databaseQuery('Joukkueet','Nimi','26')?></option>
  <option id="homeTeam27"><?php echo databaseQuery('Joukkueet','Nimi','27')?></option>
  <option id="homeTeam28"><?php echo databaseQuery('Joukkueet','Nimi','28')?></option>
  <option id="homeTeam29"><?php echo databaseQuery('Joukkueet','Nimi','29')?></option>
  <option id="homeTeam30"><?php echo databaseQuery('Joukkueet','Nimi','30')?></option>
  <option id="homeTeam31"><?php echo databaseQuery('Joukkueet','Nimi','31')?></option>
  <option id="homeTeam32"><?php echo databaseQuery('Joukkueet','Nimi','32')?></option>
     
      

      
  
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



  

  <!-- maalintekijät -->
  <h1>Maalintekijät</h1>
  <br>
  <label>Maalien määrä pelissä</label>
  <br>
 <input id="numberOfGoals" class ="adminInputNumberField" onchange="addGoalScorer()" name = "input1" type="number" min="0">
  <br>
  <br>

 <div class="autocomplete addFormItem">
     <input id="goalScorerInput" type="text" name="" style="width: 300px;"/>
     
 </div> <!-- end of autocomplete div -->




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
  
   <divid="bookingScorerDiv2" class="wrongDoerDiv">
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
  
   <divid="bookingScorerDiv3" class="wrongDoerDiv">
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
  
   <divid="bookingScorerDiv4" class="wrongDoerDiv">
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
  
   <divid="bookingScorerDiv5" class="wrongDoerDiv">
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
</form>


</div>

</div>
</div>