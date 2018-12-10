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
       
      
       
    if(document.getElementById("numberOfGoals").value == 0) {
        document.getElementById("goalScorerDiv1").style.display ="none";
       document.getElementById("goalScorerDiv2").style.display = "none";
       document.getElementById("goalScorerDiv3").style.display = "none";
       document.getElementById("goalScorerDiv4").style.display = "none";
       document.getElementById("goalScorerDiv5").style.display = "none";
       document.getElementById("goalScorerDiv6").style.display = "none";
       document.getElementById("goalScorerDiv7").style.display = "none";
       document.getElementById("goalScorerDiv8").style.display = "none";
       document.getElementById("goalScorerDiv9").style.display = "none";
      document.getElementById("goalScorerDiv10").style.display = "none";
      
       var elements = document.getElementsByClassName("owngoal");
             
            for(var i = 0, length = elements.length; i < length; i++) {
                if( elements[i].checked == true){
                    elements[i].checked = false;
       } 
    }
    
    var elements = document.getElementsByClassName("nameOfPlayer");
             
            for(var i = 0, length = elements.length; i < length; i++) {
                if( elements[i].selectedIndex != 0){
                    elements[i].selectedIndex = 0;
       } 
    }
    
      
      
      
    }
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
       
         var elements = document.getElementsByClassName("owngoal");
             
            for(var i = 1, length = elements.length; i < length; i++) {
                if( elements[i].checked == true){
                    elements[i].checked = false;
       } 
    }
    
     var elements = document.getElementsByClassName("nameOfPlayer");
             
            for(var i = 1, length = elements.length; i < length; i++) {
                if( elements[i].selectedIndex != 0){
                    elements[i].selectedIndex = 0;
       } 
    }
    
    
       
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
       
        var elements = document.getElementsByClassName("owngoal");
             
            for(var i = 2, length = elements.length; i < length; i++) {
                if( elements[i].checked == true){
                    elements[i].checked = false;
       } 
    }
    
     var elements = document.getElementsByClassName("nameOfPlayer");
             
            for(var i = 2, length = elements.length; i < length; i++) {
                if( elements[i].selectedIndex != 0){
                    elements[i].selectedIndex = 0;
       } 
    }
    
    
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
       
        var elements = document.getElementsByClassName("owngoal");
             
            for(var i = 3, length = elements.length; i < length; i++) {
                if( elements[i].checked == true){
                    elements[i].checked = false;
       } 
    }
    
     var elements = document.getElementsByClassName("nameOfPlayer");
             
            for(var i = 3, length = elements.length; i < length; i++) {
                if( elements[i].selectedIndex != 0){
                    elements[i].selectedIndex = 0;
       } 
    }
    
    
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
       
        var elements = document.getElementsByClassName("owngoal");
             
            for(var i = 4, length = elements.length; i < length; i++) {
                if( elements[i].checked == true){
                    elements[i].checked = false;
       } 
    }
    
     var elements = document.getElementsByClassName("nameOfPlayer");
             
            for(var i = 4, length = elements.length; i < length; i++) {
                if( elements[i].selectedIndex != 0){
                    elements[i].selectedIndex = 0;
       } 
    }
    
    
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
       
        var elements = document.getElementsByClassName("owngoal");
             
            for(var i = 5, length = elements.length; i < length; i++) {
                if( elements[i].checked == true){
                    elements[i].checked = false;
       } 
    }
    
     var elements = document.getElementsByClassName("nameOfPlayer");
             
            for(var i = 5, length = elements.length; i < length; i++) {
                if( elements[i].selectedIndex != 0){
                    elements[i].selectedIndex = 0;
       } 
    }
    
    
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
       
        var elements = document.getElementsByClassName("owngoal");
             
            for(var i = 6, length = elements.length; i < length; i++) {
                if( elements[i].checked == true){
                    elements[i].checked = false;
       } 
    }
    
     var elements = document.getElementsByClassName("nameOfPlayer");
             
            for(var i = 6, length = elements.length; i < length; i++) {
                if( elements[i].selectedIndex != 0){
                    elements[i].selectedIndex = 0;
       } 
    }
    
    
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
      
       var elements = document.getElementsByClassName("owngoal");
             
            for(var i = 7, length = elements.length; i < length; i++) {
                if( elements[i].checked == true){
                    elements[i].checked = false;
       } 
    }
    
     var elements = document.getElementsByClassName("nameOfPlayer");
             
            for(var i = 7, length = elements.length; i < length; i++) {
                if( elements[i].selectedIndex != 0){
                    elements[i].selectedIndex = 0;
       } 
    }
    
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
      
       var elements = document.getElementsByClassName("owngoal");
             
            for(var i = 8, length = elements.length; i < length; i++) {
                if( elements[i].checked == true){
                    elements[i].checked = false;
       } 
    }
    
     var elements = document.getElementsByClassName("nameOfPlayer");
             
            for(var i = 8, length = elements.length; i < length; i++) {
                if( elements[i].selectedIndex != 0){
                    elements[i].selectedIndex = 0;
       } 
    }
    
    
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
      
       var elements = document.getElementsByClassName("owngoal");
             
            for(var i = 9, length = elements.length; i < length; i++) {
                if( elements[i].checked == true){
                    elements[i].checked = false;
       } 
    }
    
     var elements = document.getElementsByClassName("nameOfPlayer");
             
            for(var i = 9, length = elements.length; i < length; i++) {
                if( elements[i].selectedIndex != 0){
                    elements[i].selectedIndex = 0;
       } 
    }
    
    
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
      
       var elements = document.getElementsByClassName("owngoal");
             
            for(var i = 10, length = elements.length; i < length; i++) {
                if( elements[i].checked == true){
                    elements[i].checked = false;
       } 
    }
    
    var elements = document.getElementsByClassName("nameOfPlayer");
             
            for(var i = 10, length = elements.length; i < length; i++) {
                if( elements[i].selectedIndex != 0){
                    elements[i].selectedIndex = 0;
       } 
    }
    
    }
}
   
document.getElementsByName("input1")[0].addEventListener('change', addGoalScorer());
document.getElementsByName("input2")[1].addEventListener('change', addbookingScorer());



function addbookingScorer() {
  if (document.getElementById("numberOfBookings").value == 0 ) {
    document.getElementById('bookingScorerDiv1').style.display = "none";
      document.getElementById('bookingScorerDiv2').style.display = "none";
        document.getElementById('bookingScorerDiv3').style.display = "none";
          document.getElementById('bookingScorerDiv4').style.display = "none";
            document.getElementById('bookingScorerDiv5').style.display = "none";
            
             var elements = document.getElementsByClassName("yellowCard");
             
            for(var i = 0, length = elements.length; i < length; i++) {
                if( elements[i].checked == true){
                    elements[i].checked = false;
       } 
    }
    
    var elements = document.getElementsByClassName("redcards");
             
            for(var i = 0, length = elements.length; i < length; i++) {
                if( elements[i].checked == true){
                    elements[i].checked = false;
       } 
    }
    
    var elements = document.getElementsByClassName("nameOfPlayer2");
             
            for(var i = 0, length = elements.length; i < length; i++) {
                if( elements[i].selectedIndex != 0){
                    elements[i].selectedIndex = 0;
       } 
    }
        }
  if (document.getElementById("numberOfBookings").value == 1 ) {
    document.getElementById('bookingScorerDiv1').style.display = "block";
      document.getElementById('bookingScorerDiv2').style.display = "none";
        document.getElementById('bookingScorerDiv3').style.display = "none";
          document.getElementById('bookingScorerDiv4').style.display = "none";
            document.getElementById('bookingScorerDiv5').style.display = "none";
            
                 var elements = document.getElementsByClassName("yellowCard");
             
            for(var i = 1, length = elements.length; i < length; i++) {
                if( elements[i].checked == true){
                    elements[i].checked = false;
       } 
    }
    
    var elements = document.getElementsByClassName("redcards");
             
            for(var i = 1, length = elements.length; i < length; i++) {
                if( elements[i].checked == true){
                    elements[i].checked = false;
       } 
    }
    
    var elements = document.getElementsByClassName("nameOfPlayer2");
             
            for(var i = 1, length = elements.length; i < length; i++) {
                if( elements[i].selectedIndex != 0){
                    elements[i].selectedIndex = 0;
       } 
    }
            
  } if (document.getElementById("numberOfBookings").value == 2 ) {
    document.getElementById('bookingScorerDiv1').style.display = "block";
    document.getElementById('bookingScorerDiv2').style.display = "block";
      document.getElementById('bookingScorerDiv3').style.display = "none";
        document.getElementById('bookingScorerDiv4').style.display = "none";
          document.getElementById('bookingScorerDiv5').style.display = "none";
          
               var elements = document.getElementsByClassName("yellowCard");
             
            for(var i = 2, length = elements.length; i < length; i++) {
                if( elements[i].checked == true){
                    elements[i].checked = false;
       } 
    }
    
    var elements = document.getElementsByClassName("redcards");
             
            for(var i = 2, length = elements.length; i < length; i++) {
                if( elements[i].checked == true){
                    elements[i].checked = false;
       } 
    }
    
    var elements = document.getElementsByClassName("nameOfPlayer2");
             
            for(var i = 2, length = elements.length; i < length; i++) {
                if( elements[i].selectedIndex != 0){
                    elements[i].selectedIndex = 0;
       } 
    }
          
  } if (document.getElementById("numberOfBookings").value == 3) {
      document.getElementById('bookingScorerDiv1').style.display = "block";
        document.getElementById('bookingScorerDiv2').style.display = "block";
          document.getElementById('bookingScorerDiv3').style.display = "block";
            document.getElementById('bookingScorerDiv4').style.display = "none";
              document.getElementById('bookingScorerDiv5').style.display = "none";
              
                   var elements = document.getElementsByClassName("yellowCard");
             
            for(var i = 3, length = elements.length; i < length; i++) {
                if( elements[i].checked == true){
                    elements[i].checked = false;
       } 
    }
    
    var elements = document.getElementsByClassName("redcards");
             
            for(var i = 3, length = elements.length; i < length; i++) {
                if( elements[i].checked == true){
                    elements[i].checked = false;
       } 
    }
    
    var elements = document.getElementsByClassName("nameOfPlayer2");
             
            for(var i = 3, length = elements.length; i < length; i++) {
                if( elements[i].selectedIndex != 0){
                    elements[i].selectedIndex = 0;
       } 
    }
              
  }  if (document.getElementById("numberOfBookings").value == 4) {
    document.getElementById('bookingScorerDiv1').style.display = "block";
      document.getElementById('bookingScorerDiv2').style.display = "block";
        document.getElementById('bookingScorerDiv3').style.display = "block";
          document.getElementById('bookingScorerDiv4').style.display = "block";
            document.getElementById('bookingScorerDiv5').style.display = "none";
            
                 var elements = document.getElementsByClassName("yellowCard");
             
            for(var i = 4, length = elements.length; i < length; i++) {
                if( elements[i].checked == true){
                    elements[i].checked = false;
       } 
    }
    
    var elements = document.getElementsByClassName("redcards");
             
            for(var i = 4, length = elements.length; i < length; i++) {
                if( elements[i].checked == true){
                    elements[i].checked = false;
       } 
    }
    
    var elements = document.getElementsByClassName("nameOfPlayer2");
             
            for(var i = 4, length = elements.length; i < length; i++) {
                if( elements[i].selectedIndex != 0){
                    elements[i].selectedIndex = 0;
       } 
    }
            
  } if (document.getElementById("numberOfBookings").value == 5) {
    document.getElementById('bookingScorerDiv1').style.display = "block";
      document.getElementById('bookingScorerDiv2').style.display = "block";
        document.getElementById('bookingScorerDiv3').style.display = "block";
          document.getElementById('bookingScorerDiv4').style.display = "block";
            document.getElementById('bookingScorerDiv5').style.display = "block";
            
                 var elements = document.getElementsByClassName("yellowCard");
             
            for(var i = 5, length = elements.length; i < length; i++) {
                if( elements[i].checked == true){
                    elements[i].checked = false;
       } 
    }
    
    var elements = document.getElementsByClassName("redcards");
             
            for(var i = 5, length = elements.length; i < length; i++) {
                if( elements[i].checked == true){
                    elements[i].checked = false;
       } 
    }
    
    var elements = document.getElementsByClassName("nameOfPlayer2");
             
            for(var i = 5, length = elements.length; i < length; i++) {
                if( elements[i].selectedIndex != 0){
                    elements[i].selectedIndex = 0;
       } 
    }

  }

}





  </script>
  
</head>
<body background="football1.jpg">

<form method="post">
<div class="formBox" id="adminForm2">
 <label>Valitse maalintekijät ja varoitusten saajat</label>
  <!-- maalintekijät -->
  <h1>Maalintekijät</h1>
  <label>Maalien määrä pelissä</label>
  <br>
 <input id="numberOfGoals" class ="adminInputNumberField" onchange="addGoalScorer()" name="input1" type="number" min="0" max="10">
  <br>
  <br>
<div>
 
   
 
</div>



<div id="goalScorerDiv1" class="goalScorerDiv">
  
    <h1>Maalintekijä</h1>
  
    <?php
$sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result = $mysqli->query($sql);

echo "<select name='maalintekija1' class='nameOfPlayer'>";
echo "<option value='0' selected='selected' disabled>"."Valitse Pelaaja". "</option>";
while ($row = mysqli_fetch_array($result)) {
 
  echo "<option value='" . $row['EtuNimi']." ". $row['Sukunimi'] . "'>" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
<br>
<input type="checkbox" id="owngoal1" class="owngoal" value="owngoal"> oma maali<br>

<hr>
</div>

<div id="goalScorerDiv2" class="goalScorerDiv">
 
    <h1>Maalintekijä</h1>
  
    <?php
$sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result = $mysqli->query($sql);

echo "<select name='maalintekija2' class='nameOfPlayer'>";
echo "<option value='0' selected='selected' disabled>"."Valitse Pelaaja". "</option>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']." ". $row['Sukunimi'] . "'>" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
<br>
<input type="checkbox" id="owngoal2" class="owngoal" value="owngoal"> oma maali<br>

<hr>
</div>

<div id="goalScorerDiv3" class="goalScorerDiv">
   
    <h1>Maalintekijä</h1>
  
    <?php
$sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result = $mysqli->query($sql);

echo "<select name='maalintekija3' class='nameOfPlayer'>";
echo "<option value='0' selected='selected' disabled>"."Valitse Pelaaja". "</option>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']." ". $row['Sukunimi'] . "'>" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
<br>
<input type="checkbox" id="owngoal3" class="owngoal" value="owngoal"> oma maali<br>
<hr>
</div>

<div id="goalScorerDiv4" class="goalScorerDiv">
    
    <h1>Maalintekijä</h1>
  
    <?php
$sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result = $mysqli->query($sql);

echo "<select name='maalintekija4' class='nameOfPlayer'>";
echo "<option value='0' selected='selected' disabled>"."Valitse Pelaaja". "</option>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']." ". $row['Sukunimi'] . "'>" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
<br>
<input type="checkbox" id="owngoal4" class="owngoal" value="owngoal"> oma maali<br>
<hr>
</div>

<div id="goalScorerDiv5" class="goalScorerDiv">
    
    <h1>Maalintekijä</h1>
  
    <?php
$sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result = $mysqli->query($sql);

echo "<select name='maalintekija5' class='nameOfPlayer'>";
echo "<option value='0' selected='selected' disabled>"."Valitse Pelaaja". "</option>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']." ". $row['Sukunimi'] . "'>" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
<br>
<input type="checkbox" id="owngoal5" class="owngoal" value="owngoal"> oma maali<br>
<hr>
</div>

<div id="goalScorerDiv6" class="goalScorerDiv">
    
    <h1>Maalintekijä</h1>
  
    <?php
$sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result = $mysqli->query($sql);

echo "<select name='EtuNimi' class='nameOfPlayer'>";
echo "<option value='0' selected='selected' disabled>"."Valitse Pelaaja". "</option>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']." ". $row['Sukunimi'] . "'>" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
<hr>
<br>
<input type="checkbox" id="owngoal6" class="owngoal" value="owngoal"> oma maali<br>
</div>

<div id="goalScorerDiv7" class="goalScorerDiv">
    
    <h1>Maalintekijä</h1>
  
    <?php
$sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result = $mysqli->query($sql);

echo "<select name='EtuNimi' class='nameOfPlayer'>";
echo "<option value='0' selected='selected' disabled>"."Valitse Pelaaja". "</option>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']." ". $row['Sukunimi'] . "'>" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
<hr>
<br>
<input type="checkbox" id="owngoal7" class="owngoal" value="owngoal"> oma maali<br>
</div>

<div id="goalScorerDiv8" class="goalScorerDiv">
    
    <h1>Maalintekijä</h1>
  
    <?php
$sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result = $mysqli->query($sql);

echo "<select name='EtuNimi' class='nameOfPlayer'>";
echo "<option value='0' selected='selected' disabled>"."Valitse Pelaaja". "</option>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']." ". $row['Sukunimi'] . "'>" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
<hr>
<br>
<input type="checkbox" id="owngoal8" class="owngoal" value="owngoal"> oma maali<br>
</div>

<div id="goalScorerDiv9" class="goalScorerDiv">
    
    <h1>Maalintekijä</h1>
  
    <?php
$sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result = $mysqli->query($sql);

echo "<select name='EtuNimi' class='nameOfPlayer'>";
echo "<option value='0' selected='selected' disabled>"."Valitse Pelaaja". "</option>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']." ". $row['Sukunimi'] . "'>" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
<hr>
<br>
<input type="checkbox" id="owngoal9" class="owngoal" value="owngoal"> oma maali<br>
</div>

<div id="goalScorerDiv10" class="goalScorerDiv">
    
    <h1>Maalintekijä</h1>
  
    <?php
$sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result = $mysqli->query($sql);

echo "<select name='EtuNimi' class='nameOfPlayer'>";
echo "<option value='0' selected='selected' disabled>"."Valitse Pelaaja". "</option>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']." ". $row['Sukunimi'] . "'>" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
<br>
<input type="checkbox" id="owngoal10" class="owngoal" value="owngoal"> oma maali<br>
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

echo "<select name='EtuNimi' class='nameOfPlayer2'>";
echo "<option value='0' selected='selected' disabled>"."Valitse Pelaaja". "</option>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']." ". $row['Sukunimi'] . "'>" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
  <br>


  <input type="radio" onclick="yellowCardRadioButton()" value="yellowCard" id="yellowCard1" class="yellowcard" name="Card1"> Keltainen kortti <br>
  <input type="radio" onclick="redCardRadioButton()" value="redCard" id="redCard1" class="redcards" name="Card1"> Punainen kortti <br>

  <hr>


  </div>
  
  <!-- wrongdoer2 -->
  <div id="bookingScorerDiv2" class="wrongDoerDiv">
    
    <h1>Varoituksen saaja</h1>
 <?php
$sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result = $mysqli->query($sql);

echo "<select name='EtuNimi' class='nameOfPlayer2'>";
echo "<option selected='selected' disabled>"."Valitse Pelaaja". "</option>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']." ". $row['Sukunimi'] . "'>" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
  <br>


  <input type="radio" onclick="yellowCardRadioButton()" value="yellowCard" id="yellowCard2" class="yellowcard" name="Card2"> Keltainen kortti <br>
  <input type="radio" onclick="redCardRadioButton()" value="redCard" id="redCard2" class="redcards" name="Card2"> Punainen kortti <br>

  <hr>


  </div>
 
 
 <!-- wrongdoer3 -->
  <div id="bookingScorerDiv3" class="wrongDoerDiv">
    
    <h1>Varoituksen saaja</h1>
 <?php
$sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result = $mysqli->query($sql);

echo "<select name='EtuNimi' class='nameOfPlayer2'>";
echo "<option value='0' selected='selected' disabled>"."Valitse Pelaaja". "</option>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']." ". $row['Sukunimi'] . "'>" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
  <br>


  <input type="radio" onclick="yellowCardRadioButton()" value="yellowCard" id="yellowCard3" class="yellowcard" name="Card3"> Keltainen kortti <br>
  <input type="radio" onclick="redCardRadioButton()" value="redCard" id="redCard3" class="redcards" name="Card3"> Punainen kortti <br>

  <hr>


  </div>
 
 
 <!-- wrongdoer4 -->
  <div id="bookingScorerDiv4" class="wrongDoerDiv">
    
    <h1>Varoituksen saaja</h1>
 <?php
$sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result = $mysqli->query($sql);

echo "<select name='EtuNimi' class='nameOfPlayer2'>";
echo "<option value='0' selected='selected' disabled>"."Valitse Pelaaja". "</option>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']." ". $row['Sukunimi'] . "'>" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
  <br>


  <input type="radio" onclick="yellowCardRadioButton()" value="yellowCard" id="yellowCard4" class="yellowcard"  name="Card4"> Keltainen kortti <br>
  <input type="radio" onclick="redCardRadioButton()" value="redCard" id="redCard4" class="redcards" name="Card4"> Punainen kortti <br>

  <hr>


  </div>
 
 
 <!-- wrongdoer5 -->
  <div id="bookingScorerDiv5" class="wrongDoerDiv">
    
    <h1>Varoituksen saaja</h1>
 <?php
$sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result = $mysqli->query($sql);

echo "<select name='EtuNimi' class='nameOfPlayer2'>";
echo "<option value='0' selected='selected' disabled>"."Valitse Pelaaja". "</option>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']." ". $row['Sukunimi'] . "'>" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
  <br>


  <input type="radio" onclick="yellowCardRadioButton()" value="yellowCard" id="yellowCard5" class="yellowcard" name="Card5"> Keltainen kortti <br>
  <input type="radio" onclick="redCardRadioButton()" value="redCard" id="redCard5" class="redcards" name="Card5"> Punainen kortti <br>

  <hr>


  </div>
 
 <br>
 <label>Ottelun päivämäärä</label>
    <br>
   <input type="date" class="form-control"id="pvm" name="pvm">
   <br>
    <button type="submit" class="btn btn-primary formButton" name="adminSubmit">Submit</button>
   <br>
 
  </div>
   
  </div>
</form>




</div>
</div>



<?php include 'adminformPHP.php';  ?>

</body>