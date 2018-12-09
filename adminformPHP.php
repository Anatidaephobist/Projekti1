<?php
session_start();
include_once 'functions.php';


//luodaan pelinID
$gameID++;

 if(isset($_POST["adminSubmit"])) {
     
     alert($_SESSION['vierasjoukkue']);
}




    //Otetaan KotiJoukkueen arvo;
   $hometeam = $_SESSION['kotijoukkue'];
  

    //otetan talteen vierasjoukkue
    $awayTeam = $_SESSION['vierasjoukkue'];




//syötetään arvot tietokantaan
  $sql = "INSERT INTO Pelit (id, Kotijoukkue, Vierasjoukkue, pvm, Tulos) VALUES ('".$gameID."', '".$homeTeam."', '".$awayTeam."', '".$date."','".$outcome."')";

    if (!$mysqli->query($sql)) {
    alert("tietojen syotto epaonnistui (" . $dbc->errno . ") " . $dbc->error);
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




?>


 <div id="popUp3">
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




    <form method="POST">
             <label> Anna poistettavan pelin ID</label>

  <div class="form-group">


    <input type="number" name="gameToDelete" method="POST" class="form-control" id="deleteInput" required>

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




    ?>

    </div>
        </form>
    </div>
    