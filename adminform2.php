<?php
session_start();
include_once 'login.php';
include_once 'config.php';
include_once 'functions.php';
?>
<head>

  <meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="styleAdmin2.css">
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
  </script>
  
  
  <script>
   
   function addGoalScorer() {
    if(document.getElementById("numberOfGoals").value == 1) {
       document.getElementById("goalScorerDiv1").style.display = "block";
       document.getElementById("goalScorerDiv2").style.display = "none";
       document.getElementById("goalScorerDiv3").style.display = "none";
       document.getElementById("goalScorerDiv4").style.display = "none";
       document.getElementById("goalScorerDiv5").style.display = "none";
       document.getElementById("goalScorerDiv6").style.display = "none";
       document.getElementById("goalScorerDiv7").style.display = "none";
       document.getElementById("goalScorerDiv8").style.display = "none";
       document.getElementById("goalScorerDiv9").style.display = "none";
       document.getElementById("goalScorerDiv10").style.display = "none";
       
    }
    if(document.getElementById("numberOfGoals").value == 2) {
       document.getElementById("goalScorerDiv1").style.display = "block";
       document.getElementById("goalScorerDiv2").style.display = "block";
       document.getElementById("goalScorerDiv3").style.display = "none";
       document.getElementById("goalScorerDiv4").style.display = "none";
       document.getElementById("goalScorerDiv5").style.display = "none";
       document.getElementById("goalScorerDiv6").style.display = "none";
       document.getElementById("goalScorerDiv7").style.display = "none";
       document.getElementById("goalScorerDiv8").style.display = "none";
       document.getElementById("goalScorerDiv9").style.display = "none";
       document.getElementById("goalScorerDiv10").style.display = "none";
    }
     if(document.getElementById("numberOfGoals").value == 3) {
       document.getElementById("goalScorerDiv1").style.display = "block";
       document.getElementById("goalScorerDiv2").style.display = "block";
       document.getElementById("goalScorerDiv3").style.display = "block";
       document.getElementById("goalScorerDiv4").style.display = "none";
       document.getElementById("goalScorerDiv5").style.display = "none";
       document.getElementById("goalScorerDiv6").style.display = "none";
       document.getElementById("goalScorerDiv7").style.display = "none";
       document.getElementById("goalScorerDiv8").style.display = "none";
       document.getElementById("goalScorerDiv9").style.display = "none";
       document.getElementById("goalScorerDiv10").style.display = "none";
    }
     if(document.getElementById("numberOfGoals").value == 4) {
       document.getElementById("goalScorerDiv1").style.display = "block";
       document.getElementById("goalScorerDiv2").style.display = "block";
       document.getElementById("goalScorerDiv3").style.display = "block";
       document.getElementById("goalScorerDiv4").style.display = "block";
       document.getElementById("goalScorerDiv5").style.display = "none";
       document.getElementById("goalScorerDiv6").style.display = "none";
       document.getElementById("goalScorerDiv7").style.display = "none";
       document.getElementById("goalScorerDiv8").style.display = "none";
       document.getElementById("goalScorerDiv9").style.display = "none";
       document.getElementById("goalScorerDiv10").style.display = "none";
    }
     if(document.getElementById("numberOfGoals").value == 5) {
       document.getElementById("goalScorerDiv1").style.display = "block";
       document.getElementById("goalScorerDiv2").style.display = "block";
       document.getElementById("goalScorerDiv3").style.display = "block";
       document.getElementById("goalScorerDiv4").style.display = "block";
       document.getElementById("goalScorerDiv5").style.display = "block";
       document.getElementById("goalScorerDiv6").style.display = "none";
       document.getElementById("goalScorerDiv7").style.display = "none";
       document.getElementById("goalScorerDiv8").style.display = "none";
       document.getElementById("goalScorerDiv9").style.display = "none";
       document.getElementById("goalScorerDiv10").style.display = "none";
    }
     if(document.getElementById("numberOfGoals").value == 6) {
       document.getElementById("goalScorerDiv1").style.display = "block";
       document.getElementById("goalScorerDiv2").style.display = "block";
       document.getElementById("goalScorerDiv3").style.display = "block";
       document.getElementById("goalScorerDiv4").style.display = "block";
       document.getElementById("goalScorerDiv5").style.display = "block";
       document.getElementById("goalScorerDiv6").style.display = "block";
       document.getElementById("goalScorerDiv7").style.display = "none";
       document.getElementById("goalScorerDiv8").style.display = "none";
       document.getElementById("goalScorerDiv9").style.display = "none";
       document.getElementById("goalScorerDiv10").style.display = "none";
    }
     if(document.getElementById("numberOfGoals").value == 7) {
       document.getElementById("goalScorerDiv1").style.display = "block";
       document.getElementById("goalScorerDiv2").style.display = "block";
       document.getElementById("goalScorerDiv3").style.display = "block";
       document.getElementById("goalScorerDiv4").style.display = "block";
       document.getElementById("goalScorerDiv5").style.display = "block";
       document.getElementById("goalScorerDiv6").style.display = "block";
       document.getElementById("goalScorerDiv7").style.display = "block";
       document.getElementById("goalScorerDiv8").style.display = "none";
       document.getElementById("goalScorerDiv9").style.display = "none";
      document.getElementById("goalScorerDiv10").style.display = "none";
    }
     if(document.getElementById("numberOfGoals").value == 8) {
       document.getElementById("goalScorerDiv1").style.display = "block";
       document.getElementById("goalScorerDiv2").style.display = "block";
       document.getElementById("goalScorerDiv3").style.display = "block";
       document.getElementById("goalScorerDiv4").style.display = "block";
       document.getElementById("goalScorerDiv5").style.display = "block";
       document.getElementById("goalScorerDiv6").style.display = "block";
       document.getElementById("goalScorerDiv7").style.display = "block";
       document.getElementById("goalScorerDiv8").style.display = "block";
       document.getElementById("goalScorerDiv9").style.display = "none";
      document.getElementById("goalScorerDiv10").style.display = "none";
    }
     if(document.getElementById("numberOfGoals").value == 9) {
       document.getElementById("goalScorerDiv1").style.display = "block";
       document.getElementById("goalScorerDiv2").style.display = "block";
       document.getElementById("goalScorerDiv3").style.display = "block";
       document.getElementById("goalScorerDiv4").style.display = "block";
       document.getElementById("goalScorerDiv5").style.display = "block";
       document.getElementById("goalScorerDiv6").style.display = "block";
       document.getElementById("goalScorerDiv7").style.display = "block";
       document.getElementById("goalScorerDiv8").style.display = "block";
       document.getElementById("goalScorerDiv9").style.display = "block";
      document.getElementById("goalScorerDiv10").style.display = "none";
    }
     if(document.getElementById("numberOfGoals").value == 10) {
       document.getElementById("goalScorerDiv1").style.display = "block";
       document.getElementById("goalScorerDiv2").style.display = "block";
       document.getElementById("goalScorerDiv3").style.display = "block";
       document.getElementById("goalScorerDiv4").style.display = "block";
       document.getElementById("goalScorerDiv5").style.display = "block";
       document.getElementById("goalScorerDiv6").style.display = "block";
       document.getElementById("goalScorerDiv7").style.display = "block";
       document.getElementById("goalScorerDiv8").style.display = "block";
       document.getElementById("goalScorerDiv9").style.display = "block";
      document.getElementById("goalScorerDiv10").style.display = "block";
    }
}
   
   document.getElementsByName("input1")[0].addEventListener('change', addGoalScorer());
   
 function yellowCardRadioButton() {
document.getElementById('redCard').checked = false;

}

function redCardRadioButton() {

document.getElementById('yellowCard').checked = false;

}


document.getElementById("koti").addEventListener("change", checkHomeTeam());
document.getElementById("vieras").addEventListener("change", checkAwayTeam());

function checkHomeTeam() {

    var select = document.getElementById("vieras");
    var length = select.options.length;
        for (i = 0; i < length; i++) {
         select.options[i].disabled = false;
}


    var homeTeam = document.getElementById("koti");
    var awayTeam = document.getElementById("vieras");
    var homeTeamValue = document.getElementById("koti").selectedIndex;
    var awayTeamValue = document.getElementById("vieras").selectedIndex;

   awayTeam.options[homeTeamValue].disabled = true;


}


function checkAwayTeam() {


    var select = document.getElementById("koti");
    var length = select.options.length;
        for (i = 0; i < length; i++) {
         select.options[i].disabled = false;
}


    var homeTeam = document.getElementById("koti");
    var awayTeam = document.getElementById("vieras");
    var homeTeamValue = document.getElementById("koti").selectedIndex;
    var awayTeamValue = document.getElementById("vieras").selectedIndex;

   homeTeam.options[awayTeamValue].disabled = true;


}


document.getElementsByName("input2")[1].addEventListener('change', addbookingScorer());



function addbookingScorer() {
  if (document.getElementById("numberOfBookings").value == 0 ) {
    document.getElementById('bookingScorerDiv1').style.display = "none";
      document.getElementById('bookingScorerDiv2').style.display = "none";
        document.getElementById('bookingScorerDiv3').style.display = "none";
          document.getElementById('bookingScorerDiv4').style.display = "none";
            document.getElementById('bookingScorerDiv5').style.display = "none";
        }
  if (document.getElementById("numberOfBookings").value == 1 ) {
    document.getElementById('bookingScorerDiv1').style.display = "block";
      document.getElementById('bookingScorerDiv2').style.display = "none";
        document.getElementById('bookingScorerDiv3').style.display = "none";
          document.getElementById('bookingScorerDiv4').style.display = "none";
            document.getElementById('bookingScorerDiv5').style.display = "none";
  } else if (document.getElementById("numberOfBookings").value == 2 ) {
    document.getElementById('bookingScorerDiv1').style.display = "block";
    document.getElementById('bookingScorerDiv2').style.display = "block";
      document.getElementById('bookingScorerDiv3').style.display = "none";
        document.getElementById('bookingScorerDiv4').style.display = "none";
          document.getElementById('bookingScorerDiv5').style.display = "none";
  } else if (document.getElementById("numberOfBookings").value == 3) {
      document.getElementById('bookingScorerDiv1').style.display = "block";
        document.getElementById('bookingScorerDiv2').style.display = "block";
          document.getElementById('bookingScorerDiv3').style.display = "block";
            document.getElementById('bookingScorerDiv4').style.display = "none";
              document.getElementById('bookingScorerDiv5').style.display = "none";
  }  else if (document.getElementById("numberOfBookings").value == 4) {
    document.getElementById('bookingScorerDiv1').style.display = "block";
      document.getElementById('bookingScorerDiv2').style.display = "block";
        document.getElementById('bookingScorerDiv3').style.display = "block";
          document.getElementById('bookingScorerDiv4').style.display = "block";
            document.getElementById('bookingScorerDiv5').style.display = "none";
  } else if (document.getElementById("numberOfBookings").value == 5) {
    document.getElementById('bookingScorerDiv1').style.display = "block";
      document.getElementById('bookingScorerDiv2').style.display = "block";
        document.getElementById('bookingScorerDiv3').style.display = "block";
          document.getElementById('bookingScorerDiv4').style.display = "block";
            document.getElementById('bookingScorerDiv5').style.display = "block";

  }

}





  </script>
  
</head>
<body background="football1.jpg">






 
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
 
 
</div>

<!--- kesken -->

<div id="goalScorerDiv1" class="goalScorerDiv">
  
    <h1>Maalintekijä</h1>
  
    <?php
$sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result = $mysqli->query($sql);

echo "<select name='EtuNimi'>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']." ". $row['Sukunimi'] . "'>" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
<br>
<input type="checkbox" id="owngoal1" value="owngoal"> oma maali<br>

<hr>
</div>

<div id="goalScorerDiv2" class="goalScorerDiv">
 
    <h1>Maalintekijä</h1>
  
    <?php
$sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result = $mysqli->query($sql);

echo "<select name='EtuNimi'>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']." ". $row['Sukunimi'] . "'>" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
<br>
<input type="checkbox" id="owngoal2" value="owngoal"> oma maali<br>

<hr>
</div>

<div id="goalScorerDiv3" class="goalScorerDiv">
   
    <h1>Maalintekijä</h1>
  
    <?php
$sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result = $mysqli->query($sql);

echo "<select name='EtuNimi'>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']." ". $row['Sukunimi'] . "'>" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
<br>
<input type="checkbox" id="owngoal3" value="owngoal"> oma maali<br>
<hr>
</div>

<div id="goalScorerDiv4" class="goalScorerDiv">
    
    <h1>Maalintekijä</h1>
  
    <?php
$sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result = $mysqli->query($sql);

echo "<select name='EtuNimi'>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']." ". $row['Sukunimi'] . "'>" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
<br>
<input type="checkbox" id="owngoal4" value="owngoal"> oma maali<br>
<hr>
</div>

<div id="goalScorerDiv5" class="goalScorerDiv">
    
    <h1>Maalintekijä</h1>
  
    <?php
$sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result = $mysqli->query($sql);

echo "<select name='EtuNimi'>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']." ". $row['Sukunimi'] . "'>" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
<br>
<input type="checkbox" id="owngoal5" value="owngoal"> oma maali<br>
<hr>
</div>

<div id="goalScorerDiv6" class="goalScorerDiv">
    
    <h1>Maalintekijä</h1>
  
    <?php
$sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result = $mysqli->query($sql);

echo "<select name='EtuNimi'>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']." ". $row['Sukunimi'] . "'>" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
<hr>
<br>
<input type="checkbox" id="owngoal6" value="owngoal"> oma maali<br>
</div>

<div id="goalScorerDiv7" class="goalScorerDiv">
    
    <h1>Maalintekijä</h1>
  
    <?php
$sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result = $mysqli->query($sql);

echo "<select name='EtuNimi'>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']." ". $row['Sukunimi'] . "'>" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
<hr>
<br>
<input type="checkbox" id="owngoal7" value="owngoal"> oma maali<br>
</div>

<div id="goalScorerDiv8" class="goalScorerDiv">
    
    <h1>Maalintekijä</h1>
  
    <?php
$sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result = $mysqli->query($sql);

echo "<select name='EtuNimi'>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']." ". $row['Sukunimi'] . "'>" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
<hr>
<br>
<input type="checkbox" id="owngoal8" value="owngoal"> oma maali<br>
</div>

<div id="goalScorerDiv9" class="goalScorerDiv">
    
    <h1>Maalintekijä</h1>
  
    <?php
$sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result = $mysqli->query($sql);

echo "<select name='EtuNimi'>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']." ". $row['Sukunimi'] . "'>" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
<hr>
<br>
<input type="checkbox" id="owngoal9" value="owngoal"> oma maali<br>
</div>

<div id="goalScorerDiv10" class="goalScorerDiv">
    
    <h1>Maalintekijä</h1>
  
    <?php
$sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result = $mysqli->query($sql);

echo "<select name='EtuNimi'>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']." ". $row['Sukunimi'] . "'>" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
<br>
<input type="checkbox" id="owngoal10" value="owngoal"> oma maali<br>
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
    
    <h1>Varoituksen saaja</h1>
 <?php
$sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result = $mysqli->query($sql);

echo "<select name='EtuNimi'>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']." ". $row['Sukunimi'] . "'>" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
  <br>


  <input type="radio" onclick="yellowCardRadioButton()" value="yellowCard"id="yellowCard" name="Card1" required> Keltainen kortti <br>
  <input type="radio" onclick="redCardRadioButton()" value="redCard"id="redCard" name="Card1"> Punainen kortti <br>

  <hr>


  </div>
  
  <!-- wrongdoer2 -->
  <div id="bookingScorerDiv2" class="wrongDoerDiv">
    
    <h1>Varoituksen saaja</h1>
 <?php
$sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result = $mysqli->query($sql);

echo "<select name='EtuNimi'>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']." ". $row['Sukunimi'] . "'>" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
  <br>


  <input type="radio" onclick="yellowCardRadioButton()" value="yellowCard"id="yellowCard" name="Card2" required> Keltainen kortti <br>
  <input type="radio" onclick="redCardRadioButton()" value="redCard"id="redCard" name="Card2"> Punainen kortti <br>

  <hr>


  </div>
 
 
 <!-- wrongdoer3 -->
  <div id="bookingScorerDiv3" class="wrongDoerDiv">
    
    <h1>Varoituksen saaja</h1>
 <?php
$sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result = $mysqli->query($sql);

echo "<select name='EtuNimi'>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']." ". $row['Sukunimi'] . "'>" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
  <br>


  <input type="radio" onclick="yellowCardRadioButton()" value="yellowCard"id="yellowCard" name="Card3" required> Keltainen kortti <br>
  <input type="radio" onclick="redCardRadioButton()" value="redCard"id="redCard" name="Card3"> Punainen kortti <br>

  <hr>


  </div>
 
 
 <!-- wrongdoer4 -->
  <div id="bookingScorerDiv4" class="wrongDoerDiv">
    
    <h1>Varoituksen saaja</h1>
 <?php
$sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result = $mysqli->query($sql);

echo "<select name='EtuNimi'>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']." ". $row['Sukunimi'] . "'>" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
  <br>


  <input type="radio" onclick="yellowCardRadioButton()" value="yellowCard"id="yellowCard" name="Card4" required> Keltainen kortti <br>
  <input type="radio" onclick="redCardRadioButton()" value="redCard"id="redCard" name="Card4"> Punainen kortti <br>

  <hr>


  </div>
 
 
 <!-- wrongdoer5 -->
  <div id="bookingScorerDiv5" class="wrongDoerDiv">
    
    <h1>Varoituksen saaja</h1>
 <?php
$sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result = $mysqli->query($sql);

echo "<select name='EtuNimi'>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']." ". $row['Sukunimi'] . "'>" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
  <br>


  <input type="radio" onclick="yellowCardRadioButton()" value="yellowCard"id="yellowCard" name="Card5" required> Keltainen kortti <br>
  <input type="radio" onclick="redCardRadioButton()" value="redCard"id="redCard" name="Card5"> Punainen kortti <br>

  <hr>


  </div>
 
 
 <label>Ottelun päivämäärä</label>
    <br>
   <input type="date" class="form-control"id="pvm" name="pvm" required>
   <br>
   <br>
  <button type="submit" class="btn btn-primary formButton" name="adminSubmit">Submit</button>

  </div>
   
  </div>
</form>




</div>
</div>

</body>