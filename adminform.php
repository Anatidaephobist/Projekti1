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
  <option value="Man united" id="manu2">Manchester united</option>
  <option value="BASEL" id="basel2">FC Basel 1893</option>
  <option value="CSKA Moskva" id="moskva2">PFC CSKA Moskva</option>
  <option value="Benfica" id="benfica2">SL Benfica</option>
  </select>
<br>
<br>


   <!-- Vierasjoukkueen valinta -->
   <div class="form-group addFormItem">
      <label>Valitse Vierasjoukkue</label>
      <br>
   <select name="vierasjoukkue" id="vieras" onchange="checkTeam()">
   <option value="Joukkuevalinta" disabled selected="selected">Valitse Joukkue</option>
  <option value="Man united" id="manu">Manchester united</option>
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
