<?php
session_start();
include_once 'login.php';
include_once 'config.php';




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


function validateForm() {
    

    
    //virheiden saajien validointi
    if(document.getElementById("bookingScorerDiv1").style.display == "block") {
  var x = document.forms["adminform"]["virheensaaja1"].value;
  var y = document.getElementById("yellowCard1");
  var z = document.getElementById("redCard1");
  if (x == "") {
    alert("valitse varoituksensaaja");
    return false;
  }
  if (y.checked == false && z.checked == false) {
    alert("valitse korttityyppi");
    return false;
  }
  
    }
    
     if(document.getElementById("bookingScorerDiv2").style.display == "block") {
 var x1 = document.forms["adminform"]["virheensaaja2"].value;
  var y1 = document.getElementById("yellowCard2");
  var z1 = document.getElementById("redCard2");
  if (x1 == "") {
    alert("valitse varoituksensaaja");
    return false;
  }
  if (y1.checked == false && z1.checked == false) {
    alert("valitse korttityyppi");
    return false;
  }
    }
    
     if(document.getElementById("bookingScorerDiv3").style.display == "block") {
  var x2 = document.forms["adminform"]["virheensaaja3"].value;
  var y2 = document.getElementById("yellowCard3");
  var z2 = document.getElementById("redCard3");
  if (x2 == "") {
    alert("valitse varoituksensaaja");
    return false;
  }
  if (y2.checked == false && z2.checked == false) {
    alert("valitse korttityyppi");
    return false;
  }
    }
    
     if(document.getElementById("bookingScorerDiv4").style.display == "block") {
  var x3 = document.forms["adminform"]["virheensaaja4"].value;
  var x3 = document.getElementById("yellowCard4");
  var z3 = document.getElementById("redCard4");
  if (x3 == "") {
    alert("valitse varoituksensaaja");
    return false;
  }
  if (y3.checked == false && z3.checked == false) {
    alert("valitse korttityyppi");
    return false;
  }
    }
    
     if(document.getElementById("bookingScorerDiv5").style.display == "block") {
  var x4 = document.forms["adminform"]["virheensaaja5"].value;
  var y4 = document.getElementById("yellowCard5");
  var z4 = document.getElementById("redCard5");
  if (x4 == "") {
    alert("valitse varoituksensaaja");
    return false;
  }
  if (y4.checked == false && z4.checked == false) {
    alert("valitse korttityyppi");
    return false;
  }
    }
    
    
    //maalintekijöiden validointi
    if(document.getElementById("goalScorerDiv1").style.display == "block") {
  var x = document.forms["adminform"]["maalintekija1"].value;
  if (x == "") {
    alert("valitse maalintekijä");
    return false;
  }
    }
    
     if(document.getElementById("goalScorerDiv2").style.display == "block") {
  var x = document.forms["adminform"]["maalintekija2"].value;
  if (x == "") {
    alert("valitse maalintekijä");
    return false;
  }
    }
    
     if(document.getElementById("goalScorerDiv3").style.display == "block") {
  var x = document.forms["adminform"]["maalintekija3"].value;
  if (x == "") {
    alert("valitse maalintekijä");
    return false;
  }
    }
    
     if(document.getElementById("goalScorerDiv4").style.display == "block") {
  var x = document.forms["adminform"]["maalintekija4"].value;
  if (x == "") {
    alert("valitse maalintekijä");
    return false;
  }
    }
    
     if(document.getElementById("goalScorerDiv5").style.display == "block") {
  var x = document.forms["adminform"]["maalintekija5"].value;
  if (x == "") {
    alert("valitse maalintekijä");
    return false;
  }
    }
    
     if(document.getElementById("goalScorerDiv6").style.display == "block") {
  var x = document.forms["adminform"]["maalintekija6"].value;
  if (x == "") {
    alert("valitse maalintekijä");
    return false;
  }
    }
    
     if(document.getElementById("goalScorerDiv7").style.display == "block") {
  var x = document.forms["adminform"]["maalintekija7"].value;
  if (x == "") {
    alert("valitse maalintekijä");
    return false;
  }
    }
    
     if(document.getElementById("goalScorerDiv8").style.display == "block") {
  var x = document.forms["adminform"]["maalintekija8"].value;
  if (x == "") {
    alert("valitse maalintekijä");
    return false;
  }
    }
    
     if(document.getElementById("goalScorerDiv9").style.display == "block") {
  var x = document.forms["adminform"]["maalintekija9"].value;
  if (x == "") {
    alert("valitse maalintekijä");
    return false;
  }
    }
    
     if(document.getElementById("goalScorerDiv10").style.display == "block") {
  var x = document.forms["adminform"]["maalintekija10"].value;
  if (x == "") {
    alert("valitse maalintekijä");
    return false;
  }
    }
    
}


  </script>
  
</head>
<body background="football1.jpg">
<button onclick="adminLogOut()" class="btn btn-primary" id="logOutButton" name="logOutForm"> Kirjaudu Ulos</button>
<form method="POST" name="adminform" onsubmit="return validateForm()">
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
   
$sql501 = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result501 = $mysqli->query($sql501);

echo "<select name='maalintekija1' class='nameOfPlayer'>";
echo "<option value='' selected='selected' disabled>"."Valitse Pelaaja". "</option>";
while ($row = mysqli_fetch_array($result501)) {
 
  echo "<option value='".$row['EtuNimi']."'".">" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
<br>
<input type="checkbox" name="owngoal1" id="owngoal1" class="owngoal" value="owngowal"> oma maali<br>

<hr>
</div>

<div id="goalScorerDiv2" class="goalScorerDiv">
 
    <h1>Maalintekijä</h1>
  
    <?php
$sql502 = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result502 = $mysqli->query($sql502);

echo "<select name='maalintekija2' class='nameOfPlayer'>";
echo "<option value='' selected='selected' disabled>"."Valitse Pelaaja". "</option>";
while ($row = mysqli_fetch_array($result502)) {
  echo "<option value='".$row['EtuNimi']."'".">". $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
<br>
<input type="checkbox" name="owngoal2" id="owngoal2" class="owngoal" value="owngoal"> oma maali<br>

<hr>
</div>

<div id="goalScorerDiv3" class="goalScorerDiv">
   
    <h1>Maalintekijä</h1>
  
    <?php
$sql503 = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result503 = $mysqli->query($sql503);

echo "<select name='maalintekija3' class='nameOfPlayer'>";
echo "<option value='' selected='selected' disabled>"."Valitse Pelaaja". "</option>";
while ($row = mysqli_fetch_array($result503)) {
  echo "<option value='".$row['EtuNimi']."'".">" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
<br>
<input type="checkbox" name="owngoal3" id="owngoal3" class="owngoal" value="owngoal"> oma maali<br>
<hr>
</div>

<div id="goalScorerDiv4" class="goalScorerDiv">
    
    <h1>Maalintekijä</h1>
  
    <?php
$sql504 = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result504 = $mysqli->query($sql504);

echo "<select name='maalintekija4' class='nameOfPlayer'>";
echo "<option value='' selected='selected' disabled>"."Valitse Pelaaja". "</option>";
while ($row = mysqli_fetch_array($result504)) {
  echo "<option value='".$row['EtuNimi']."'".">" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
<br>
<input type="checkbox" name="owngoal4" id="owngoal4" class="owngoal" value="owngoal"> oma maali<br>
<hr>
</div>

<div id="goalScorerDiv5" class="goalScorerDiv">
    
    <h1>Maalintekijä</h1>
  
    <?php
$sql505 = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result505 = $mysqli->query($sql505);

echo "<select name='maalintekija5' class='nameOfPlayer'>";
echo "<option value='' selected='selected' disabled>"."Valitse Pelaaja". "</option>";
while ($row = mysqli_fetch_array($result505)) {
  echo "<option value='".$row['EtuNimi']."'".">" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
<br>
<input type="checkbox" name="owngoal5" id="owngoal5" class="owngoal" value="owngoal"> oma maali<br>
<hr>
</div>

<div id="goalScorerDiv6" class="goalScorerDiv">
    
    <h1>Maalintekijä</h1>
  
    <?php
$sql506 = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result506 = $mysqli->query($sql506);

echo "<select name='maalintekija6' class='nameOfPlayer'>";
echo "<option value='' selected='selected' disabled>"."Valitse Pelaaja". "</option>";
while ($row = mysqli_fetch_array($result506)) {
  echo "<option value='".$row['EtuNimi']."'".">" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
<br>
<input type="checkbox" name="owngoal6" id="owngoal6" class="owngoal" value="owngoal"> oma maali<br>
<hr>
</div>

<div id="goalScorerDiv7" class="goalScorerDiv">
    
    <h1>Maalintekijä</h1>
  
    <?php
$sql507 = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result507 = $mysqli->query($sql507);

echo "<select name='maalintekija7' class='nameOfPlayer'>";
echo "<option value='' selected='selected' disabled>"."Valitse Pelaaja". "</option>";
while ($row = mysqli_fetch_array($result507)) {
  echo "<option value='".$row['EtuNimi']."'".">" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>

<br>
<input type="checkbox" name="owngoal7" id="owngoal7" class="owngoal" value="owngoal"> oma maali<br>
<hr>
</div>

<div id="goalScorerDiv8" class="goalScorerDiv">
    
    <h1>Maalintekijä</h1>
  
    <?php
$sql508 = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result508 = $mysqli->query($sql508);

echo "<select name='maalintekija8' class='nameOfPlayer'>";
echo "<option value='' selected='selected' disabled>"."Valitse Pelaaja". "</option>";
while ($row = mysqli_fetch_array($result508)) {
  echo "<option value='".$row['EtuNimi']."'".">". $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>

<br>
<input type="checkbox" name="owngoal8" id="owngoal8" class="owngoal" value="owngoal"> oma maali<br>
<hr>
</div>

<div id="goalScorerDiv9" class="goalScorerDiv">
    
    <h1>Maalintekijä</h1>
  
    <?php
$sql509 = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result509 = $mysqli->query($sql509);

echo "<select name='maalintekija9' class='nameOfPlayer'>";
echo "<option value='' selected='selected' disabled>"."Valitse Pelaaja". "</option>";
while ($row = mysqli_fetch_array($result509)) {
  echo "<option value='".$row['EtuNimi']."'".">" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
<br>
<input type="checkbox" name="owngoal9" id="owngoal9" class="owngoal" value="owngoal"> oma maali<br>
<hr>
</div>

<div id="goalScorerDiv10" class="goalScorerDiv">
    
    <h1>Maalintekijä</h1>
  
    <?php
$sql510 = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result510 = $mysqli->query($sql510);

echo "<select name='maalintekija10' class='nameOfPlayer'>";
echo "<option value='' selected='selected' disabled>"."Valitse Pelaaja". "</option>";
while ($row = mysqli_fetch_array($result510)) {
  echo "<option value='".$row['EtuNimi']."'".">" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
<br>
<input type="checkbox" name="owngoal10" id="owngoal10" class="owngoal" value="owngoal"> oma maali<br>
<hr>
</div>




<!-- bookings -->
<div>
<h1>Varoitukset</h1>
<label>Varoitusten määrä pelissä</label>
<br>
<input id="numberOfBookings" class ="adminInputNumberField" onchange="addbookingScorer()" name="input2" type="number" min="0" max="5">
</div>

<!-- wrongdoer1 -->
  <div id="bookingScorerDiv1" class="wrongDoerDiv">
    
    <h1>Varoituksen saaja</h1>
 <?php
$sql721 = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result721 = $mysqli->query($sql721);

echo "<select name='virheensaaja1' class='nameOfPlayer2'>";
echo "<option value='' selected='selected' disabled>"."Valitse Pelaaja". "</option>";
while ($row = mysqli_fetch_array($result721)) {
  echo "<option value='".$row['EtuNimi']."'".">" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
  <br>


  <input type="radio" onclick="yellowCardRadioButton()" value="yellowCard" id="yellowCard1" class="yellowcard" name="Card1"> Keltainen kortti <br>
  <input type="radio" onclick="redCardRadioButton()" value="redCard" id="redCard1" class="redcards" name="Card11"> Punainen kortti <br>

  <hr>


  </div>
  
  <!-- wrongdoer2 -->
  <div id="bookingScorerDiv2" class="wrongDoerDiv">
    
    <h1>Varoituksen saaja</h1>
 <?php
$sql722 = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result722= $mysqli->query($sql722);

echo "<select name='virheensaaja2' class='nameOfPlayer2'>";
echo "<option value='' selected='selected' disabled>"."Valitse Pelaaja". "</option>";
while ($row = mysqli_fetch_array($result722)) {
  echo "<option value='".$row['EtuNimi']."'".">" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
  <br>


  <input type="radio" onclick="yellowCardRadioButton()" value="yellowCard" id="yellowCard2" class="yellowcard" name="Card2"> Keltainen kortti <br>
  <input type="radio" onclick="redCardRadioButton()" value="redCard" id="redCard2" class="redcards" name="Card22"> Punainen kortti <br>

  <hr>


  </div>
 
 
 <!-- wrongdoer3 -->
  <div id="bookingScorerDiv3" class="wrongDoerDiv">
    
    <h1>Varoituksen saaja</h1>
 <?php
$sql723 = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result723 = $mysqli->query($sql723);

echo "<select name='virheensaaja3' class='nameOfPlayer2'>";
echo "<option value='' selected='selected' disabled>"."Valitse Pelaaja". "</option>";
while ($row = mysqli_fetch_array($result723)) {
  echo "<option value='".$row['EtuNimi']."'".">" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
  <br>


  <input type="radio" onclick="yellowCardRadioButton()" value="yellowCard" id="yellowCard3" class="yellowcard" name="Card3"> Keltainen kortti <br>
  <input type="radio" onclick="redCardRadioButton()" value="redCard" id="redCard3" class="redcards" name="Card33"> Punainen kortti <br>

  <hr>


  </div>
 
 
 <!-- wrongdoer4 -->
  <div id="bookingScorerDiv4" class="wrongDoerDiv">
    
    <h1>Varoituksen saaja</h1>
 <?php
$sql724 = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result724 = $mysqli->query($sql724);

echo "<select name='virheensaaja4' class='nameOfPlayer2'>";
echo "<option value='' selected='selected' disabled>"."Valitse Pelaaja". "</option>";
while ($row = mysqli_fetch_array($result724)) {
  echo "<option value='".$row['EtuNimi']."'".">" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
  <br>


  <input type="radio" onclick="yellowCardRadioButton()" value="yellowCard" id="yellowCard4" class="yellowcard"  name="Card4"> Keltainen kortti <br>
  <input type="radio" onclick="redCardRadioButton()" value="redCard" id="redCard4" class="redcards" name="Card44"> Punainen kortti <br>

  <hr>


  </div>
 
 
 <!-- wrongdoer5 -->
  <div id="bookingScorerDiv5" class="wrongDoerDiv">
    
    <h1>Varoituksen saaja</h1>
 <?php
$sql725 = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID =  ".$_SESSION['kotijoukkue']." "."OR"." "."JoukkueID = ".$_SESSION['vierasjoukkue'];
$result725 = $mysqli->query($sql725);

echo "<select name='virheensaaja5' class='nameOfPlayer2'>";
echo "<option value='' selected='selected' disabled>"."Valitse Pelaaja". "</option>";
while ($row = mysqli_fetch_array($result725)) {
  echo "<option value='".$row['EtuNimi']."'".">" . $row['EtuNimi']." ". $row['Sukunimi']. "</option>";
}
echo "</select>";
?>
  <br>


  <input type="radio" onclick="yellowCardRadioButton()" value="yellowCard" id="yellowCard5" class="yellowcard" name="Card5"> Keltainen kortti <br>
  <input type="radio" onclick="redCardRadioButton()" value="redCard" id="redCard5" class="redcards" name="Card55"> Punainen kortti <br>

  <hr>


  </div>
 
 <br>
 <label>Ottelun päivämäärä</label>
    <br>
   <input type="date" class="form-control" id="pvm" name="pvm" required>
   <br>
    <button type="submit" class="btn btn-primary formButton" name="adminSubmit">Submit</button>
   <br>
 
  </div>
   
  </div>
</form>




</div>
</div>


  <!-- pelilista -->


<?php
include 'adminformPHP.php';
?>
    





</body>