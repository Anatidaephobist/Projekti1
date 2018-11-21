<?php
session_start();
include_once 'login.php';
include_once 'config.php';



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="blur-svg">



<script>

var kirjautunut = "<?php echo $_SESSION['userIsAdmin']; ?>"




function LogOut() {
    "<?php $_SESSION['userIsAdmin'] = 0; ?>"
   kirjautunut = "<?php echo $_SESSION['userIsAdmin']; ?>";

   document.location.reload();
   document.getElementById("popUp").style.display = "block";
  document.getElementById("logInButton").style.display = "block";
  document.getElementById("logOutButton").style.display = "none";
  document.getElementById("ListOfGames").style.display = "none";
  document.getElementById("adminForm").style.display = "none";


}

function adminMode() {
    if(kirjautunut == 1) {
    document.getElementById("popUp").style.display = "none";
    document.getElementById("logInButton").style.display = "none";
    document.getElementById("logOutButton").style.display = "block";
    document.getElementById("popUpWrapper").style.display = "none";
    document.getElementById("ListOfGames").style.display = "block";



} else {
    document.getElementById("logInButton").style.display = "block";
     document.getElementById("logOutButton").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "block";
     document.getElementById("adminForm").style.display = "none";
     document.getElementById("adminForm2").style.display = "none";
     document.getElementById("ListOfGames").style.display = "none";
}

}

function  playerCardManchester() {

    document.getElementById("teamInfoBoxWrapperA").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers").style.display = "block";
     document.getElementById("playerInfoWrapperManchester").style.display = "block";
     document.getElementById("playerInfoWrapperBasel").style.display = "none";
     document.getElementById("playerInfoWrapperMoskva").style.display = "none";
     document.getElementById("playerInfoWrapperBelfica").style.display = "none";
}

function  playerCardBasel() {
      document.getElementById("teamInfoBoxWrapperA").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers").style.display = "block";
     document.getElementById("playerInfoWrapperBasel").style.display = "block";
     document.getElementById("playerInfoWrapperManchester").style.display = "none";
    document.getElementById("playerInfoWrapperMoskva").style.display = "none";
    document.getElementById("playerInfoWrapperBelfica").style.display = "none";

}

function  playerCardMoskva() {

    document.getElementById("teamInfoBoxWrapperA").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers").style.display = "block";
     document.getElementById("playerInfoWrapperMoskva").style.display = "block";
     document.getElementById("playerInfoWrapperManchester").style.display = "none";
      document.getElementById("playerInfoWrapperBelfica").style.display = "none";
      document.getElementById("playerInfoWrapperBasel").style.display = "none";
}

function  playerCardBelfica() {
      document.getElementById("teamInfoBoxWrapperA").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers").style.display = "block";
     document.getElementById("playerInfoWrapperBelfica").style.display = "block";
     document.getElementById("playerInfoWrapperBasel").style.display = "none";
     document.getElementById("playerInfoWrapperManchester").style.display = "none";
     document.getElementById("playerInfoWrapperMoskva").style.display = "none";


}


function closeLogIn() {
    document.getElementById("closeLogIn").style.display = "none";

}

function deleteGameQuestion() {
   document.getElementById("popUp3").style.display = "block";


}

function deleteGame() {
document.getElementById("popUp3").style.display = "none";

alert(<?php echo $_POST['gameToDelete']; ?>)
}




<?php
function databaseQuery($table, $column, $ID) {
	$value = "";
	global $mysqli;
	$sql = "SELECT " .$column. " FROM " .$table. " Where id = '".$ID."'";
		$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$value = $row[''.$column.''];
}
return $value;
}
} //end of function 'makeQuery'
?>


function showGroupA() {

     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("teamInfoBoxWrapperA").style.display = "block";
}

function showGroupB() {

     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("teamInfoBoxWrapperB").style.display = "block";
}






function showGroupC() {

     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("teamInfoBoxWrapperC").style.display = "block";
}


function showGroupD() {

     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("teamInfoBoxWrapperD").style.display = "block";
}

function showGroupE() {

     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("teamInfoBoxWrapperE").style.display = "block";

}

function showGroupF() {

     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("teamInfoBoxWrapperF").style.display = "block";

}

function showGroupG() {

     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("teamInfoBoxWrapperG").style.display = "block";
}

function showGroupH() {

     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("teamInfoBoxWrapperH").style.display = "block";

}


function openLogIn() {
    document.getElementById("logIn").style.display = "block";

}







function closePlayerInfo() {

    document.getElementById("popUp").style.display = "block";
     document.getElementById("popUp2").style.display = "block";
    document.getElementById("popUpWrapper").style.display = "block";
     document.getElementById("wrapperOfPlayers").style.display = "none";
     document.getElementById("playerInfoWrapperManchester").style.display = "none";
     document.getElementById("playerInfoWrapperBasel").style.display = "none";


}

function closeDelete() {
    document.getElementById("popUp3").style.display = "none";
}

function checkTeam() {

    var x = document.getElementById("koti").value;
    var y = document.getElementById("vieras").value;

    if (x == "Man united") {
       document.getElementById("manu").disabled = true;
       document.getElementById("basel").disabled = false;
       document.getElementById("moskva").disabled = false;
       document.getElementById("benfica").disabled = false;
    }

    if (y == "Man united") {
       document.getElementById("manu2").disabled = true;
       document.getElementById("basel2").disabled = false;
       document.getElementById("moskva2").disabled = false;
       document.getElementById("benfica2").disabled = false;
    }

    if (x == "BASEL") {
       document.getElementById("basel").disabled = true;
       document.getElementById("manu").disabled = false;
       document.getElementById("moskva").disabled = false;
       document.getElementById("benfica").disabled = false;
    }

    if (y == "BASEL") {
       document.getElementById("basel2").disabled = true;
       document.getElementById("manu2").disabled = false;
       document.getElementById("moskva2").disabled = false;
       document.getElementById("benfica2").disabled = false;
    }


    if (x == "CSKA Moskva") {
       document.getElementById("moskva").disabled = true;
       document.getElementById("manu").disabled = false;
       document.getElementById("basel").disabled = false;
       document.getElementById("benfica").disabled = false;
    }

     if (y == "CSKA Moskva") {
       document.getElementById("moskva2").disabled = true;
       document.getElementById("manu2").disabled = false;
       document.getElementById("basel2").disabled = false;
       document.getElementById("benfica2").disabled = false;
    }

     if (x == "Benfica") {
       document.getElementById("benfica").disabled = true;
       document.getElementById("manu").disabled = false;
       document.getElementById("basel").disabled = false;
       document.getElementById("moskva").disabled = false;

    }

     if (y == "Benfica") {
       document.getElementById("benfica2").disabled = true;
       document.getElementById("manu2").disabled = false;
       document.getElementById("basel2").disabled = false;
       document.getElementById("moskva2").disabled = false;

    }

}

function areYouSure() {
    document.getElementById("popUp4").style.display = "block";
     document.getElementById("popUp3").style.display = "none";
}

function goBack() {


    document.getElementById("popUpWrapper").style.display = "block";
    document.getElementById("teamInfoBoxWrapperA").style.display = "none";
    document.getElementById("teamInfoBoxWrapperB").style.display = "none";
    document.getElementById("teamInfoBoxWrapperC").style.display = "none";
    document.getElementById("teamInfoBoxWrapperD").style.display = "none";
    document.getElementById("teamInfoBoxWrapperE").style.display = "none";
    document.getElementById("teamInfoBoxWrapperF").style.display = "none";
    document.getElementById("teamInfoBoxWrapperG").style.display = "none";
    document.getElementById("teamInfoBoxWrapperH").style.display = "none";





}

function notSure() {
    document.getElementById("popUp4").style.display = "none";
}

</script>
<?php

$kirjautunut = $_SESSION['userIsAdmin'];



	function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}







?>


<title>Jalkapalloliiga</title>
</head>
<body background="football1.jpg" onload="adminMode()">

    <button onclick="openLogIn()" class="btn btn-primary" id="logInButton"> Kirjaudu</button>
    <button class="btn btn-primary backButton" onclick="goBack()"> takaisin</button>
    <form method="POST">
     <button onclick="LogOut()" class="btn btn-primary" id="logOutButton" name="logOutForm"> Kirjaudu Ulos</button>
    </form>
     <div id="logIn">

         <form method="POST">
             <label id="adminHeader"> Anna Admin tunnukset</label>
  <div class="form-group">

    <label for="exampleInputEmail1">Email address</label>
    <input type="email" method="POST" name="userEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="userPassword" placeholder="Password" required>
  </div>
  <div class="form-check">

  </div>
  <button type="submit" name="login" class="btn btn-primary" onclick="adminMode()">Kirjaudu</button>
  </form>
  <form method="POST">
  <button onclick="closeLogIn()" class="btn btn-primary cancel">Peruuta</button>
   </form>



     </div>

<div id="wrapperOfPlayers">


         <button onclick="closePlayerInfo()" class="btn btn-primary playerbutton"> takaisin</button>


       <!-- Manchester United team composition --->
<div id="playerInfoWrapperManchester">
<div class="teamInfoBox">

    <div class="playerImage">
     <img src="playerPics/daley.png" style="height:300px;width:250px;">

 </div>

 <div class="playerInfo fname ">
 <h1> Etunimi</h1>

  <?php
  $sql = "SELECT EtuNimi FROM Pelaajat Where id = '1'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["EtuNimi"];
    }
} else {
    echo "0 results";
}
 ?>
 </div>

 <div class="playerInfo lastname ">
 <h1> Sukunimi</h1>

 <?php
  $sql = "SELECT Sukunimi FROM Pelaajat Where id = '1'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Sukunimi"];
    }
} else {
    echo "0 results";
}
 ?>
 </div>
 <div class="playerInfo age ">
 <h1> Ikä</h1>

 <?php
  $sql = "SELECT Ika FROM Pelaajat Where id = '1'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Ika"];
    }
} else {
    echo "0 results";
}
 ?>
 </div>

<div class="playerInfo nationality ">
 <h1> Kansallisuus</h1>

  <?php
  $sql = "SELECT Kansallisuus FROM Pelaajat Where id = '1'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Kansallisuus"];
    }
} else {
    echo "0 results";
}
 ?>
 </div>
<div class="playerInfo playerGames ">
 <h1> Pelatut Pelit</h1>

 <?php
  $sql = "SELECT PelatutPelit FROM Pelaajat Where id = '1'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["PelatutPelit"];
    }
} else {
    echo "0 results";
}
 ?>
 </div>

 <div class="playerInfo madeGoals ">
 <h1> Maalit</h1>

  <?php
  $sql = "SELECT Maalit FROM Pelaajat Where id = '1'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Maalit"];
    }
} else {
    echo "0 results";
}
 ?>
</div>

<div class="playerInfo position">
 <h1> Pelipaikka</h1>

    <?php
  $sql = "SELECT Pelipaikka FROM Pelaajat Where id = '1'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Pelipaikka"];
    }
} else {
    echo "0 results";
}
 ?>
</div>

<div class="cards">
     <img src="yellow.png" class="card" style="height:50px;width:50px;">

 </div>

</div>














<!-- Henrikh Mkhitaryan  -->
<div class="teamInfoBox">


    <div class="playerImage">
     <img src="playerPics/mkhitaryan.png" style="height:300px;width:250px;">

 </div>




 <div class="playerInfo fname ">
 <h1> Etunimi</h1>

  <?php
  $sql = "SELECT EtuNimi FROM Pelaajat Where id = '21'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["EtuNimi"];
    }
} else {
    echo "0 results";
}
 ?>
 </div>

 <div class="playerInfo lastname ">
 <h1> Sukunimi</h1>

 <?php
  $sql = "SELECT Sukunimi FROM Pelaajat Where id = '21'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Sukunimi"];
    }
} else {
    echo "0 results";
}
 ?>
 </div>
 <div class="playerInfo age ">
 <h1> Ikä</h1>

 <?php
  $sql = "SELECT Ika FROM Pelaajat Where id = '21'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Ika"];
    }
} else {
    echo "0 results";
}
 ?>
 </div>

<div class="playerInfo nationality ">
 <h1> Kansallisuus</h1>

  <?php
  $sql = "SELECT Kansallisuus FROM Pelaajat Where id = '21'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Kansallisuus"];
    }
} else {
    echo "0 results";
}
 ?>
 </div>
<div class="playerInfo playerGames ">
 <h1> Pelatut Pelit</h1>

 <?php
  $sql = "SELECT PelatutPelit FROM Pelaajat Where id = '21'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["PelatutPelit"];
    }
} else {
    echo "0 results";
}
 ?>
 </div>

 <div class="playerInfo madeGoals ">
 <h1> Maalit</h1>

  <?php
  $sql = "SELECT Maalit FROM Pelaajat Where id = '21'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Maalit"];
    }
} else {
    echo "0 results";
}
 ?>
</div>

<div class="playerInfo position">
 <h1> Pelipaikka</h1>

    <?php
  $sql = "SELECT Pelipaikka FROM Pelaajat Where id = '21'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Pelipaikka"];
    }
} else {
    echo "0 results";
}
 ?>
</div>

<div class="cards">


 </div>





</div>

<!--  Marouane Fellaini -->
<div class="teamInfoBox">


    <div class="playerImage">
     <img src="playerPics/fellaini.png" style="height:300px;width:250px;">

 </div>




 <div class="playerInfo fname ">
 <h1> Etunimi</h1>

  <?php
  $sql = "SELECT EtuNimi FROM Pelaajat Where id = '22'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["EtuNimi"];
    }
} else {
    echo "0 results";
}
 ?>
 </div>

 <div class="playerInfo lastname ">
 <h1> Sukunimi</h1>

 <?php
  $sql = "SELECT Sukunimi FROM Pelaajat Where id = '22'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Sukunimi"];
    }
} else {
    echo "0 results";
}
 ?>
 </div>
 <div class="playerInfo age ">
 <h1> Ikä</h1>

 <?php
  $sql = "SELECT Ika FROM Pelaajat Where id = '22'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Ika"];
    }
} else {
    echo "0 results";
}
 ?>
 </div>

<div class="playerInfo nationality ">
 <h1> Kansallisuus</h1>

  <?php
  $sql = "SELECT Kansallisuus FROM Pelaajat Where id = '22'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Kansallisuus"];
    }
} else {
    echo "0 results";
}
 ?>
 </div>
<div class="playerInfo playerGames ">
 <h1> Pelatut Pelit</h1>

 <?php
  $sql = "SELECT PelatutPelit FROM Pelaajat Where id = '22'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["PelatutPelit"];
    }
} else {
    echo "0 results";
}
 ?>
 </div>

 <div class="playerInfo madeGoals ">
 <h1> Maalit</h1>

  <?php
  $sql = "SELECT Maalit FROM Pelaajat Where id = '22'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Maalit"];
    }
} else {
    echo "0 results";
}
 ?>
</div>

<div class="playerInfo position">
 <h1> Pelipaikka</h1>

    <?php
  $sql = "SELECT Pelipaikka FROM Pelaajat Where id = '22'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Pelipaikka"];
    }
} else {
    echo "0 results";
}
 ?>
</div>

<div class="cards">


 </div>





</div>







<!-- Romelu Lukaku  -->
<div class="teamInfoBox">


    <div class="playerImage">
     <img src="playerPics/lukaku.png" style="height:300px;width:250px;">

 </div>




 <div class="playerInfo fname ">
 <h1> Etunimi</h1>

  <?php
  $sql = "SELECT EtuNimi FROM Pelaajat Where id = '26'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["EtuNimi"];
    }
} else {
    echo "0 results";
}
 ?>
 </div>

 <div class="playerInfo lastname ">
 <h1> Sukunimi</h1>

 <?php
  $sql = "SELECT Sukunimi FROM Pelaajat Where id = '26'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Sukunimi"];
    }
} else {
    echo "0 results";
}
 ?>
 </div>
 <div class="playerInfo age ">
 <h1> Ikä</h1>

 <?php
  $sql = "SELECT Ika FROM Pelaajat Where id = '26'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Ika"];
    }
} else {
    echo "0 results";
}
 ?>
 </div>

<div class="playerInfo nationality ">
 <h1> Kansallisuus</h1>

  <?php
  $sql = "SELECT Kansallisuus FROM Pelaajat Where id = '26'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Kansallisuus"];
    }
} else {
    echo "0 results";
}
 ?>
 </div>
<div class="playerInfo playerGames ">
 <h1> Pelatut Pelit</h1>

 <?php
  $sql = "SELECT PelatutPelit FROM Pelaajat Where id = '26'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["PelatutPelit"];
    }
} else {
    echo "0 results";
}
 ?>
 </div>

 <div class="playerInfo madeGoals ">
 <h1> Maalit</h1>

  <?php
  $sql = "SELECT Maalit FROM Pelaajat Where id = '26'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Maalit"];
    }
} else {
    echo "0 results";
}
 ?>
</div>

<div class="playerInfo position">
 <h1> Pelipaikka</h1>

    <?php
  $sql = "SELECT Pelipaikka FROM Pelaajat Where id = '26'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Pelipaikka"];
    }
} else {
    echo "0 results";
}
 ?>
</div>

<div class="cards">


 </div>





</div>



<!--  Anthony Martial -->
<div class="teamInfoBox">


    <div class="playerImage">
     <img src="playerPics/martial.png" style="height:300px;width:250px;">

 </div>




 <div class="playerInfo fname ">
 <h1> Etunimi</h1>

  <?php
  $sql = "SELECT EtuNimi FROM Pelaajat Where id = '28'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["EtuNimi"];
    }
} else {
    echo "0 results";
}
 ?>
 </div>

 <div class="playerInfo lastname ">
 <h1> Sukunimi</h1>

 <?php
  $sql = "SELECT Sukunimi FROM Pelaajat Where id = '28'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Sukunimi"];
    }
} else {
    echo "0 results";
}
 ?>
 </div>
 <div class="playerInfo age ">
 <h1> Ikä</h1>

 <?php
  $sql = "SELECT Ika FROM Pelaajat Where id = '28'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Ika"];
    }
} else {
    echo "0 results";
}
 ?>
 </div>

<div class="playerInfo nationality ">
 <h1> Kansallisuus</h1>

  <?php
  $sql = "SELECT Kansallisuus FROM Pelaajat Where id = '28'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Kansallisuus"];
    }
} else {
    echo "0 results";
}
 ?>
 </div>
<div class="playerInfo playerGames ">
 <h1> Pelatut Pelit</h1>

 <?php
  $sql = "SELECT PelatutPelit FROM Pelaajat Where id = '28'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["PelatutPelit"];
    }
} else {
    echo "0 results";
}
 ?>
 </div>

 <div class="playerInfo madeGoals ">
 <h1> Maalit</h1>

  <?php
  $sql = "SELECT Maalit FROM Pelaajat Where id = '28'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Maalit"];
    }
} else {
    echo "0 results";
}
 ?>
</div>

<div class="playerInfo position">
 <h1> Pelipaikka</h1>

    <?php
  $sql = "SELECT Pelipaikka FROM Pelaajat Where id = '28'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Pelipaikka"];
    }
} else {
    echo "0 results";
}
 ?>
</div>

<div class="cards">


 </div>





</div>

<!--  Marcus Rashford -->
<div class="teamInfoBox">


    <div class="playerImage">
     <img src="playerPics/rashford.png" style="height:300px;width:250px;">

 </div>




 <div class="playerInfo fname ">
 <h1> Etunimi</h1>

  <?php
  $sql = "SELECT EtuNimi FROM Pelaajat Where id = '29'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["EtuNimi"];
    }
} else {
    echo "0 results";
}
 ?>
 </div>

 <div class="playerInfo lastname ">
 <h1> Sukunimi</h1>

 <?php
  $sql = "SELECT Sukunimi FROM Pelaajat Where id = '29'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Sukunimi"];
    }
} else {
    echo "0 results";
}
 ?>
 </div>
 <div class="playerInfo age ">
 <h1> Ikä</h1>

 <?php
  $sql = "SELECT Ika FROM Pelaajat Where id = '29'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Ika"];
    }
} else {
    echo "0 results";
}
 ?>
 </div>

<div class="playerInfo nationality ">
 <h1> Kansallisuus</h1>

  <?php
  $sql = "SELECT Kansallisuus FROM Pelaajat Where id = '29'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Kansallisuus"];
    }
} else {
    echo "0 results";
}
 ?>
 </div>
<div class="playerInfo playerGames ">
 <h1> Pelatut Pelit</h1>

 <?php
  $sql = "SELECT PelatutPelit FROM Pelaajat Where id = '29'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["PelatutPelit"];
    }
} else {
    echo "0 results";
}
 ?>
 </div>

 <div class="playerInfo madeGoals ">
 <h1> Maalit</h1>

  <?php
  $sql = "SELECT Maalit FROM Pelaajat Where id = '29'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Maalit"];
    }
} else {
    echo "0 results";
}
 ?>
</div>

<div class="playerInfo position">
 <h1> Pelipaikka</h1>

    <?php
  $sql = "SELECT Pelipaikka FROM Pelaajat Where id = '29'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Pelipaikka"];
    }
} else {
    echo "0 results";
}
 ?>
</div>

<div class="cards">


 </div>





</div>



</div>


</div>




    <div id="popUpWrapper">
    <div id="popUp2">
   <div id=header1>Lohkot</div>
    </div>
<div id="popUp">
    <div>
        <p id="A" class="group"  onclick="showGroupA()" >A</p>
    </div>
     <div>
        <p id="B" onclick="showGroupB()" class="group">B</p>
    </div>
    <div>
        <p id="C" onclick="showGroupC()" class="group">C</p>
    </div>
    <div>
        <p id="D" onclick="showGroupD()" class="group">D</p>
    </div>
    <div>
        <p id="E" onclick="showGroupE()" class="group">E</p>
    </div>
    <div>
        <p id="F" onclick="showGroupF()" class="group">F</p>
    </div>
    <div>
        <p id="G" onclick="showGroupG()" class="group">G</p>
    </div>
    <div>
        <p id="H" onclick="showGroupH()" class="group">H</p>
    </div>
</div>
</div>
<!-- A   -->
<div id="teamInfoBoxWrapperA">
     <!-- manchester -->
<div class="teamInfoBox" id="teamInfoA">


 <div class="teamLogo">

     <img src="manchester.jpg" style="width:100px;height:100px;">

 </div>

 <div class="teamName">
 <?php

 $sql = "SELECT Nimi FROM Joukkueet Where id = '1'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Nimi"];
    }
} else {
    echo "0 results";
}
?>
    </div>

    <!-- Pelatut pelit -->

  <div class="playedGames title">
      <h1> Pelatut pelit</h1>
      <div class="infoNumber">
<?php


 $sql = "SELECT Pelatutpelit FROM Joukkueet WHERE id = '1'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Pelatutpelit"];
    }
} else {
    echo "0 results";
}

    ?>
    </div>
    </div>

    <!-- Voitetut pelit -->

    <div class="wonGames title">
        <h1> Voitetut pelit</h1>
        <div class="infoNumber">
 <?php

     $sql = "SELECT Voitetutpelit FROM Joukkueet where id = '1'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Voitetutpelit"];
    }
} else {
    echo "0 results";
}



 ?>


        </div>


    </div>

    <!-- tasapelit -->

     <div class="drawGames title">
        <h1> Tasapelit</h1>
        <div class="infoNumber">
 <?php

     $sql = "SELECT Tasapelit FROM Joukkueet where id = '1'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Tasapelit"];
    }
} else {
    echo "0 results";
}



 ?>


        </div>


    </div>

     <!-- Havityt pelit -->

     <div class="lostGames title">
        <h1> Havityt pelit</h1>
        <div class="infoNumber">
 <?php

     $sql = "SELECT Havitytpelit FROM Joukkueet where id = '1'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Havitytpelit"];
    }
} else {
    echo "0 results";
}



 ?>


        </div>


    </div>


    <!-- Tehdyt maalit  -->

     <div class="totalGoals title">
        <h1> Tehdyt Maalit</h1>
        <div class="infoNumber">
 <?php

     $sql = "SELECT TehdytMaalit FROM Joukkueet where id = '1'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["TehdytMaalit"];
    }
} else {
    echo "0 results";
}



 ?>


        </div>


    </div>

    <!-- Päästetyt Maalit -->

    <div class="totalGoals2 title">
        <h1> Päästetyt Maalit</h1>
        <div class="infoNumber">
 <?php

     $sql = "SELECT PaastetytMaalit FROM Joukkueet where id = '1'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["PaastetytMaalit"];
    }
} else {
    echo "0 results";
}



 ?>


        </div>


    </div>











     <!-- Pisteet -->

    <div class="points title">
        <h1> Pisteet</h1>
        <div class="infoNumber">
 <?php

     $sql = "SELECT Pisteet FROM Joukkueet where id = '1'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Pisteet"];
    }
} else {
    echo "0 results";
}



 ?>


        </div>


    </div>

    <div class="moreInfo" id="manInfo" onclick="playerCardManchester()">

        <h1> Lisätietoa </h1>



    </div>





</div>

 <!-- FC Basel 1893 -->

<div class="teamInfoBox" id="baselBox">


 <div class="teamLogo" id="baselLogo">

     <img src="basel.jpg" style="width:100px;height:100px;">

 </div>

 <div class="teamName" id="baselName">
 <?php

 $sql = "SELECT Nimi FROM Joukkueet Where id = '2'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Nimi"];
    }
} else {
    echo "0 results";
}
?>
    </div>

    <!-- Pelatut pelit -->

  <div class="playedGames title">
      <h1> Pelatut pelit</h1>
      <div class="infoNumber">
<?php

 $sql = "SELECT Pelatutpelit FROM Joukkueet WHERE id = '2'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Pelatutpelit"];
    }
} else {
    echo "0 results";
}

    ?>
    </div>
    </div>

    <!-- Voitetut pelit -->

    <div class="wonGames title">
        <h1> Voitetut pelit</h1>
        <div class="infoNumber">
 <?php

     $sql = "SELECT Voitetutpelit FROM Joukkueet where id = '2'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Voitetutpelit"];
    }
} else {
    echo "0 results";
}



 ?>


        </div>


    </div>

    <!-- tasapelit -->

     <div class="drawGames title">
        <h1> Tasapelit</h1>
        <div class="infoNumber">
 <?php

     $sql = "SELECT Tasapelit FROM Joukkueet where id = '2'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Tasapelit"];
    }
} else {
    echo "0 results";
}



 ?>


        </div>


    </div>

     <!-- Havityt pelit -->

     <div class="lostGames title">
        <h1> Havityt pelit</h1>
        <div class="infoNumber">
 <?php

     $sql = "SELECT Havitytpelit FROM Joukkueet where id = '2'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Havitytpelit"];
    }
} else {
    echo "0 results";
}



 ?>


        </div>


    </div>

     <div class="totalGoals title" id="maalitBasel">
        <h1> Tehdyt Maalit</h1>
        <div class="infoNumber">
 <?php

     $sql = "SELECT TehdytMaalit FROM Joukkueet where id = '2'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["TehdytMaalit"];
    }
} else {
    echo "0 results";
}



 ?>


        </div>


    </div>

    <!-- Päästetyt Maalit -->

    <div class="totalGoals2 title">
        <h1> Päästetyt Maalit</h1>
        <div class="infoNumber">
 <?php

     $sql = "SELECT PaastetytMaalit FROM Joukkueet where id = '2'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["PaastetytMaalit"];
    }
} else {
    echo "0 results";
}



 ?>


        </div>


    </div>




     <!-- Pisteet -->

    <div class="points title">
        <h1> Pisteet</h1>
        <div class="infoNumber">
 <?php

     $sql = "SELECT Pisteet FROM Joukkueet where id = '2'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Pisteet"];
    }
} else {
    echo "0 results";
}



 ?>


        </div>


    </div>

     <div class="moreInfo baselInfo"  onclick="playerCardBasel()">

        <h1> Lisätietoa </h1>





</div>
</div>

<!-- PFC CSKA Moskva -->

<div class="teamInfoBox" id="moskvaBox">


 <div class="teamLogo" id="movskaLogo">

     <img src="movska.jpg" style="width:100px;height:100px;">

 </div>

 <div class="teamName" id="movskaName">
 <?php

 $sql = "SELECT Nimi FROM Joukkueet Where id = '3'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Nimi"];
    }
} else {
    echo "0 results";
}
?>
    </div>

    <!-- Pelatut pelit -->

  <div class="playedGames title">
      <h1> Pelatut pelit</h1>
      <div class="infoNumber">
<?php

 $sql = "SELECT Pelatutpelit FROM Joukkueet WHERE id = '3'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Pelatutpelit"];
    }
} else {
    echo "0 results";
}

    ?>
    </div>
    </div>

    <!-- Voitetut pelit -->

    <div class="wonGames title">
        <h1> Voitetut pelit</h1>
        <div class="infoNumber">
 <?php

     $sql = "SELECT Voitetutpelit FROM Joukkueet where id = '3'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Voitetutpelit"];
    }
} else {
    echo "0 results";
}



 ?>


        </div>


    </div>

    <!-- tasapelit -->

     <div class="drawGames title">
        <h1> Tasapelit</h1>
        <div class="infoNumber">
 <?php

     $sql = "SELECT Tasapelit FROM Joukkueet where id = '3'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Tasapelit"];
    }
} else {
    echo "0 results";
}



 ?>


        </div>


    </div>

     <!-- Havityt pelit -->

     <div class="lostGames title">
        <h1> Havityt pelit</h1>
        <div class="infoNumber">
 <?php

     $sql = "SELECT Havitytpelit FROM Joukkueet where id = '3'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Havitytpelit"];
    }
} else {
    echo "0 results";
}



 ?>


        </div>


    </div>


     <div class="totalGoals title">
        <h1> Tehdyt Maalit</h1>
        <div class="infoNumber">
 <?php

     $sql = "SELECT TehdytMaalit FROM Joukkueet where id = '3'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["TehdytMaalit"];
    }
} else {
    echo "0 results";
}



 ?>


        </div>


    </div>

    <!-- Päästetyt Maalit -->

    <div class="totalGoals2 title">
        <h1> Päästetyt Maalit</h1>
        <div class="infoNumber">
 <?php

     $sql = "SELECT PaastetytMaalit FROM Joukkueet where id = '3'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["PaastetytMaalit"];
    }
} else {
    echo "0 results";
}



 ?>


        </div>


    </div>



     <!-- Pisteet -->

    <div class="points title">
        <h1> Pisteet</h1>
        <div class="infoNumber">
 <?php

     $sql = "SELECT Pisteet FROM Joukkueet where id = '3'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Pisteet"];
    }
} else {
    echo "0 results";
}



 ?>


        </div>


    </div>

    <div class="moreInfo" id="movskaInfo" onclick="playerCardMoskva()">

        <h1> Lisätietoa </h1>

</div>





</div>

<!-- SL Benfica  -->

<div class="teamInfoBox" id="benficaBox">


 <div class="teamLogo" id="benficaLogo">

     <img src="benfica.jpg" style="width:100px;height:100px;">

 </div>

 <div class="teamName" id="benficaName">
 <?php

 $sql = "SELECT Nimi FROM Joukkueet Where id = '4'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Nimi"];
    }
} else {
    echo "0 results";
}
?>
    </div>

    <!-- Pelatut pelit -->

  <div class="playedGames title">
      <h1> Pelatut pelit</h1>
      <div class="infoNumber">
<?php

 $sql = "SELECT Pelatutpelit FROM Joukkueet WHERE id = '4'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Pelatutpelit"];
    }
} else {
    echo "0 results";
}

    ?>
    </div>
    </div>

    <!-- Voitetut pelit -->

    <div class="wonGames title">
        <h1> Voitetut pelit</h1>
        <div class="infoNumber">
 <?php

     $sql = "SELECT Voitetutpelit FROM Joukkueet where id = '4'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Voitetutpelit"];
    }
} else {
    echo "0 results";
}



 ?>


        </div>


    </div>

    <!-- tasapelit -->

     <div class="drawGames title">
        <h1> Tasapelit</h1>
        <div class="infoNumber">
 <?php

     $sql = "SELECT Tasapelit FROM Joukkueet where id = '4'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Tasapelit"];
    }
} else {
    echo "0 results";
}



 ?>


        </div>


    </div>

     <!-- Havityt pelit -->

     <div class="lostGames title">
        <h1> Havityt pelit</h1>
        <div class="infoNumber">
 <?php

     $sql = "SELECT Havitytpelit FROM Joukkueet where id = '4'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Havitytpelit"];
    }
} else {
    echo "0 results";
}



 ?>


        </div>


    </div>


     <div class="totalGoals title">
        <h1> Tehdyt Maalit</h1>
        <div class="infoNumber">
 <?php

     $sql = "SELECT TehdytMaalit FROM Joukkueet where id = '4'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["TehdytMaalit"];
    }
} else {
    echo "0 results";
}



 ?>


        </div>


    </div>

     <!-- Pisteet -->

    <div class="points title">
        <h1> Pisteet</h1>
        <div class="infoNumber">
 <?php

     $sql = "SELECT Pisteet FROM Joukkueet where id = '4'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["Pisteet"];
    }
} else {
    echo "0 results";
}



 ?>


        </div>


    </div>


    <!-- Päästetyt Maalit -->

    <div class="totalGoals2 title">
        <h1> Päästetyt Maalit</h1>
        <div class="infoNumber">
 <?php

     $sql = "SELECT PaastetytMaalit FROM Joukkueet where id = '4'";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo  $row["PaastetytMaalit"];
    }
} else {
    echo "0 results";
}



 ?>


        </div>


    </div>

     <div class="moreInfo"  onclick="playerCardBelfica()">

        <h1> Lisätietoa </h1>

</div>





</div>



</div>



<!-- B-lohko -->

<div id="teamInfoBoxWrapperB">

<div class="teamInfoBox" id="teamInfoB">

</div>

</div>

<!-- C-lohko -->

<div id="teamInfoBoxWrapperC">

  <div class="teamInfoBox">

    <div class="teamLogo">
       <img src="logos/napoli.png" style="width:100px;height:100px;">
    </div>

    <div class="teamName">
    <?php
    echo databaseQuery('Joukkueet','Nimi','9');
    ?>
    </div>

    <!-- Pelatut pelit -->
    <div class="playedGames title">
      <h1> Pelatut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pelatutpelit','9');
    ?>
      </div>
    </div>

    <!-- Voitetut pelit -->
    <div class="wonGames title">
      <h1> Voitetut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Voitetutpelit','9');
    ?>
      </div>
    </div>

    <!-- tasapelit -->
    <div class="drawGames title">
      <h1> Tasapelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Tasapelit','9');
    ?>
      </div>
    </div>

    <!-- Havityt pelit -->
    <div class="lostGames title">
      <h1> Havityt pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Havitytpelit','9');
    ?>
      </div>
    </div>

    <!-- Tehdyt maalit -->
    <div class="totalGoals title">
      <h1> Tehdyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','TehdytMaalit','9');
    ?>
      </div>
    </div>

    <!-- Pisteet -->
    <div class="points title">
      <h1> Pisteet</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pisteet','9');
    ?>
      </div>
    </div>

    <!-- Päästetyt Maalit -->
    <div class="totalGoals2 title">
      <h1> Päästetyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','PaastetytMaalit','9');
    ?>
      </div>
    </div>

    <div class="moreInfo"  onclick="playerCardBelfica()">
      <h1> Lisätietoa </h1>
    </div>
  </div>

  <div class="teamInfoBox">

    <div class="teamLogo">
       <img src="logos/liverpool.png" style="width:100px;height:100px;">
    </div>

    <div class="teamName">
    <?php
    echo databaseQuery('Joukkueet','Nimi','10');
    ?>
    </div>

    <!-- Pelatut pelit -->
    <div class="playedGames title">
      <h1> Pelatut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pelatutpelit','10');
    ?>
      </div>
    </div>

    <!-- Voitetut pelit -->
    <div class="wonGames title">
      <h1> Voitetut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Voitetutpelit','10');
    ?>
      </div>
    </div>

    <!-- tasapelit -->
    <div class="drawGames title">
      <h1> Tasapelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Tasapelit','10');
    ?>
      </div>
    </div>

    <!-- Havityt pelit -->
    <div class="lostGames title">
      <h1> Havityt pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Havitytpelit','10');
    ?>
      </div>
    </div>

    <!-- Tehdyt maalit -->
    <div class="totalGoals title">
      <h1> Tehdyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','TehdytMaalit','10');
    ?>
      </div>
    </div>

    <!-- Pisteet -->
    <div class="points title">
      <h1> Pisteet</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pisteet','10');
    ?>
      </div>
    </div>

    <!-- Päästetyt Maalit -->
    <div class="totalGoals2 title">
      <h1> Päästetyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','PaastetytMaalit','10');
    ?>
      </div>
    </div>

    <div class="moreInfo"  onclick="playerCardBelfica()">
      <h1> Lisätietoa </h1>
    </div>
  </div>

  <div class="teamInfoBox">

  <div class="teamLogo">
     <img src="logos/psg.png" style="width:100px;height:100px;">
  </div>

  <div class="teamName">
  <?php
  echo databaseQuery('Joukkueet','Nimi','11');
  ?>
  </div>

  <!-- Pelatut pelit -->
  <div class="playedGames title">
    <h1> Pelatut pelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Pelatutpelit','11');
  ?>
    </div>
  </div>

  <!-- Voitetut pelit -->
  <div class="wonGames title">
    <h1> Voitetut pelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Voitetutpelit','11');
  ?>
    </div>
  </div>

  <!-- tasapelit -->
  <div class="drawGames title">
    <h1> Tasapelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Tasapelit','11');
  ?>
    </div>
  </div>

  <!-- Havityt pelit -->
  <div class="lostGames title">
    <h1> Havityt pelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Havitytpelit','11');
  ?>
    </div>
  </div>

  <!-- Tehdyt maalit -->
  <div class="totalGoals title">
    <h1> Tehdyt Maalit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','TehdytMaalit','11');
  ?>
    </div>
  </div>

  <!-- Pisteet -->
  <div class="points title">
    <h1> Pisteet</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Pisteet','11');
  ?>
    </div>
  </div>

  <!-- Päästetyt Maalit -->
  <div class="totalGoals2 title">
    <h1> Päästetyt Maalit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','PaastetytMaalit','11');
  ?>
    </div>
  </div>

  <div class="moreInfo"  onclick="playerCardBelfica()">
    <h1> Lisätietoa </h1>
  </div>
</div>

<div class="teamInfoBox">

<div class="teamLogo">
   <img src="logos/crvena.png" style="width:100px;height:100px;">
</div>

<div class="teamName">
<?php
echo databaseQuery('Joukkueet','Nimi','12');
?>
</div>

<!-- Pelatut pelit -->
<div class="playedGames title">
  <h1> Pelatut pelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Pelatutpelit','12');
?>
  </div>
</div>

<!-- Voitetut pelit -->
<div class="wonGames title">
  <h1> Voitetut pelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Voitetutpelit','12');
?>
  </div>
</div>

<!-- tasapelit -->
<div class="drawGames title">
  <h1> Tasapelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Tasapelit','12');
?>
  </div>
</div>

<!-- Havityt pelit -->
<div class="lostGames title">
  <h1> Havityt pelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Havitytpelit','12');
?>
  </div>
</div>

<!-- Tehdyt maalit -->
<div class="totalGoals title">
  <h1> Tehdyt Maalit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','TehdytMaalit','12');
?>
  </div>
</div>

<!-- Pisteet -->
<div class="points title">
  <h1> Pisteet</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Pisteet','12');
?>
  </div>
</div>

<!-- Päästetyt Maalit -->
<div class="totalGoals2 title">
  <h1> Päästetyt Maalit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','PaastetytMaalit','12');
?>
  </div>
</div>

<div class="moreInfo"  onclick="playerCardBelfica()">
  <h1> Lisätietoa </h1>
</div>
</div>
</div>

<!-- D-lohko -->

<div id="teamInfoBoxWrapperD">

  <div class="teamInfoBox">

    <div class="teamLogo">
       <img src="logos/porto.png" style="width:100px;height:100px;">
    </div>

    <div class="teamName">
    <?php
    echo databaseQuery('Joukkueet','Nimi','13');
    ?>
    </div>

    <!-- Pelatut pelit -->
    <div class="playedGames title">
      <h1> Pelatut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pelatutpelit','13');
    ?>
      </div>
    </div>

    <!-- Voitetut pelit -->
    <div class="wonGames title">
      <h1> Voitetut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Voitetutpelit','13');
    ?>
      </div>
    </div>

    <!-- tasapelit -->
    <div class="drawGames title">
      <h1> Tasapelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Tasapelit','13');
    ?>
      </div>
    </div>

    <!-- Havityt pelit -->
    <div class="lostGames title">
      <h1> Havityt pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Havitytpelit','13');
    ?>
      </div>
    </div>

    <!-- Tehdyt maalit -->
    <div class="totalGoals title">
      <h1> Tehdyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','TehdytMaalit','13');
    ?>
      </div>
    </div>

    <!-- Pisteet -->
    <div class="points title">
      <h1> Pisteet</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pisteet','13');
    ?>
      </div>
    </div>

    <!-- Päästetyt Maalit -->
    <div class="totalGoals2 title">
      <h1> Päästetyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','PaastetytMaalit','13');
    ?>
      </div>
    </div>

    <div class="moreInfo"  onclick="playerCardBelfica()">
      <h1> Lisätietoa </h1>
    </div>
  </div>

  <div class="teamInfoBox">

    <div class="teamLogo">
       <img src="logos/schalke.png" style="width:100px;height:100px;">
    </div>

    <div class="teamName">
    <?php
    echo databaseQuery('Joukkueet','Nimi','14');
    ?>
    </div>

    <!-- Pelatut pelit -->
    <div class="playedGames title">
      <h1> Pelatut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pelatutpelit','14');
    ?>
      </div>
    </div>

    <!-- Voitetut pelit -->
    <div class="wonGames title">
      <h1> Voitetut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Voitetutpelit','14');
    ?>
      </div>
    </div>

    <!-- tasapelit -->
    <div class="drawGames title">
      <h1> Tasapelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Tasapelit','14');
    ?>
      </div>
    </div>

    <!-- Havityt pelit -->
    <div class="lostGames title">
      <h1> Havityt pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Havitytpelit','14');
    ?>
      </div>
    </div>

    <!-- Tehdyt maalit -->
    <div class="totalGoals title">
      <h1> Tehdyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','TehdytMaalit','14');
    ?>
      </div>
    </div>

    <!-- Pisteet -->
    <div class="points title">
      <h1> Pisteet</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pisteet','14');
    ?>
      </div>
    </div>

    <!-- Päästetyt Maalit -->
    <div class="totalGoals2 title">
      <h1> Päästetyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','PaastetytMaalit','14');
    ?>
      </div>
    </div>

    <div class="moreInfo"  onclick="playerCardBelfica()">
      <h1> Lisätietoa </h1>
    </div>
  </div>

  <div class="teamInfoBox">

  <div class="teamLogo">
     <img src="logos/galatasaray.png" style="width:100px;height:100px;">
  </div>

  <div class="teamName">
  <?php
  echo databaseQuery('Joukkueet','Nimi','15');
  ?>
  </div>

  <!-- Pelatut pelit -->
  <div class="playedGames title">
    <h1> Pelatut pelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Pelatutpelit','15');
  ?>
    </div>
  </div>

  <!-- Voitetut pelit -->
  <div class="wonGames title">
    <h1> Voitetut pelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Voitetutpelit','15');
  ?>
    </div>
  </div>

  <!-- tasapelit -->
  <div class="drawGames title">
    <h1> Tasapelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Tasapelit','15');
  ?>
    </div>
  </div>

  <!-- Havityt pelit -->
  <div class="lostGames title">
    <h1> Havityt pelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Havitytpelit','15');
  ?>
    </div>
  </div>

  <!-- Tehdyt maalit -->
  <div class="totalGoals title">
    <h1> Tehdyt Maalit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','TehdytMaalit','15');
  ?>
    </div>
  </div>

  <!-- Pisteet -->
  <div class="points title">
    <h1> Pisteet</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Pisteet','15');
  ?>
    </div>
  </div>

  <!-- Päästetyt Maalit -->
  <div class="totalGoals2 title">
    <h1> Päästetyt Maalit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','PaastetytMaalit','15');
  ?>
    </div>
  </div>

  <div class="moreInfo"  onclick="playerCardBelfica()">
    <h1> Lisätietoa </h1>
  </div>
</div>

<div class="teamInfoBox">

<div class="teamLogo">
   <img src="logos/lok_moskova.png" style="width:100px;height:100px;">
</div>

<div class="teamName">
<?php
echo databaseQuery('Joukkueet','Nimi','16');
?>
</div>

<!-- Pelatut pelit -->
<div class="playedGames title">
  <h1> Pelatut pelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Pelatutpelit','16');
?>
  </div>
</div>

<!-- Voitetut pelit -->
<div class="wonGames title">
  <h1> Voitetut pelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Voitetutpelit','16');
?>
  </div>
</div>

<!-- tasapelit -->
<div class="drawGames title">
  <h1> Tasapelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Tasapelit','16');
?>
  </div>
</div>

<!-- Havityt pelit -->
<div class="lostGames title">
  <h1> Havityt pelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Havitytpelit','16');
?>
  </div>
</div>

<!-- Tehdyt maalit -->
<div class="totalGoals title">
  <h1> Tehdyt Maalit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','TehdytMaalit','16');
?>
  </div>
</div>

<!-- Pisteet -->
<div class="points title">
  <h1> Pisteet</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Pisteet','16');
?>
  </div>
</div>

<!-- Päästetyt Maalit -->
<div class="totalGoals2 title">
  <h1> Päästetyt Maalit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','PaastetytMaalit','16');
?>
  </div>
</div>

<div class="moreInfo"  onclick="playerCardBelfica()">
  <h1> Lisätietoa </h1>
</div>
</div>
</div>

<!-- E-lohko -->

<div id="teamInfoBoxWrapperE">

  <div class="teamInfoBox">

    <div class="teamLogo">
       <img src="logos/bayern.png" style="width:100px;height:100px;">
    </div>

    <div class="teamName">
    <?php
    echo databaseQuery('Joukkueet','Nimi','17');
    ?>
    </div>

    <!-- Pelatut pelit -->
    <div class="playedGames title">
      <h1> Pelatut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pelatutpelit','17');
    ?>
      </div>
    </div>

    <!-- Voitetut pelit -->
    <div class="wonGames title">
      <h1> Voitetut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Voitetutpelit','17');
    ?>
      </div>
    </div>

    <!-- tasapelit -->
    <div class="drawGames title">
      <h1> Tasapelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Tasapelit','17');
    ?>
      </div>
    </div>

    <!-- Havityt pelit -->
    <div class="lostGames title">
      <h1> Havityt pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Havitytpelit','17');
    ?>
      </div>
    </div>

    <!-- Tehdyt maalit -->
    <div class="totalGoals title">
      <h1> Tehdyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','TehdytMaalit','17');
    ?>
      </div>
    </div>

    <!-- Pisteet -->
    <div class="points title">
      <h1> Pisteet</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pisteet','17');
    ?>
      </div>
    </div>

    <!-- Päästetyt Maalit -->
    <div class="totalGoals2 title">
      <h1> Päästetyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','PaastetytMaalit','17');
    ?>
      </div>
    </div>

    <div class="moreInfo"  onclick="playerCardBelfica()">
      <h1> Lisätietoa </h1>
    </div>
  </div>

  <div class="teamInfoBox">

    <div class="teamLogo">
       <img src="logos/ajax.png" style="width:100px;height:100px;">
    </div>

    <div class="teamName">
    <?php
    echo databaseQuery('Joukkueet','Nimi','18');
    ?>
    </div>

    <!-- Pelatut pelit -->
    <div class="playedGames title">
      <h1> Pelatut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pelatutpelit','18');
    ?>
      </div>
    </div>

    <!-- Voitetut pelit -->
    <div class="wonGames title">
      <h1> Voitetut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Voitetutpelit','18');
    ?>
      </div>
    </div>

    <!-- tasapelit -->
    <div class="drawGames title">
      <h1> Tasapelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Tasapelit','18');
    ?>
      </div>
    </div>

    <!-- Havityt pelit -->
    <div class="lostGames title">
      <h1> Havityt pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Havitytpelit','18');
    ?>
      </div>
    </div>

    <!-- Tehdyt maalit -->
    <div class="totalGoals title">
      <h1> Tehdyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','TehdytMaalit','18');
    ?>
      </div>
    </div>

    <!-- Pisteet -->
    <div class="points title">
      <h1> Pisteet</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pisteet','18');
    ?>
      </div>
    </div>

    <!-- Päästetyt Maalit -->
    <div class="totalGoals2 title">
      <h1> Päästetyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','PaastetytMaalit','18');
    ?>
      </div>
    </div>

    <div class="moreInfo"  onclick="playerCardBelfica()">
      <h1> Lisätietoa </h1>
    </div>
  </div>

  <div class="teamInfoBox">

  <div class="teamLogo">
     <img src="logos/benfica.png" style="width:100px;height:100px;">
  </div>

  <div class="teamName">
  <?php
  echo databaseQuery('Joukkueet','Nimi','19');
  ?>
  </div>

  <!-- Pelatut pelit -->
  <div class="playedGames title">
    <h1> Pelatut pelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Pelatutpelit','19');
  ?>
    </div>
  </div>

  <!-- Voitetut pelit -->
  <div class="wonGames title">
    <h1> Voitetut pelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Voitetutpelit','19');
  ?>
    </div>
  </div>

  <!-- tasapelit -->
  <div class="drawGames title">
    <h1> Tasapelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Tasapelit','19');
  ?>
    </div>
  </div>

  <!-- Havityt pelit -->
  <div class="lostGames title">
    <h1> Havityt pelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Havitytpelit','19');
  ?>
    </div>
  </div>

  <!-- Tehdyt maalit -->
  <div class="totalGoals title">
    <h1> Tehdyt Maalit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','TehdytMaalit','19');
  ?>
    </div>
  </div>

  <!-- Pisteet -->
  <div class="points title">
    <h1> Pisteet</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Pisteet','19');
  ?>
    </div>
  </div>

  <!-- Päästetyt Maalit -->
  <div class="totalGoals2 title">
    <h1> Päästetyt Maalit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','PaastetytMaalit','19');
  ?>
    </div>
  </div>

  <div class="moreInfo"  onclick="playerCardBelfica()">
    <h1> Lisätietoa </h1>
  </div>
</div>

<div class="teamInfoBox">

<div class="teamLogo">
   <img src="logos/aek.png" style="width:100px;height:100px;">
</div>

<div class="teamName">
<?php
echo databaseQuery('Joukkueet','Nimi','20');
?>
</div>

<!-- Pelatut pelit -->
<div class="playedGames title">
  <h1> Pelatut pelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Pelatutpelit','20');
?>
  </div>
</div>

<!-- Voitetut pelit -->
<div class="wonGames title">
  <h1> Voitetut pelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Voitetutpelit','20');
?>
  </div>
</div>

<!-- tasapelit -->
<div class="drawGames title">
  <h1> Tasapelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Tasapelit','20');
?>
  </div>
</div>

<!-- Havityt pelit -->
<div class="lostGames title">
  <h1> Havityt pelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Havitytpelit','20');
?>
  </div>
</div>

<!-- Tehdyt maalit -->
<div class="totalGoals title">
  <h1> Tehdyt Maalit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','TehdytMaalit','20');
?>
  </div>
</div>

<!-- Pisteet -->
<div class="points title">
  <h1> Pisteet</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Pisteet','20');
?>
  </div>
</div>

<!-- Päästetyt Maalit -->
<div class="totalGoals2 title">
  <h1> Päästetyt Maalit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','PaastetytMaalit','20');
?>
  </div>
</div>

<div class="moreInfo"  onclick="playerCardBelfica()">
  <h1> Lisätietoa </h1>
</div>
</div>
</div>

<!-- F-lohko -->

<div id="teamInfoBoxWrapperF">

  <div class="teamInfoBox">

    <div class="teamLogo">
       <img src="logos/manchester_city.png" style="width:100px;height:100px;">
    </div>

    <div class="teamName">
    <?php
    echo databaseQuery('Joukkueet','Nimi','21');
    ?>
    </div>

    <!-- Pelatut pelit -->
    <div class="playedGames title">
      <h1> Pelatut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pelatutpelit','21');
    ?>
      </div>
    </div>

    <!-- Voitetut pelit -->
    <div class="wonGames title">
      <h1> Voitetut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Voitetutpelit','21');
    ?>
      </div>
    </div>

    <!-- tasapelit -->
    <div class="drawGames title">
      <h1> Tasapelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Tasapelit','21');
    ?>
      </div>
    </div>

    <!-- Havityt pelit -->
    <div class="lostGames title">
      <h1> Havityt pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Havitytpelit','21');
    ?>
      </div>
    </div>

    <!-- Tehdyt maalit -->
    <div class="totalGoals title">
      <h1> Tehdyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','TehdytMaalit','21');
    ?>
      </div>
    </div>

    <!-- Pisteet -->
    <div class="points title">
      <h1> Pisteet</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pisteet','21');
    ?>
      </div>
    </div>

    <!-- Päästetyt Maalit -->
    <div class="totalGoals2 title">
      <h1> Päästetyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','PaastetytMaalit','21');
    ?>
      </div>
    </div>

    <div class="moreInfo"  onclick="playerCardBelfica()">
      <h1> Lisätietoa </h1>
    </div>
  </div>

  <div class="teamInfoBox">

    <div class="teamLogo">
       <img src="logos/lyon.png" style="width:100px;height:100px;">
    </div>

    <div class="teamName">
    <?php
    echo databaseQuery('Joukkueet','Nimi','22');
    ?>
    </div>

    <!-- Pelatut pelit -->
    <div class="playedGames title">
      <h1> Pelatut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pelatutpelit','22');
    ?>
      </div>
    </div>

    <!-- Voitetut pelit -->
    <div class="wonGames title">
      <h1> Voitetut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Voitetutpelit','22');
    ?>
      </div>
    </div>

    <!-- tasapelit -->
    <div class="drawGames title">
      <h1> Tasapelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Tasapelit','22');
    ?>
      </div>
    </div>

    <!-- Havityt pelit -->
    <div class="lostGames title">
      <h1> Havityt pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Havitytpelit','22');
    ?>
      </div>
    </div>

    <!-- Tehdyt maalit -->
    <div class="totalGoals title">
      <h1> Tehdyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','TehdytMaalit','22');
    ?>
      </div>
    </div>

    <!-- Pisteet -->
    <div class="points title">
      <h1> Pisteet</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pisteet','22');
    ?>
      </div>
    </div>

    <!-- Päästetyt Maalit -->
    <div class="totalGoals2 title">
      <h1> Päästetyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','PaastetytMaalit','22');
    ?>
      </div>
    </div>

    <div class="moreInfo"  onclick="playerCardBelfica()">
      <h1> Lisätietoa </h1>
    </div>
  </div>

  <div class="teamInfoBox">

  <div class="teamLogo">
     <img src="logos/hoffenheim.png" style="width:100px;height:100px;">
  </div>

  <div class="teamName">
  <?php
  echo databaseQuery('Joukkueet','Nimi','23');
  ?>
  </div>

  <!-- Pelatut pelit -->
  <div class="playedGames title">
    <h1> Pelatut pelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Pelatutpelit','23');
  ?>
    </div>
  </div>

  <!-- Voitetut pelit -->
  <div class="wonGames title">
    <h1> Voitetut pelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Voitetutpelit','23');
  ?>
    </div>
  </div>

  <!-- tasapelit -->
  <div class="drawGames title">
    <h1> Tasapelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Tasapelit','23');
  ?>
    </div>
  </div>

  <!-- Havityt pelit -->
  <div class="lostGames title">
    <h1> Havityt pelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Havitytpelit','23');
  ?>
    </div>
  </div>

  <!-- Tehdyt maalit -->
  <div class="totalGoals title">
    <h1> Tehdyt Maalit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','TehdytMaalit','23');
  ?>
    </div>
  </div>

  <!-- Pisteet -->
  <div class="points title">
    <h1> Pisteet</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Pisteet','23');
  ?>
    </div>
  </div>

  <!-- Päästetyt Maalit -->
  <div class="totalGoals2 title">
    <h1> Päästetyt Maalit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','PaastetytMaalit','23');
  ?>
    </div>
  </div>

  <div class="moreInfo"  onclick="playerCardBelfica()">
    <h1> Lisätietoa </h1>
  </div>
</div>
<div class="teamInfoBox">

<div class="teamLogo">
   <img src="logos/shakhtar.png" style="width:100px;height:100px;">
</div>

<div class="teamName">
<?php
echo databaseQuery('Joukkueet','Nimi','24');
?>
</div>

<!-- Pelatut pelit -->
<div class="playedGames title">
  <h1> Pelatut pelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Pelatutpelit','24');
?>
  </div>
</div>

<!-- Voitetut pelit -->
<div class="wonGames title">
  <h1> Voitetut pelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Voitetutpelit','24');
?>
  </div>
</div>

<!-- tasapelit -->
<div class="drawGames title">
  <h1> Tasapelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Tasapelit','24');
?>
  </div>
</div>

<!-- Havityt pelit -->
<div class="lostGames title">
  <h1> Havityt pelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Havitytpelit','24');
?>
  </div>
</div>

<!-- Tehdyt maalit -->
<div class="totalGoals title">
  <h1> Tehdyt Maalit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','TehdytMaalit','24');
?>
  </div>
</div>

<!-- Pisteet -->
<div class="points title">
  <h1> Pisteet</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Pisteet','24');
?>
  </div>
</div>

<!-- Päästetyt Maalit -->
<div class="totalGoals2 title">
  <h1> Päästetyt Maalit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','PaastetytMaalit','24');
?>
  </div>
</div>

<div class="moreInfo"  onclick="playerCardBelfica()">
  <h1> Lisätietoa </h1>
</div>
</div>
</div>

<!-- G-lohko -->

<div id="teamInfoBoxWrapperG">

  <div class="teamInfoBox">

    <div class="teamLogo">
       <img src="logos/madrid.png" style="width:100px;height:100px;">
    </div>

    <div class="teamName">
    <?php
    echo databaseQuery('Joukkueet','Nimi','25');
    ?>
    </div>

    <!-- Pelatut pelit -->
    <div class="playedGames title">
      <h1> Pelatut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pelatutpelit','25');
    ?>
      </div>
    </div>

    <!-- Voitetut pelit -->
    <div class="wonGames title">
      <h1> Voitetut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Voitetutpelit','25');
    ?>
      </div>
    </div>

    <!-- tasapelit -->
    <div class="drawGames title">
      <h1> Tasapelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Tasapelit','25');
    ?>
      </div>
    </div>

    <!-- Havityt pelit -->
    <div class="lostGames title">
      <h1> Havityt pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Havitytpelit','25');
    ?>
      </div>
    </div>

    <!-- Tehdyt maalit -->
    <div class="totalGoals title">
      <h1> Tehdyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','TehdytMaalit','25');
    ?>
      </div>
    </div>

    <!-- Pisteet -->
    <div class="points title">
      <h1> Pisteet</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pisteet','25');
    ?>
      </div>
    </div>

    <!-- Päästetyt Maalit -->
    <div class="totalGoals2 title">
      <h1> Päästetyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','PaastetytMaalit','25');
    ?>
      </div>
    </div>

    <div class="moreInfo"  onclick="playerCardBelfica()">
      <h1> Lisätietoa </h1>
    </div>
  </div>

  <div class="teamInfoBox">

    <div class="teamLogo">
       <img src="logos/roma.png" style="width:100px;height:100px;">
    </div>

    <div class="teamName">
    <?php
    echo databaseQuery('Joukkueet','Nimi','26');
    ?>
    </div>

    <!-- Pelatut pelit -->
    <div class="playedGames title">
      <h1> Pelatut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pelatutpelit','26');
    ?>
      </div>
    </div>

    <!-- Voitetut pelit -->
    <div class="wonGames title">
      <h1> Voitetut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Voitetutpelit','26');
    ?>
      </div>
    </div>

    <!-- tasapelit -->
    <div class="drawGames title">
      <h1> Tasapelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Tasapelit','26');
    ?>
      </div>
    </div>

    <!-- Havityt pelit -->
    <div class="lostGames title">
      <h1> Havityt pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Havitytpelit','26');
    ?>
      </div>
    </div>

    <!-- Tehdyt maalit -->
    <div class="totalGoals title">
      <h1> Tehdyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','TehdytMaalit','26');
    ?>
      </div>
    </div>

    <!-- Pisteet -->
    <div class="points title">
      <h1> Pisteet</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pisteet','26');
    ?>
      </div>
    </div>

    <!-- Päästetyt Maalit -->
    <div class="totalGoals2 title">
      <h1> Päästetyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','PaastetytMaalit','26');
    ?>
      </div>
    </div>

    <div class="moreInfo"  onclick="playerCardBelfica()">
      <h1> Lisätietoa </h1>
    </div>
  </div>

  <div class="teamInfoBox">

  <div class="teamLogo">
     <img src="logos/cska_movska.png" style="width:100px;height:100px;">
  </div>

  <div class="teamName">
  <?php
  echo databaseQuery('Joukkueet','Nimi','27');
  ?>
  </div>

  <!-- Pelatut pelit -->
  <div class="playedGames title">
    <h1> Pelatut pelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Pelatutpelit','27');
  ?>
    </div>
  </div>

  <!-- Voitetut pelit -->
  <div class="wonGames title">
    <h1> Voitetut pelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Voitetutpelit','27');
  ?>
    </div>
  </div>

  <!-- tasapelit -->
  <div class="drawGames title">
    <h1> Tasapelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Tasapelit','27');
  ?>
    </div>
  </div>

  <!-- Havityt pelit -->
  <div class="lostGames title">
    <h1> Havityt pelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Havitytpelit','27');
  ?>
    </div>
  </div>

  <!-- Tehdyt maalit -->
  <div class="totalGoals title">
    <h1> Tehdyt Maalit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','TehdytMaalit','27');
  ?>
    </div>
  </div>

  <!-- Pisteet -->
  <div class="points title">
    <h1> Pisteet</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Pisteet','27');
  ?>
    </div>
  </div>

  <!-- Päästetyt Maalit -->
  <div class="totalGoals2 title">
    <h1> Päästetyt Maalit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','PaastetytMaalit','27');
  ?>
    </div>
  </div>

  <div class="moreInfo"  onclick="playerCardBelfica()">
    <h1> Lisätietoa </h1>
  </div>
</div>

<div class="teamInfoBox">

<div class="teamLogo">
   <img src="logos/plzen.png" style="width:100px;height:100px;">
</div>

<div class="teamName">
<?php
echo databaseQuery('Joukkueet','Nimi','28');
?>
</div>

<!-- Pelatut pelit -->
<div class="playedGames title">
  <h1> Pelatut pelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Pelatutpelit','28');
?>
  </div>
</div>

<!-- Voitetut pelit -->
<div class="wonGames title">
  <h1> Voitetut pelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Voitetutpelit','28');
?>
  </div>
</div>

<!-- tasapelit -->
<div class="drawGames title">
  <h1> Tasapelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Tasapelit','28');
?>
  </div>
</div>

<!-- Havityt pelit -->
<div class="lostGames title">
  <h1> Havityt pelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Havitytpelit','28');
?>
  </div>
</div>

<!-- Tehdyt maalit -->
<div class="totalGoals title">
  <h1> Tehdyt Maalit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','TehdytMaalit','28');
?>
  </div>
</div>

<!-- Pisteet -->
<div class="points title">
  <h1> Pisteet</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Pisteet','28');
?>
  </div>
</div>

<!-- Päästetyt Maalit -->
<div class="totalGoals2 title">
  <h1> Päästetyt Maalit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','PaastetytMaalit','28');
?>
  </div>
</div>

<div class="moreInfo"  onclick="playerCardBelfica()">
  <h1> Lisätietoa </h1>
</div>
</div>
</div>

<!-- H-lohko -->

<div id="teamInfoBoxWrapperH">

  <div class="teamInfoBox">

    <div class="teamLogo">
       <img src="logos/juventus.png" style="width:100px;height:100px;">
    </div>

    <div class="teamName">
    <?php
    echo databaseQuery('Joukkueet','Nimi','29');
    ?>
    </div>

    <!-- Pelatut pelit -->
    <div class="playedGames title">
      <h1> Pelatut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pelatutpelit','29');
    ?>
      </div>
    </div>

    <!-- Voitetut pelit -->
    <div class="wonGames title">
      <h1> Voitetut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Voitetutpelit','29');
    ?>
      </div>
    </div>

    <!-- tasapelit -->
    <div class="drawGames title">
      <h1> Tasapelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Tasapelit','29');
    ?>
      </div>
    </div>

    <!-- Havityt pelit -->
    <div class="lostGames title">
      <h1> Havityt pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Havitytpelit','29');
    ?>
      </div>
    </div>

    <!-- Tehdyt maalit -->
    <div class="totalGoals title">
      <h1> Tehdyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','TehdytMaalit','29');
    ?>
      </div>
    </div>

    <!-- Pisteet -->
    <div class="points title">
      <h1> Pisteet</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pisteet','29');
    ?>
      </div>
    </div>

    <!-- Päästetyt Maalit -->
    <div class="totalGoals2 title">
      <h1> Päästetyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','PaastetytMaalit','29');
    ?>
      </div>
    </div>

    <div class="moreInfo"  onclick="playerCardBelfica()">
      <h1> Lisätietoa </h1>
    </div>
  </div>

  <div class="teamInfoBox">

    <div class="teamLogo">
       <img src="logos/manchester_united.png" style="width:100px;height:100px;">
    </div>

    <div class="teamName">
    <?php
    echo databaseQuery('Joukkueet','Nimi','30');
    ?>
    </div>

    <!-- Pelatut pelit -->
    <div class="playedGames title">
      <h1> Pelatut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pelatutpelit','30');
    ?>
      </div>
    </div>

    <!-- Voitetut pelit -->
    <div class="wonGames title">
      <h1> Voitetut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Voitetutpelit','30');
    ?>
      </div>
    </div>

    <!-- tasapelit -->
    <div class="drawGames title">
      <h1> Tasapelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Tasapelit','30');
    ?>
      </div>
    </div>

    <!-- Havityt pelit -->
    <div class="lostGames title">
      <h1> Havityt pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Havitytpelit','30');
    ?>
      </div>
    </div>

    <!-- Tehdyt maalit -->
    <div class="totalGoals title">
      <h1> Tehdyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','TehdytMaalit','30');
    ?>
      </div>
    </div>

    <!-- Pisteet -->
    <div class="points title">
      <h1> Pisteet</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pisteet','30');
    ?>
      </div>
    </div>

    <!-- Päästetyt Maalit -->
    <div class="totalGoals2 title">
      <h1> Päästetyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','PaastetytMaalit','30');
    ?>
      </div>
    </div>

    <div class="moreInfo"  onclick="playerCardBelfica()">
      <h1> Lisätietoa </h1>
    </div>
  </div>

  <div class="teamInfoBox">

  <div class="teamLogo">
     <img src="logos/valencia.png" style="width:100px;height:100px;">
  </div>

  <div class="teamName">
  <?php
  echo databaseQuery('Joukkueet','Nimi','31');
  ?>
  </div>

  <!-- Pelatut pelit -->
  <div class="playedGames title">
    <h1> Pelatut pelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Pelatutpelit','31');
  ?>
    </div>
  </div>

  <!-- Voitetut pelit -->
  <div class="wonGames title">
    <h1> Voitetut pelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Voitetutpelit','31');
  ?>
    </div>
  </div>

  <!-- tasapelit -->
  <div class="drawGames title">
    <h1> Tasapelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Tasapelit','31');
  ?>
    </div>
  </div>

  <!-- Havityt pelit -->
  <div class="lostGames title">
    <h1> Havityt pelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Havitytpelit','31');
  ?>
    </div>
  </div>

  <!-- Tehdyt maalit -->
  <div class="totalGoals title">
    <h1> Tehdyt Maalit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','TehdytMaalit','31');
  ?>
    </div>
  </div>

  <!-- Pisteet -->
  <div class="points title">
    <h1> Pisteet</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Pisteet','31');
  ?>
    </div>
  </div>

  <!-- Päästetyt Maalit -->
  <div class="totalGoals2 title">
    <h1> Päästetyt Maalit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','PaastetytMaalit','31');
  ?>
    </div>
  </div>

  <div class="moreInfo"  onclick="playerCardBelfica()">
    <h1> Lisätietoa </h1>
  </div>
</div>

<div class="teamInfoBox">

<div class="teamLogo">
   <img src="logos/young_boys.png" style="width:100px;height:100px;">
</div>

<div class="teamName">
<?php
echo databaseQuery('Joukkueet','Nimi','32');
?>
</div>

<!-- Pelatut pelit -->
<div class="playedGames title">
  <h1> Pelatut pelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Pelatutpelit','32');
?>
  </div>
</div>

<!-- Voitetut pelit -->
<div class="wonGames title">
  <h1> Voitetut pelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Voitetutpelit','32');
?>
  </div>
</div>

<!-- tasapelit -->
<div class="drawGames title">
  <h1> Tasapelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Tasapelit','32');
?>
  </div>
</div>

<!-- Havityt pelit -->
<div class="lostGames title">
  <h1> Havityt pelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Havitytpelit','32');
?>
  </div>
</div>

<!-- Tehdyt maalit -->
<div class="totalGoals title">
  <h1> Tehdyt Maalit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','TehdytMaalit','32');
?>
  </div>
</div>

<!-- Pisteet -->
<div class="points title">
  <h1> Pisteet</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Pisteet','32');
?>
  </div>
</div>

<!-- Päästetyt Maalit -->
<div class="totalGoals2 title">
  <h1> Päästetyt Maalit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','PaastetytMaalit','32');
?>
  </div>
</div>

<div class="moreInfo"  onclick="playerCardBelfica()">
  <h1> Lisätietoa </h1>
</div>
</div>
</div>

<?php

//haetaan peliID
$sql = "SELECT id FROM Pelit ORDER BY id DESC LIMIT 1";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
         $gameID = $row["id"];

    }
} else {
    echo "0 results";
}

//luodaan pelinID
$gameID++;

 if(isset($_POST["adminSubmit"])) {




    //Otetaan KotiJoukkueen arvo;
    $homeTeam = $_POST['kotijoukkue'];

    //otetan talteen vierasjoukkue
    $awayTeam = $_POST['vierasjoukkue'];

    //otetaan talteen kotijoukkueen maalit
    $homeGoals = $_POST['kotiMaalit'];

    //otetaan talteen vierasjoukkueen maalit
    $awayGoals = $_POST['vierasMaalit'];

    //otetaan talteen päivämäärä
    $date = $_POST['pvm'];


    //otetaan talteen tulos
    $outcome = $homeTeam . " " . $homeGoals . " " . "-" . " " . $awayGoals . " " . $awayTeam;





//syötetään arvot tietokantaan
  $sql = "INSERT INTO Pelit (id, Kotijoukkue, Vierasjoukkue, pvm, Tulos) VALUES ('".$gameID."', '".$homeTeam."', '".$awayTeam."', '".$date."','".$outcome."')";

    if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}



//päivitetään joukkueiden tiedot


//kotijoukkueen tiedot
if ($homeTeam == "Man united") {
    $homeTeamID = 1;
}
 if ($homeTeam == "BASEL") {
     $homeTeamID = 2;
}
if ($homeTeam == "CSKA Moskva") {
     $homeTeamID = 3;
}
if ($homeTeam == "Benfica") {
     $homeTeamID = 4;
}

//vierasjoukkueen tiedot
if ($awayTeam == "Man united") {
    $awayTeamID = 1;
}
 if ($awayTeam == "BASEL") {
     $awayTeamID = 2;
}
if ($awayTeam == "CSKA Moskva") {
     $awayTeamID = 3;
}
if ($awayTeam == "Benfica") {
     $awayTeamID = 4;
}




//annetaan pisteet

if($homeGoals > $awayGoals) {

if ($homeTeam == "Man united") {
    //lisätään pisteet
     $sql = "UPDATE Joukkueet SET Pisteet = Pisteet + 3 WHERE id = 1";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

//lisätään pelatut pelit
$sql = "UPDATE Joukkueet SET PelatutPelit = PelatutPelit + 1 WHERE id = 1";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET PelatutPelit = PelatutPelit + 1 WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

//lisätään voitetetut pelit
$sql = "UPDATE Joukkueet SET VoitetutPelit = VoitetutPelit + 1 WHERE id = 1";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

//lisätään tehdyt maalit
$sql = "UPDATE Joukkueet SET TehdytMaalit = TehdytMaalit + '".$homeGoals."' WHERE id = 1";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET TehdytMaalit = TehdytMaalit + '".$awayGoals."' WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

//lisätään päästetyt maalit
$sql = "UPDATE Joukkueet SET PaastetytMaalit = PaastetytMaalit + '".$homeGoals."' WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET PaastetytMaalit = PaastetytMaalit + '".$awayGoals."' WHERE id = '".$homeTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}






}



 if ($homeTeam == "BASEL") {

     //lisätään pisteet
     $sql = "UPDATE Joukkueet SET Pisteet = Pisteet + 3 WHERE id = 2";
      if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

//lisätään pelatut pelit
$sql = "UPDATE Joukkueet SET PelatutPelit = PelatutPelit + 1 WHERE id = 2";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET PelatutPelit = PelatutPelit + 1 WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

//lisätään voitetetut pelit
$sql = "UPDATE Joukkueet SET VoitetutPelit = VoitetutPelit + 1 WHERE id = 2";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET TehdytMaalit = TehdytMaalit + '".$homeGoals."' WHERE id = 2";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET TehdytMaalit = TehdytMaalit + '".$awayGoals."' WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

//lisätään päästetyt maalit
$sql = "UPDATE Joukkueet SET PaastetytMaalit = PaastetytMaalit + '".$homeGoals."' WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET PaastetytMaalit = PaastetytMaalit + '".$awayGoals."' WHERE id = '".$homeTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}


}




if ($homeTeam == "CSKA Moskva") {
     $sql = "UPDATE Joukkueet SET Pisteet = Pisteet + 3 WHERE id = 3";
      if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

//lisätään pelatut pelit
$sql = "UPDATE Joukkueet SET PelatutPelit = PelatutPelit + 1 WHERE id = 3";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET PelatutPelit = PelatutPelit + 1 WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

//lisätään voitetetut pelit
$sql = "UPDATE Joukkueet SET VoitetutPelit = VoitetutPelit + 1 WHERE id = 3";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}


$sql = "UPDATE Joukkueet SET TehdytMaalit = TehdytMaalit + '".$homeGoals."' WHERE id = 3";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET TehdytMaalit = TehdytMaalit + '".$awayGoals."' WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

//lisätään päästetyt maalit
$sql = "UPDATE Joukkueet SET PaastetytMaalit = PaastetytMaalit + '".$homeGoals."' WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET PaastetytMaalit = PaastetytMaalit + '".$awayGoals."' WHERE id = '".$homeTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}


}



if ($homeTeam == "Benfica") {
     $sql = "UPDATE Joukkueet SET Pisteet = Pisteet + 3 WHERE id = 4";
      if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}


//lisätään pelatut pelit
$sql = "UPDATE Joukkueet SET PelatutPelit = PelatutPelit + 1 WHERE id = 4";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET PelatutPelit = PelatutPelit + 1 WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

//lisätään voitetetut pelit
$sql = "UPDATE Joukkueet SET VoitetutPelit = VoitetutPelit + 1 WHERE id = 4";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET TehdytMaalit = TehdytMaalit + '".$homeGoals."' WHERE id = 4";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET TehdytMaalit = TehdytMaalit + '".$awayGoals."' WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

//lisätään päästetyt maalit
$sql = "UPDATE Joukkueet SET PaastetytMaalit = PaastetytMaalit + '".$homeGoals."' WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET PaastetytMaalit = PaastetytMaalit + '".$awayGoals."' WHERE id = '".$homeTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}



}


    //hävityt pelit
     $sql = "UPDATE Joukkueet SET HavitytPelit = HavitytPelit + 1 WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}


}
if($awayGoals > $homeGoals ) {
if ($awayTeam == "Man united") {
    $sql = "UPDATE Joukkueet SET Pisteet = Pisteet + 3 WHERE id = 1";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

//lisätään pelatut pelit
$sql = "UPDATE Joukkueet SET PelatutPelit = PelatutPelit + 1 WHERE id = 1";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET PelatutPelit = PelatutPelit + 1 WHERE id = '".$homeTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

//lisätään voitetetut pelit
$sql = "UPDATE Joukkueet SET VoitetutPelit = VoitetutPelit + 1 WHERE id = 1";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET TehdytMaalit = TehdytMaalit + '".$homeGoals."' WHERE id = '".$homeTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET TehdytMaalit = TehdytMaalit + '".$awayGoals."' WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

//lisätään päästetyt maalit
$sql = "UPDATE Joukkueet SET PaastetytMaalit = PaastetytMaalit + '".$homeGoals."' WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET PaastetytMaalit = PaastetytMaalit + '".$awayGoals."' WHERE id = '".$homeTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

}


 if ($awayTeam == "BASEL") {
    $sql = "UPDATE Joukkueet SET Pisteet = Pisteet + 3 WHERE id = 2";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

//lisätään pelatut pelit
$sql = "UPDATE Joukkueet SET PelatutPelit = PelatutPelit + 1 WHERE id = 2";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET PelatutPelit = PelatutPelit + 1 WHERE id = '".$homeTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

//lisätään voitetetut pelit
$sql = "UPDATE Joukkueet SET VoitetutPelit = VoitetutPelit + 1 WHERE id = 2";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET TehdytMaalit = TehdytMaalit + '".$homeGoals."' WHERE id = '".$homeTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET TehdytMaalit = TehdytMaalit + '".$awayGoals."' WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

//lisätään päästetyt maalit
$sql = "UPDATE Joukkueet SET PaastetytMaalit = PaastetytMaalit + '".$homeGoals."' WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET PaastetytMaalit = PaastetytMaalit + '".$awayGoals."' WHERE id = '".$homeTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}


}



if ($awayTeam == "CSKA Moskva") {
     $sql = "UPDATE Joukkueet SET Pisteet = Pisteet + 3 WHERE id = 3";
      if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}


//lisätään pelatut pelit
$sql = "UPDATE Joukkueet SET PelatutPelit = PelatutPelit + 1 WHERE id = 3";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET PelatutPelit = PelatutPelit + 1 WHERE id = '".$homeTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

//lisätään voitetetut pelit
$sql = "UPDATE Joukkueet SET VoitetutPelit = VoitetutPelit + 1 WHERE id = 3";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}


$sql = "UPDATE Joukkueet SET TehdytMaalit = TehdytMaalit + '".$homeGoals."' WHERE id = '".$homeTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET TehdytMaalit = TehdytMaalit + '".$awayGoals."' WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

//lisätään päästetyt maalit
$sql = "UPDATE Joukkueet SET PaastetytMaalit = PaastetytMaalit + '".$homeGoals."' WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET PaastetytMaalit = PaastetytMaalit + '".$awayGoals."' WHERE id = '".$homeTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}


}




if ($awayTeam == "Benfica") {
     $sql = "UPDATE Joukkueet SET Pisteet = Pisteet + 3 WHERE id = 4";
      if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

//lisätään pelatut pelit
$sql = "UPDATE Joukkueet SET PelatutPelit = PelatutPelit + 1 WHERE id = 4";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET PelatutPelit = PelatutPelit + 1 WHERE id = '".$homeTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

//lisätään voitetetut pelit
$sql = "UPDATE Joukkueet SET VoitetutPelit = VoitetutPelit + 1 WHERE id = 4";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}


$sql = "UPDATE Joukkueet SET TehdytMaalit = TehdytMaalit + '".$homeGoals."' WHERE id = '".$homeTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET TehdytMaalit = TehdytMaalit + '".$awayGoals."' WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

//lisätään päästetyt maalit
$sql = "UPDATE Joukkueet SET PaastetytMaalit = PaastetytMaalit + '".$homeGoals."' WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET PaastetytMaalit = PaastetytMaalit + '".$awayGoals."' WHERE id = '".$homeTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

}

//hävityt pelit

 $sql = "UPDATE Joukkueet SET HavitytPelit = HavitytPelit + 1 WHERE id = '".$homeTeamID."'";
if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

 }


    // jos tasapeli
   if( $homeGoals == $awayGoals) {



if ($homeTeam == "Man united") {
    //lisätään pisteet
     $sql = "UPDATE Joukkueet SET Pisteet = Pisteet + 1 WHERE id = 1";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

//lisätään pelatut pelit
$sql = "UPDATE Joukkueet SET PelatutPelit = PelatutPelit + 1 WHERE id = 1";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET PelatutPelit = PelatutPelit + 1 WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}


$sql = "UPDATE Joukkueet SET TehdytMaalit = TehdytMaalit + '".$homeGoals."' WHERE id = '".$homeTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET TehdytMaalit = TehdytMaalit + '".$awayGoals."' WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

//lisätään päästetyt maalit
$sql = "UPDATE Joukkueet SET PaastetytMaalit = PaastetytMaalit + '".$homeGoals."' WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET PaastetytMaalit = PaastetytMaalit + '".$awayGoals."' WHERE id = '".$homeTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}



}



 if ($homeTeam == "BASEL") {

     //lisätään pisteet
     $sql = "UPDATE Joukkueet SET Pisteet = Pisteet + 1 WHERE id = 2";
      if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

//lisätään pelatut pelit
$sql = "UPDATE Joukkueet SET PelatutPelit = PelatutPelit + 1 WHERE id = 2";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET PelatutPelit = PelatutPelit + 1 WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET TehdytMaalit = TehdytMaalit + '".$homeGoals."' WHERE id = '".$homeTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET TehdytMaalit = TehdytMaalit + '".$awayGoals."' WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

//lisätään päästetyt maalit
$sql = "UPDATE Joukkueet SET PaastetytMaalit = PaastetytMaalit + '".$homeGoals."' WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET PaastetytMaalit = PaastetytMaalit + '".$awayGoals."' WHERE id = '".$homeTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}


}




if ($homeTeam == "CSKA Moskva") {
     $sql = "UPDATE Joukkueet SET Pisteet = Pisteet + 1 WHERE id = 3";
      if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

//lisätään pelatut pelit
$sql = "UPDATE Joukkueet SET PelatutPelit = PelatutPelit + 1 WHERE id = 3";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET PelatutPelit = PelatutPelit + 1 WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET TehdytMaalit = TehdytMaalit + '".$homeGoals."' WHERE id = '".$homeTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET TehdytMaalit = TehdytMaalit + '".$awayGoals."' WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

//lisätään päästetyt maalit
$sql = "UPDATE Joukkueet SET PaastetytMaalit = PaastetytMaalit + '".$homeGoals."' WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET PaastetytMaalit = PaastetytMaalit + '".$awayGoals."' WHERE id = '".$homeTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}


}



if ($homeTeam == "Benfica") {
     $sql = "UPDATE Joukkueet SET Pisteet = Pisteet + 1 WHERE id = 4";
      if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}


//lisätään pelatut pelit
$sql = "UPDATE Joukkueet SET PelatutPelit = PelatutPelit + 1 WHERE id = 4";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET PelatutPelit = PelatutPelit + 1 WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET TehdytMaalit = TehdytMaalit + '".$homeGoals."' WHERE id = '".$homeTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET TehdytMaalit = TehdytMaalit + '".$awayGoals."' WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

//lisätään päästetyt maalit
$sql = "UPDATE Joukkueet SET PaastetytMaalit = PaastetytMaalit + '".$homeGoals."' WHERE id = '".$awayTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

$sql = "UPDATE Joukkueet SET PaastetytMaalit = PaastetytMaalit + '".$awayGoals."' WHERE id = '".$homeTeamID."'";
     if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

}

   }

 }


?>

    <!-- Lisäyslomake -->
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

  </div>
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

  <!-- kotijoukkueen maalit -->
  <div class="form-group addFormItem">
      <label>Kotijoukkueen maalit</label>
      <br>
   <select class="maalit" name="kotiMaalit">
    <option value="Kotijoukkuemaalit" disabled selected="selected">Valitse Maalimäärä</option>
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select>
<br>
<br>

  </div>

   <!-- vierasjoukkueen maalit -->
  <div class="form-group addFormItem">
      <label>Vierasjoukkueen maalit</label>
      <br>
   <select class="maalit" name="vierasMaalit">
       <option value="Vierasjoukkuemaalit" disabled selected="selected">Valitse Maalimäärä</option>
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select>
<br>
<br>

  </div>

   <input type="date" class="form-control" id="pvm" name="pvm" required>
   <br>
   <br>
  <button type="submit" class="btn btn-primary formButton" name="adminSubmit">Submit</button>
</form>


</div>


<div class="gameList" id="ListOfGames">



    <div class="gameListGame">
       <label id="gamelistH1">Pelit</label>

      <button onclick="deleteGameQuestion()" class="btn btn-danger" id="poistaPeliNappi">Poista Peli </button>

       <br>
       <br>
        <?php
      $sql = "SELECT * from Pelit ORDER BY id";
      $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        echo "Peli ID: " . $row["id"]. "<br>" . "Kotijoukkue: " . $row["Kotijoukkue"]. "<br>" . " Vierasjoukkue: " . $row["Vierasjoukkue"]. "<br>" . " Tulos: " . $row["Tulos"]."<br>". "päivämäärä: ". $row["pvm"]. "<br>". "<br>". "<br>";


    }
} else {
    echo "0 results";
}
      ?>
    </div>

</div>


 <div id="popUp3">

    <form method="POST">
             <label> Anna poistettavan pelin ID</label>

  <div class="form-group">


    <input type="number" name="gameToDelete" method="POST"class="form-control" id="deleteInput" required>

    <?php
   if(isset($_POST['deletionButton2'])){
       //otetaan Id talteen
       $deletedgameID = $_POST['gameToDelete'];
       //poistetaan peli tietokannasta
        $sql = "DELETE from Pelit where id = '".$deletedgameID."'";
    if (!$mysqli->query($sql)) {
    alert("INSERT failed: (" . $dbc->errno . ") " . $dbc->error);
}

}
    ?>


  </div>
  <button type="submit" method="POST" name="deletionButton2"  class="btn btn-danger" onclick="areYouSure()" id="deleteButton">Poista peli</button>
  </form>
  <form>
  <button onclick="closeDelete()" class="btn btn-primary cancel">Peruuta</button>
   </form>




     </div>



















</body>
</html>
