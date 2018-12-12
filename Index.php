<?php
session_start();
include_once 'login.php';
include_once 'config.php';
include_once 'functions.php';

session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/submit.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="blur-svg">

<script>

var kirjautunut = "<?php echo $_SESSION['userIsAdmin']; ?>"

var ScoreMakers = document.getElementsByClassName("goalScorerDiv"), n;

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
    window.location.href = "adminform.php";
    document.getElementById("popUp3").style.display = "block";
    document.getElementById("ListOfGames").style.display = "block";
    
    } else {
     document.getElementById("logInButton").style.display = "block";
     document.getElementById("logOutButton").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "block";
     document.getElementById("adminForm").style.display = "none";
     document.getElementById("adminForm2").style.display = "none";
     document.getElementById("ListOfGames").style.display = "none"
}
}

function  playerCard1() {
     document.getElementById("teamInfoBoxWrapperA").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers1").style.display = "block";
}
function  playerCard2() {
     document.getElementById("teamInfoBoxWrapperA").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers2").style.display = "block";
}
function  playerCard3() {
     document.getElementById("teamInfoBoxWrapperA").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers3").style.display = "block";
}
function  playerCard4() {
     document.getElementById("teamInfoBoxWrapperA").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers4").style.display = "block";
}
function  playerCard5() {
     document.getElementById("teamInfoBoxWrapperB").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers5").style.display = "block";
}
function  playerCard6() {
     document.getElementById("teamInfoBoxWrapperB").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers6").style.display = "block";
}
function  playerCard7() {
     document.getElementById("teamInfoBoxWrapperB").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers7").style.display = "block";
}
function  playerCard8() {
     document.getElementById("teamInfoBoxWrapperB").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers8").style.display = "block";
}
function  playerCard9() {
     document.getElementById("teamInfoBoxWrapperC").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers9").style.display = "block";
}
function  playerCard10() {
     document.getElementById("teamInfoBoxWrapperC").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers10").style.display = "block";
}
function  playerCard11() {
     document.getElementById("teamInfoBoxWrapperC").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers11").style.display = "block";
}
function  playerCard12() {
     document.getElementById("teamInfoBoxWrapperC").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers12").style.display = "block";
}
function  playerCard13() {
     document.getElementById("teamInfoBoxWrapperD").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers13").style.display = "block";
}
function  playerCard14() {
     document.getElementById("teamInfoBoxWrapperD").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers14").style.display = "block";
}
function  playerCard15() {
     document.getElementById("teamInfoBoxWrapperD").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers15").style.display = "block";
}
function  playerCard16() {
     document.getElementById("teamInfoBoxWrapperD").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers16").style.display = "block";
}
function  playerCard17() {
     document.getElementById("teamInfoBoxWrapperE").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers17").style.display = "block";
}
function  playerCard18() {
     document.getElementById("teamInfoBoxWrapperE").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers18").style.display = "block";
}
function  playerCard19() {
     document.getElementById("teamInfoBoxWrapperE").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers19").style.display = "block";
}
function  playerCard20() {
     document.getElementById("teamInfoBoxWrapperE").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers20").style.display = "block";
}
function  playerCard21() {
     document.getElementById("teamInfoBoxWrapperF").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers21").style.display = "block";
}
function  playerCard22() {
     document.getElementById("teamInfoBoxWrapperF").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers22").style.display = "block";
}
function  playerCard23() {
     document.getElementById("teamInfoBoxWrapperF").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers23").style.display = "block";
}
function  playerCard24() {
     document.getElementById("teamInfoBoxWrapperF").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers24").style.display = "block";
}
function  playerCard25() {
     document.getElementById("teamInfoBoxWrapperG").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers25").style.display = "block";
}
function  playerCard26() {
     document.getElementById("teamInfoBoxWrapperG").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers26").style.display = "block";
}
function  playerCard27() {
     document.getElementById("teamInfoBoxWrapperG").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers27").style.display = "block";
}
function  playerCard28() {
     document.getElementById("teamInfoBoxWrapperG").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers28").style.display = "block";
}
function  playerCard29() {
     document.getElementById("teamInfoBoxWrapperH").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers29").style.display = "block";
}
function  playerCard30() {
     document.getElementById("teamInfoBoxWrapperH").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers30").style.display = "block";
}
function  playerCard31() {
     document.getElementById("teamInfoBoxWrapperH").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers31").style.display = "block";
}
function  playerCard32() {
     document.getElementById("teamInfoBoxWrapperH").style.display = "none";
     document.getElementById("popUp").style.display = "none";
     document.getElementById("popUp2").style.display = "none";
     document.getElementById("popUpWrapper").style.display = "none";
     document.getElementById("wrapperOfPlayers32").style.display = "block";
}
function closeLogIn() {
    document.getElementById("closeLogIn").style.display = "none";
}

function deleteGameQuestion() {
   document.getElementById("popUp3").style.display = "block";
}

function deleteGame() {
document.getElementById("popUp3").style.display = "none";
alert(<?php echo $_POST['gameToDelete'];?>)
}

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
        var x = document.getElementsByClassName("playerList");
        var i;
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
}

function closeDelete() {
    document.getElementById("popUp3").style.display = "none";
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
    document.getElementById("adminForm1").style.display = "none";
    document.getElementById("adminForm2").style.display = "none";
    document.getElementById("popUp").style.display = "block";
}

function notSure() {
    document.getElementById("popUp4").style.display = "none";
}

</script>

<?php
$kirjautunut = $_SESSION['userIsAdmin'];
?>

<title>Jalkapalloliiga</title>
</head>
<body background="football1.jpg" onload="adminMode()">
    <button onclick="openLogIn()" class="btn btn-primary" id="logInButton"> Kirjaudu</button>
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
<?php include 'Divisions/DivisionA.php' ?>
<!-- B-lohko -->
<?php include 'Divisions/DivisionB.php' ?>
</div>
<!-- C-lohko -->
<?php include 'Divisions/DivisionC.php' ?>
<!-- D-lohko -->
<?php include 'Divisions/DivisionD.php' ?>
<!-- E-lohko -->
<?php include 'Divisions/DivisionE.php' ?>
<!-- F-lohko -->
<?php include "Divisions/DivisionF.php" ?>
<!-- G-lohko -->
<?php include 'Divisions/DivisionG.php' ?>
<!-- H-lohko -->
<?php include 'Divisions/DivisionH.php' ?>

</body>
</html>
