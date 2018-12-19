<?php
session_start();
include 'functions.php';
error_reporting(0);
?>

<html>
<head>
 <meta charset="UTF-8">
   <script>
   function adminLogOut()  {
       /*<?php $_SESSION['userIsAdmin'] = 0; ?>*/
       window.location.href = "Index.php";
   }
   </script>

</head>










<?php
 if(isset($_POST["adminSubmit"])) {
     
   //oman maalin talteen ottaminen
   $owngoal1 = $_POST['owngoal1'];
   $owngoal2 = $_POST['owngoal2'];
   $owngoal3 = $_POST['owngoal3'];
   $owngoal4 = $_POST['owngoal4'];
   $owngoal5 = $_POST['owngoal5'];
   $owngoal6 = $_POST['owngoal6'];
   $owngoal7 = $_POST['owngoal7'];
   $owngoal8 = $_POST['owngoal8'];
   $owngoal9 = $_POST['owngoal9'];
   $owngoal10 = $_POST['owngoal10'];
   
  //korttien talteen ottaminen
   $yellowcard1 = $_POST['Card1'];
   $yellowcard2 = $_POST['Card2'];
   $yellowcard3 = $_POST['Card3'];
   $yellowcard4 = $_POST['Card4'];
   $yellowcard5 = $_POST['Card5'];
   
   $redcard1 = $_POST['Card11'];
   $redcard2 = $_POST['Card22'];
   $redcard3 = $_POST['Card33'];
   $redcard4 = $_POST['Card44'];
   $redcard5 = $_POST['Card55'];
  

    //pvm talteen ottaminen
    $pvm = $_POST['pvm'];
    $_SESSION['pvm'] = $pvm;

    //arvojen talteen ottaminen
    $_SESSION['gameID'];
    //maalien määrä
     $numberOfGoals = $_POST['input1'];
    $_SESSION['numberOfGoals'] = $numberOfGoals;
    
    //korttien määrä
    $numberOfCards = $_POST['input2'];
    $_SESSION['numberOfCards'] = $numberOfCards;
    
    //maalintekijät  nimenä
    $maalintekija1 = $_POST['maalintekija1'];
    $_SESSION['maalintekija1'] = $maalintekija1;

    
    $maalintekija2 = $_POST['maalintekija2'];
    $_SESSION['maalintekija2'] = $maalintekija2;
    
    $maalintekija3 = $_POST['maalintekija3'];
    $_SESSION['maalintekija3'] = $maalintekija3;
    
    $maalintekija4 = $_POST['maalintekija4'];
    $_SESSION['maalintekija4'] = $maalintekija4;
    
    $maalintekija5 = $_POST['maalintekija5'];
    $_SESSION['maalintekija5'] = $maalintekija5;
    
    $maalintekija6 = $_POST['maalintekija6'];
    $_SESSION['maalintekija6'] = $maalintekija6;
    
    $maalintekija7 = $_POST['maalintekija7'];
    $_SESSION['maalintekija7'] = $maalintekija7;
    
    $maalintekija8 = $_POST['maalintekija8'];
    $_SESSION['maalintekija8'] = $maalintekija8;
    
    $maalintekija9 = $_POST['maalintekija9'];
    $_SESSION['maalintekija9'] = $maalintekija9;
    
    $maalintekija10 = $_POST['maalintekija10'];
    $_SESSION['maalintekija10'] = $maalintekija10;
    
    
    
    //kortin saajat nimenä
    $virheensaaja1 = $_POST['virheensaaja1'];
    $_SESSION['virheensaaja1'] = $virheensaaja1;
    
    $virheensaaja2 = $_POST['virheensaaja1'];
    $_SESSION['virheensaaja2'] = $virheensaaja2;
    
    $virheensaaja3 = $_POST['virheensaaja1'];
    $_SESSION['virheensaaja3'] = $virheensaaja3;
    
    $virheensaaja4 = $_POST['virheensaaja1'];
    $_SESSION['virheensaaja4'] = $virheensaaja4;
    
    $virheensaaja5 = $_POST['virheensaaja1'];
    $_SESSION['virheensaaja5'] = $virheensaaja5;
    
    
    
    
    
    
    
    $gameID = 1;
    
    $idOfPlayer1w;
    $idOfPlayer2w;
    $idOfPlayer3w;
    $idOfPlayer4w;
    $idOfPlayer5w;
    
    $idOfPlayer1;
    $idOfPlayer2;
    $idOfPlayer3;
    $idOfPlayer4;
    $idOfPlayer5;
    $idOfPlayer6;
    $idOfPlayer7;
    $idOfPlayer8;
    $idOfPlayer9;
    $idOfPlayer10;
    
    $_SESSION['hometeamscore'];
    $_SESSION['awayteamscore'];
    $hometeamScore = 0;
    $awayteamScore = 0;
    
    
    //haetaan pelinID
    	$sql25 = "SELECT id FROM Pelit ORDER BY id DESC LIMIT 1";
		$result25 = $mysqli->query($sql25);
if ($result25->num_rows > 0) {
		while($row = $result25->fetch_assoc()) {
		   $gameID = $row['id'];
		   
		  $_SESSION['gameID'] = $gameID;
		   
}
}

    //haetaan pelaajan ID - maalintekijä1
	$sql109 = "SELECT id FROM Pelaajat WHERE EtuNimi = '".$maalintekija1."'"." AND JoukkueID = ".$_SESSION['kotijoukkue']." OR EtuNimi ='".$maalintekija1."'"." AND JoukkueID = ".$_SESSION['vierasjoukkue'];
		$result109 = $mysqli->query($sql109);
if ($result109->num_rows > 0) {
		while($row = $result109->fetch_assoc()) {
		 $idOfPlayer1 = $row['id'];

}


}


 //haetaan pelaajan ID - maalintekijä2
	$sql110 = "SELECT id FROM Pelaajat WHERE EtuNimi = '".$maalintekija2."'"." AND JoukkueID = ".$_SESSION['kotijoukkue']." OR EtuNimi ='".$maalintekija2."'"." AND JoukkueID = ".$_SESSION['vierasjoukkue'];
		$result110 = $mysqli->query($sql110);
if ($result110->num_rows > 0) {
		while($row = $result110->fetch_assoc()) {
		 $idOfPlayer2 = $row['id'];

}

}

//haetaan pelaajan ID - maalintekijä3
	$sql111 = "SELECT id FROM Pelaajat WHERE EtuNimi = '".$maalintekija3."'"." AND JoukkueID = ".$_SESSION['kotijoukkue']." OR EtuNimi ='".$maalintekija3."'"." AND JoukkueID = ".$_SESSION['vierasjoukkue'];
		$result111 = $mysqli->query($sql111);
if ($result111->num_rows > 0) {
		while($row = $result111->fetch_assoc()) {
		 $idOfPlayer3 = $row['id'];

}
}

//haetaan pelaajan ID - maalintekijä4
	$sql114 = "SELECT id FROM Pelaajat WHERE EtuNimi = '".$maalintekija4."'"." AND JoukkueID = ".$_SESSION['kotijoukkue']." OR EtuNimi ='".$maalintekija4."'"." AND JoukkueID = ".$_SESSION['vierasjoukkue'];
		$result114 = $mysqli->query($sql114);
if ($result114->num_rows > 0) {
		while($row = $result114->fetch_assoc()) {
		 $idOfPlayer4 = $row['id'];

}
}

//haetaan pelaajan ID - maalintekijä5
	$sql115 = "SELECT id FROM Pelaajat WHERE EtuNimi = '".$maalintekija5."'"." AND JoukkueID = ".$_SESSION['kotijoukkue']." OR EtuNimi ='".$maalintekija5."'"." AND JoukkueID = ".$_SESSION['vierasjoukkue'];
		$result115 = $mysqli->query($sql115);
if ($result115->num_rows > 0) {
		while($row = $result115->fetch_assoc()) {
		 $idOfPlayer5 = $row['id'];

}
}

//haetaan pelaajan ID - maalintekijä6
	$sql116 = "SELECT id FROM Pelaajat WHERE EtuNimi = '".$maalintekija6."'"." AND JoukkueID = ".$_SESSION['kotijoukkue']." OR EtuNimi ='".$maalintekija6."'"." AND JoukkueID = ".$_SESSION['vierasjoukkue'];
		$result116 = $mysqli->query($sq11l6);
if ($result116->num_rows > 0) {
		while($row = $result116->fetch_assoc()) {
		 $idOfPlayer6 = $row['id'];

}
}

//haetaan pelaajan ID - maalintekijä7
	$sql117 = "SELECT id FROM Pelaajat WHERE EtuNimi = '".$maalintekija7."'"." AND JoukkueID = ".$_SESSION['kotijoukkue']." OR EtuNimi ='".$maalintekija7."'"." AND JoukkueID = ".$_SESSION['vierasjoukkue'];
		$result117 = $mysqli->query($sql117);
if ($result117->num_rows > 0) {
		while($row = $result117->fetch_assoc()) {
		 $idOfPlayer7 = $row['id'];

}
}

//haetaan pelaajan ID - maalintekijä8
	$sql118 = "SELECT id FROM Pelaajat WHERE EtuNimi = '".$maalintekija8."'"." AND JoukkueID = ".$_SESSION['kotijoukkue']." OR EtuNimi ='".$maalintekija8."'"." AND JoukkueID = ".$_SESSION['vierasjoukkue'];
		$result118 = $mysqli->query($sql118);
if ($result118->num_rows > 0) {
		while($row = $result118->fetch_assoc()) {
		 $idOfPlayer8 = $row['id'];

}
}

//haetaan pelaajan ID - maalintekijä9
	$sql119 = "SELECT id FROM Pelaajat WHERE EtuNimi = '".$maalintekija9."'"." AND JoukkueID = ".$_SESSION['kotijoukkue']." OR EtuNimi ='".$maalintekija9."'"." AND JoukkueID = ".$_SESSION['vierasjoukkue'];
		$result119 = $mysqli->query($sql119);
if ($result119->num_rows > 0) {
		while($row = $result119->fetch_assoc()) {
		 $idOfPlayer9 = $row['id'];

}
}

//haetaan pelaajan ID - maalintekijä10
	$sql120 = "SELECT id FROM Pelaajat WHERE EtuNimi = '".$maalintekija10."'"." AND JoukkueID = ".$_SESSION['kotijoukkue']." OR EtuNimi ='".$maalintekija10."'"." AND JoukkueID = ".$_SESSION['vierasjoukkue'];
		$result120 = $mysqli->query($sql120);
if ($result120->num_rows > 0) {
		while($row = $result120->fetch_assoc()) {
		 $idOfPlayer10 = $row['id'];

}
}

 //haetaan pelaajan ID - virheensaaja1
	$sql1090 = "SELECT id FROM Pelaajat WHERE EtuNimi = '".$virheensaaja1."'"." AND JoukkueID = ".$_SESSION['kotijoukkue']." OR EtuNimi ='".$virheensaaja1."'"." AND JoukkueID = ".$_SESSION['vierasjoukkue'];
		$result1090 = $mysqli->query($sql1090);
if ($result1090->num_rows > 0) {
		while($row = $result1090->fetch_assoc()) {
		 $idOfPlayer1w = $row['id'];

}
}

//haetaan pelaajan ID - virheensaaja2
	$sql1091 = "SELECT id FROM Pelaajat WHERE EtuNimi = '".$virheensaaja2."'"." AND JoukkueID = ".$_SESSION['kotijoukkue']." OR EtuNimi ='".$virheensaaja2."'"." AND JoukkueID = ".$_SESSION['vierasjoukkue'];
		$result1091 = $mysqli->query($sql1091);
if ($result1091->num_rows > 0) {
		while($row = $result1091->fetch_assoc()) {
		 $idOfPlayer2w = $row['id'];

}
}

//haetaan pelaajan ID - virheensaaja3
	$sql1092 = "SELECT id FROM Pelaajat WHERE EtuNimi = '".$virheensaaja3."'"." AND JoukkueID = ".$_SESSION['kotijoukkue']." OR EtuNimi ='".$virheensaaja3."'"." AND JoukkueID = ".$_SESSION['vierasjoukkue'];
		$result1092 = $mysqli->query($sql1092);
if ($result1092->num_rows > 0) {
		while($row = $result1092->fetch_assoc()) {
		 $idOfPlayer3w = $row['id'];

}
}

//haetaan pelaajan ID - virheensaaja4
	$sql1093 = "SELECT id FROM Pelaajat WHERE EtuNimi = '".$virheensaaja3."'"." AND JoukkueID = ".$_SESSION['kotijoukkue']." OR EtuNimi ='".$virheensaaja3."'"." AND JoukkueID = ".$_SESSION['vierasjoukkue'];
		$result1093 = $mysqli->query($sql1093);
if ($result1093->num_rows > 0) {
		while($row = $result1093->fetch_assoc()) {
		 $idOfPlayer4w = $row['id'];

}
}

//haetaan pelaajan ID - virheensaaja5
	$sql1094 = "SELECT id FROM Pelaajat WHERE EtuNimi = '".$virheensaaja3."'"." AND JoukkueID = ".$_SESSION['kotijoukkue']." OR EtuNimi ='".$virheensaaja3."'"." AND JoukkueID = ".$_SESSION['vierasjoukkue'];
		$result1094 = $mysqli->query($sql1094);
if ($result1094->num_rows > 0) {
		while($row = $result1094->fetch_assoc()) {
		 $idOfPlayer5w = $row['id'];

}
}





$hometeam = $_SESSION['kotijoukkue'];
$awayteam = $_SESSION['vierasjoukkue'];


//lisätään joukkueille pelatut pelit
$sql601 = "UPDATE Joukkueet SET PelatutPelit=PelatutPelit+1 WHERE id = '".$hometeam."'";
$sql602 = "UPDATE Joukkueet SET PelatutPelit=PelatutPelit+1 WHERE id = '".$awayteam."'";

//jos pelien päivitys onnistuu
if ($mysqli->query($sql601) == TRUE and $mysqli->query($sql602) == TRUE) {
    
}

//haetaan Pelaajien Joukkueet
$teamIDOfPlayer1 = databaseQuery('Pelaajat','JoukkueID',$idOfPlayer1);
$teamIDOfPlayer2 = databaseQuery('Pelaajat','JoukkueID',$idOfPlayer2);
$teamIDOfPlayer3 = databaseQuery('Pelaajat','JoukkueID',$idOfPlayer3);
$teamIDOfPlayer4 = databaseQuery('Pelaajat','JoukkueID',$idOfPlayer4);
$teamIDOfPlayer5 = databaseQuery('Pelaajat','JoukkueID',$idOfPlayer5);
$teamIDOfPlayer6 = databaseQuery('Pelaajat','JoukkueID',$idOfPlayer6);
$teamIDOfPlayer7 = databaseQuery('Pelaajat','JoukkueID',$idOfPlayer7);
$teamIDOfPlayer8 = databaseQuery('Pelaajat','JoukkueID',$idOfPlayer8);
$teamIDOfPlayer9 = databaseQuery('Pelaajat','JoukkueID',$idOfPlayer9);
$teamIDOfPlayer10 = databaseQuery('Pelaajat','JoukkueID',$idOfPlayer10);

//haetaan virheensaajien joukkueet
$teamIDOfPlayer1w = databaseQuery('Pelaajat','JoukkueID',$idOfPlayer1w);
$teamIDOfPlayer2w = databaseQuery('Pelaajat','JoukkueID',$idOfPlayer2w);
$teamIDOfPlayer3w = databaseQuery('Pelaajat','JoukkueID',$idOfPlayer3w);
$teamIDOfPlayer4w = databaseQuery('Pelaajat','JoukkueID',$idOfPlayer4w);
$teamIDOfPlayer5w = databaseQuery('Pelaajat','JoukkueID',$idOfPlayer5w);







   // lisätään maalitapahtuma
   
//1
if($_SESSION['numberOfGoals'] == 1) {
        $player1 = $_SESSION['maalintekija1'];
 
        $sql12 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer1."','maali')"; 

//jos tapahtuman lisäys onnistuu niin lisää maalit pelaajalle
if ($mysqli->query($sql12) == TRUE) {
    //alert("New Happening(1) created successfully");
    
 $sql301 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer1."'"; 

//lisätään pelatut pelit Pelaajan Joukkueelle
if ($mysqli->query($sql301) == TRUE) {
    //alert("Player(1) statistics updated successfully");

   


    //alert("Team  goal statistics(1) updated successfully");
    //tarkitetaan onko maalintekijä koti vai vierasjoukkueen pelaaja
    if($hometeam == $teamIDOfPlayer1 and $_SESSION['owngoal1'] !== 'owngoal' or $awayteam == $teamIDOfPlayer1 and $_SESSION['owngoal1'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    
    }   
} else {
    //alert("Error: " . $sql . "<br>" . $mysqli->error);
    
}
}
} //end of numberOfGoals(1)

//2
if($_SESSION['numberOfGoals'] == 2) {
     $player1 = $_SESSION['maalintekija1'];
    $player2 = $_SESSION['maalintekija2'];
       
        
        $sql12 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer1."','maali')";

 $sql13 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer2."','maali')";

//Lisätään maalit pelaajille
if ($mysqli->query($sql12) == TRUE and $mysqli->query($sql13) == TRUE) {
    //alert("New happening(2) created successfully");
    
    $sql301 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer1."'"; 
    $sql302 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer2."'"; 


//lisätään pelatut pelit pelaajan joukkueelle
if ($mysqli->query($sql301) == TRUE and $mysqli->query($sql302) == TRUE) {
    //alert("Player(2) statistics updated successfully");
    
    
    //alert("Team  goal statistics(2) updated successfully");
    //tarkitetaan onko pelaaja koti vai vierasjoukkueen pelaaja
    //1
    if($hometeam == $teamIDOfPlayer1 and $_SESSION['owngoal1'] !== 'owngoal' or $awayteam == $teamIDOfPlayer1 and $_SESSION['owngoal1'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
     //2
   if($hometeam == $teamIDOfPlayer2 and $_SESSION['owngoal2'] !== 'owngoal' or $awayteam == $teamIDOfPlayer2 and $_SESSION['owngoal2'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    
    
}


}else {
    //alert("Error: " . $sql . "<br>" . $mysqli->error);
}
}

} //end of numberOfGoals(2)

//3
if($_SESSION['numberOfGoals'] == 3) {
     $player1 = $_SESSION['maalintekija1'];
     $player2 = $_SESSION['maalintekija2'];
     $player3 = $_SESSION['maalintekija3'];
       
        
$sql12 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer1."','maali')";
 $sql13 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer2."','maali')";
 $sql14 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer3."','maali')";

//Lisätään maalit pelaajille
if ($mysqli->query($sql12) == TRUE and $mysqli->query($sql13) == TRUE and $mysqli->query($sql14) == TRUE) {
    //alert("New happening(3) created successfully");
    
      $sql301 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer1."'"; 
      $sql302 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer2."'";
      $sql303 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer3."'";

if ($mysqli->query($sql301) == TRUE and $mysqli->query($sql302) == TRUE and $mysqli->query($sql303) == TRUE) {
    //alert("Player(3) statistics updated successfully");
    
   
    //tarkitetaan onko pelaaja koti vai vierasjoukkueen pelaaja
    //1
    if($hometeam == $teamIDOfPlayer1 and $_SESSION['owngoal1'] !== 'owngoal' or $awayteam == $teamIDOfPlayer1 and $_SESSION['owngoal1'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
     //2
   if($hometeam == $teamIDOfPlayer2 and $_SESSION['owngoal2'] !== 'owngoal' or $awayteam == $teamIDOfPlayer2 and $_SESSION['owngoal2'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
    //3
   if($hometeam == $teamIDOfPlayer3 and $_SESSION['owngoal3'] !== 'owngoal' or $awayteam == $teamIDOfPlayer3 and $_SESSION['owngoal3'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }

    
    
} else {
    //alert("Error: " . $sql . "<br>" . $mysqli->error);
}
}

} //end of numberOfGoals(3)

//4
if($_SESSION['numberOfGoals'] == 4) {
     $player1 = $_SESSION['maalintekija1'];
     $player2 = $_SESSION['maalintekija2'];
     $player3 = $_SESSION['maalintekija3'];
     $player4 = $_SESSION['maalintekija4'];
       
        
$sql12 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer1."','maali')";
 $sql13 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer2."','maali')";
 $sql14 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer3."','maali')";
$sql15 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer4."','maali')";

//lisätään maalit pelaajille
if ($mysqli->query($sql12) == TRUE and $mysqli->query($sql13) == TRUE and $mysqli->query($sql14) == TRUE and $mysqli->query($sql15) == TRUE) {
    //alert("New happening(4) created successfully");
    
      $sql301 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer1."'"; 
      $sql302 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer2."'";
      $sql303 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer3."'";
      $sql304 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer4."'";

if ($mysqli->query($sql301) == TRUE and $mysqli->query($sql302) == TRUE and $mysqli->query($sql303) == TRUE and $mysqli->query($sql304) == TRUE) {
    //alert("Player(4) statistics updated successfully");
    
  
    //tarkitetaan onko pelaaja koti vai vierasjoukkueen pelaaja
    //1
    if($hometeam == $teamIDOfPlayer1 and $_SESSION['owngoal1'] !== 'owngoal' or $awayteam == $teamIDOfPlayer1 and $_SESSION['owngoal1'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
     //2
   if($hometeam == $teamIDOfPlayer2 and $_SESSION['owngoal2'] !== 'owngoal' or $awayteam == $teamIDOfPlayer2 and $_SESSION['owngoal2'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
    //3
   if($hometeam == $teamIDOfPlayer3 and $_SESSION['owngoal3'] !== 'owngoal' or $awayteam == $teamIDOfPlayer3 and $_SESSION['owngoal3'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
    //4
   if($hometeam == $teamIDOfPlayer4 and $_SESSION['owngoal4'] !== 'owngoal' or $awayteam == $teamIDOfPlayer4 and $_SESSION['owngoal4'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    
}
    
} else {
    //alert("Error: " . $sql . "<br>" . $mysqli->error);
}
}

} //end of numberOfGoals(4)

//5
if($_SESSION['numberOfGoals'] == 5) {
     $player1 = $_SESSION['maalintekija1'];
     $player2 = $_SESSION['maalintekija2'];
     $player3 = $_SESSION['maalintekija3'];
     $player4 = $_SESSION['maalintekija4'];
     $player5 = $_SESSION['maalintekija5'];
       
        
$sql12 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer1."','maali')";
$sql13 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer2."','maali')";
$sql14 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer3."','maali')";
$sql15 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer4."','maali')";
$sql16 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer5."','maali')";

//Lisätään maalit pelaajille
if ($mysqli->query($sql12) == TRUE and $mysqli->query($sql13) == TRUE and $mysqli->query($sql14) == TRUE and $mysqli->query($sql15) == TRUE and $mysqli->query($sql16) == TRUE) {
    //alert("New happening(5) created successfully");
    
      $sql301 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer1."'"; 
      $sql302 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer2."'";
      $sql303 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer3."'";
      $sql304 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer4."'";
      $sql305 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer5."'";
  
if ($mysqli->query($sql301) == TRUE and $mysqli->query($sql302) == TRUE and $mysqli->query($sql303) == TRUE and $mysqli->query($sql304) == TRUE and $mysqli->query($sql305) == TRUE) {
    //alert("Player(5) statistics updated successfully");
    
    //tarkitetaan onko pelaaja koti vai vierasjoukkueen pelaaja
    //1
    if($hometeam == $teamIDOfPlayer1 and $_SESSION['owngoal1'] !== 'owngoal' or $awayteam == $teamIDOfPlayer1 and $_SESSION['owngoal1'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
     //2
   if($hometeam == $teamIDOfPlayer2 and $_SESSION['owngoal2'] !== 'owngoal' or $awayteam == $teamIDOfPlayer2 and $_SESSION['owngoal2'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
    //3
   if($hometeam == $teamIDOfPlayer3 and $_SESSION['owngoal3'] !== 'owngoal' or $awayteam == $teamIDOfPlayer3 and $_SESSION['owngoal3'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
    //4
   if($hometeam == $teamIDOfPlayer4 and $_SESSION['owngoal4'] !== 'owngoal' or $awayteam == $teamIDOfPlayer4 and $_SESSION['owngoal4'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
    
    //5
   if($hometeam == $teamIDOfPlayer5 and $_SESSION['owngoal5'] !== 'owngoal' or $awayteam == $teamIDOfPlayer5 and $_SESSION['owngoal5'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    
    }

    
} else {
    //alert("Error: " . $sql . "<br>" . $mysqli->error);
}
}

} //end of numberOfGoals(5)

//6
if($_SESSION['numberOfGoals'] == 6) {
     $player1 = $_SESSION['maalintekija1'];
     $player2 = $_SESSION['maalintekija2'];
     $player3 = $_SESSION['maalintekija3'];
     $player4 = $_SESSION['maalintekija4'];
     $player5 = $_SESSION['maalintekija5'];
     $player6 = $_SESSION['maalintekija6'];
       
        
$sql12 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer1."','maali')";
$sql13 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer2."','maali')";
$sql14 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer3."','maali')";
$sql15 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer4."','maali')";
$sql16 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer5."','maali')";
$sql17 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer6."','maali')";

//Lisätään maalit pelaajille
if ($mysqli->query($sql12) == TRUE and $mysqli->query($sql13) == TRUE and $mysqli->query($sql14) == TRUE and $mysqli->query($sql15) == TRUE and $mysqli->query($sql16) == TRUE and $mysqli->query($sql17) == TRUE) {
    //alert("New happening(6) created successfully");
    
      $sql301 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer1."'"; 
      $sql302 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer2."'";
      $sql303 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer3."'";
      $sql304 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer4."'";
      $sql305 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer5."'";
      $sql306 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer6."'";
      
if ($mysqli->query($sql301) == TRUE and $mysqli->query($sql302) == TRUE and $mysqli->query($sql303) == TRUE and $mysqli->query($sql304) == TRUE and $mysqli->query($sql305) == TRUE and $mysqli->query($sql306) == TRUE) {
    //alert("Player(6) statistics updated successfully");
   
    //tarkitetaan onko pelaaja koti vai vierasjoukkueen pelaaja
    //1
    if($hometeam == $teamIDOfPlayer1 and $_SESSION['owngoal1'] !== 'owngoal' or $awayteam == $teamIDOfPlayer1 and $_SESSION['owngoal1'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
     //2
   if($hometeam == $teamIDOfPlayer2 and $_SESSION['owngoal2'] !== 'owngoal' or $awayteam == $teamIDOfPlayer2 and $_SESSION['owngoal2'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
    //3
   if($hometeam == $teamIDOfPlayer3 and $_SESSION['owngoal3'] !== 'owngoal' or $awayteam == $teamIDOfPlayer3 and $_SESSION['owngoal3'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
    //4
   if($hometeam == $teamIDOfPlayer4 and $_SESSION['owngoal4'] !== 'owngoal' or $awayteam == $teamIDOfPlayer4 and $_SESSION['owngoal4'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
    
    //5
   if($hometeam == $teamIDOfPlayer5 and $_SESSION['owngoal5'] !== 'owngoal' or $awayteam == $teamIDOfPlayer5 and $_SESSION['owngoal5'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
     //6
   if($hometeam == $teamIDOfPlayer6 and $_SESSION['owngoal6'] !== 'owngoal' or $awayteam == $teamIDOfPlayer6 and $_SESSION['owngoal6'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    
    }

    
} else {
    //alert("Error: " . $sql . "<br>" . $mysqli->error);
}
}

} //end of numberOfGoals(6)

//7
if($_SESSION['numberOfGoals'] == 7) {
     $player1 = $_SESSION['maalintekija1'];
     $player2 = $_SESSION['maalintekija2'];
     $player3 = $_SESSION['maalintekija3'];
     $player4 = $_SESSION['maalintekija4'];
     $player5 = $_SESSION['maalintekija5'];
     $player6 = $_SESSION['maalintekija6'];
     $player7 = $_SESSION['maalintekija7'];
       
        
$sql12 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer1."','maali')";
$sql13 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer2."','maali')";
$sql14 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer3."','maali')";
$sql15 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer4."','maali')";
$sql16 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer5."','maali')";
$sql17 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer6."','maali')";
$sql18 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer7."','maali')";


//lisätään maalit pelaajille
if ($mysqli->query($sql12) == TRUE and $mysqli->query($sql13) == TRUE and $mysqli->query($sql14) == TRUE and $mysqli->query($sql15) == TRUE and $mysqli->query($sql16) == TRUE and $mysqli->query($sql17) == TRUE and $mysqli->query($sql18) == TRUE) {
    //alert("New happening(7) created successfully");
    
      $sql301 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer1."'"; 
      $sql302 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer2."'";
      $sql303 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer3."'";
      $sql304 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer4."'";
      $sql305 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer5."'";
      $sql306 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer6."'";
      $sql307 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer7."'";
      
if ($mysqli->query($sql301) == TRUE and $mysqli->query($sql302) == TRUE and $mysqli->query($sql303) == TRUE and $mysqli->query($sql304) == TRUE and $mysqli->query($sql305) == TRUE and $mysqli->query($sql306) == TRUE and $mysqli->query($sql307) == TRUE) {
    //alert("Player(7) statistics updated successfully");
    
    if ($mysqli->query($sql301) == TRUE and $mysqli->query($sql302) == TRUE and $mysqli->query($sql303) == TRUE and $mysqli->query($sql304) == TRUE and $mysqli->query($sql305) == TRUE and $mysqli->query($sql306) == TRUE and $mysqli->query($sql307) == TRUE and $mysqli->query($sql308) == TRUE) {
    //alert("team(7) statistics updated successfully");
    
   
    //tarkitetaan onko pelaaja koti vai vierasjoukkueen pelaaja
    //1
    if($hometeam == $teamIDOfPlayer1 and $_SESSION['owngoal1'] !== 'owngoal' or $awayteam == $teamIDOfPlayer1 and $_SESSION['owngoal1'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
     //2
   if($hometeam == $teamIDOfPlayer2 and $_SESSION['owngoal2'] !== 'owngoal' or $awayteam == $teamIDOfPlayer2 and $_SESSION['owngoal2'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
    //3
   if($hometeam == $teamIDOfPlayer3 and $_SESSION['owngoal3'] !== 'owngoal' or $awayteam == $teamIDOfPlayer3 and $_SESSION['owngoal3'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
    //4
   if($hometeam == $teamIDOfPlayer4 and $_SESSION['owngoal4'] !== 'owngoal' or $awayteam == $teamIDOfPlayer4 and $_SESSION['owngoal4'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
    
    //5
   if($hometeam == $teamIDOfPlayer5 and $_SESSION['owngoal5'] !== 'owngoal' or $awayteam == $teamIDOfPlayer5 and $_SESSION['owngoal5'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
     //6
   if($hometeam == $teamIDOfPlayer6 and $_SESSION['owngoal6'] !== 'owngoal' or $awayteam == $teamIDOfPlayer6 and $_SESSION['owngoal6'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
     //7
   if($hometeam == $teamIDOfPlayer7 and $_SESSION['owngoal7'] !== 'owngoal' or $awayteam == $teamIDOfPlayer7 and $_SESSION['owngoal7'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    
    }

} else {
    //alert("Error: " . $sql . "<br>" . $mysqli->error);
}
}
}

} //end of numberOfGoals(7)

//8
if($_SESSION['numberOfGoals'] == 8) {
     $player1 = $_SESSION['maalintekija1'];
     $player2 = $_SESSION['maalintekija2'];
     $player3 = $_SESSION['maalintekija3'];
     $player4 = $_SESSION['maalintekija4'];
     $player5 = $_SESSION['maalintekija5'];
     $player6 = $_SESSION['maalintekija6'];
     $player7 = $_SESSION['maalintekija7'];
     $player8 = $_SESSION['maalintekija8'];
       
        
$sql12 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer1."','maali')";
$sql13 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer2."','maali')";
$sql14 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer3."','maali')";
$sql15 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer4."','maali')";
$sql16 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer5."','maali')";
$sql17 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer6."','maali')";
$sql18 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer7."','maali')";
$sql19 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer8."','maali')";

//Laitetaan maalit pelaajille
if ($mysqli->query($sql12) == TRUE and $mysqli->query($sql13) == TRUE and $mysqli->query($sql14) == TRUE and $mysqli->query($sql15) == TRUE and $mysqli->query($sql16) == TRUE and $mysqli->query($sql17) == TRUE and $mysqli->query($sql18) == TRUE and $mysqli->query($sql19) == TRUE) {
    //alert("New happening(8) created successfully");
    
      $sql301 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer1."'"; 
      $sql302 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer2."'";
      $sql303 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer3."'";
      $sql304 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer4."'";
      $sql305 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer5."'";
      $sql306 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer6."'";
      $sql307 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer7."'";
      $sql308 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer8."'";
      
if ($mysqli->query($sql301) == TRUE and $mysqli->query($sql302) == TRUE and $mysqli->query($sql303) == TRUE and $mysqli->query($sql304) == TRUE and $mysqli->query($sql305) == TRUE and $mysqli->query($sql306) == TRUE and $mysqli->query($sql307) == TRUE and $mysqli->query($sql308) == TRUE) {
    //alert("team(8) statistics updated successfully");
    
    
    //tarkitetaan onko pelaaja koti vai vierasjoukkueen pelaaja
    //1
    if($hometeam == $teamIDOfPlayer1 and $_SESSION['owngoal1'] !== 'owngoal' or $awayteam == $teamIDOfPlayer1 and $_SESSION['owngoal1'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
     //2
   if($hometeam == $teamIDOfPlayer2 and $_SESSION['owngoal2'] !== 'owngoal' or $awayteam == $teamIDOfPlayer2 and $_SESSION['owngoal2'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
    //3
   if($hometeam == $teamIDOfPlayer3 and $_SESSION['owngoal3'] !== 'owngoal' or $awayteam == $teamIDOfPlayer3 and $_SESSION['owngoal3'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
    //4
   if($hometeam == $teamIDOfPlayer4 and $_SESSION['owngoal4'] !== 'owngoal' or $awayteam == $teamIDOfPlayer4 and $_SESSION['owngoal4'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
    
    //5
   if($hometeam == $teamIDOfPlayer5 and $_SESSION['owngoal5'] !== 'owngoal' or $awayteam == $teamIDOfPlayer5 and $_SESSION['owngoal5'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
     //6
   if($hometeam == $teamIDOfPlayer6 and $_SESSION['owngoal6'] !== 'owngoal' or $awayteam == $teamIDOfPlayer6 and $_SESSION['owngoal6'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
     //7
   if($hometeam == $teamIDOfPlayer7 and $_SESSION['owngoal7'] !== 'owngoal' or $awayteam == $teamIDOfPlayer7 and $_SESSION['owngoal7'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
     //8
   if($hometeam == $teamIDOfPlayer8 and $_SESSION['owngoal8'] !== 'owngoal' or $awayteam == $teamIDOfPlayer8 and $_SESSION['owngoal8'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    
     
}
    
} else {
    //alert("Error: " . $sql . "<br>" . $mysqli->error);
}
}

} //end of numberOfGoals(8)

//9
if($_SESSION['numberOfGoals'] == 9) {
     $player1 = $_SESSION['maalintekija1'];
     $player2 = $_SESSION['maalintekija2'];
     $player3 = $_SESSION['maalintekija3'];
     $player4 = $_SESSION['maalintekija4'];
     $player5 = $_SESSION['maalintekija5'];
     $player6 = $_SESSION['maalintekija6'];
     $player7 = $_SESSION['maalintekija7'];
     $player8 = $_SESSION['maalintekija8'];
     $player9 = $_SESSION['maalintekija9'];
       
        
$sql12 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer1."','maali')";
$sql13 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer2."','maali')";
$sql14 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer3."','maali')";
$sql15 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer4."','maali')";
$sql16 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer5."','maali')";
$sql17 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer6."','maali')";
$sql18 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer7."','maali')";
$sql19 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer8."','maali')";
$sql20 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer9."','maali')";

//Lisätään maalit pelaajille
if ($mysqli->query($sql12) == TRUE and $mysqli->query($sql13) == TRUE and $mysqli->query($sql14) == TRUE and $mysqli->query($sql15) == TRUE and $mysqli->query($sql16) == TRUE and $mysqli->query($sql17) == TRUE and $mysqli->query($sql18) == TRUE and $mysqli->query($sql19) == TRUE and $mysqli->query($sql20) == TRUE) {
    //alert("Player(9) statistics updated successfully");
    
      $sql301 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer1."'"; 
      $sql302 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer2."'";
      $sql303 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer3."'";
      $sql304 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer4."'";
      $sql305 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer5."'";
      $sql306 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer6."'";
      $sql307 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer7."'";
      $sql308 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer8."'";
      $sql309 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer9."'";
      
if ($mysqli->query($sql301) == TRUE and $mysqli->query($sql302) == TRUE and $mysqli->query($sql303) == TRUE and $mysqli->query($sql304) == TRUE and $mysqli->query($sql305) == TRUE and $mysqli->query($sql306) == TRUE and $mysqli->query($sql307) == TRUE and $mysqli->query($sql308) == TRUE and $mysqli->query($sql309) == TRUE) {
   
    
    
    //tarkitetaan onko pelaaja koti vai vierasjoukkueen pelaaja
    //1
    if($hometeam == $teamIDOfPlayer1 and $_SESSION['owngoal1'] !== 'owngoal' or $awayteam == $teamIDOfPlayer1 and $_SESSION['owngoal1'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
     //2
   if($hometeam == $teamIDOfPlayer2 and $_SESSION['owngoal2'] !== 'owngoal' or $awayteam == $teamIDOfPlayer2 and $_SESSION['owngoal2'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
    //3
   if($hometeam == $teamIDOfPlayer3 and $_SESSION['owngoal3'] !== 'owngoal' or $awayteam == $teamIDOfPlayer3 and $_SESSION['owngoal3'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
    //4
   if($hometeam == $teamIDOfPlayer4 and $_SESSION['owngoal4'] !== 'owngoal' or $awayteam == $teamIDOfPlayer4 and $_SESSION['owngoal4'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
    
    //5
   if($hometeam == $teamIDOfPlayer5 and $_SESSION['owngoal5'] !== 'owngoal' or $awayteam == $teamIDOfPlayer5 and $_SESSION['owngoal5'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
     //6
   if($hometeam == $teamIDOfPlayer6 and $_SESSION['owngoal6'] !== 'owngoal' or $awayteam == $teamIDOfPlayer6 and $_SESSION['owngoal6'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
     //7
   if($hometeam == $teamIDOfPlayer7 and $_SESSION['owngoal7'] !== 'owngoal' or $awayteam == $teamIDOfPlayer7 and $_SESSION['owngoal7'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
     //8
   if($hometeam == $teamIDOfPlayer8 and $_SESSION['owngoal8'] !== 'owngoal' or $awayteam == $teamIDOfPlayer8 and $_SESSION['owngoal8'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
     //9
   if($hometeam == $teamIDOfPlayer9 and $_SESSION['owngoal9'] !== 'owngoal' or $awayteam == $teamIDOfPlayer9 and $_SESSION['owngoal9'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    
    }

    
} else {
    //alert("Error: " . $sql . "<br>" . $mysqli->error);
}
}

} //end of numberOfGoals(9)

//10
if($_SESSION['numberOfGoals'] == 10) {
     $player1 = $_SESSION['maalintekija1'];
     $player2 = $_SESSION['maalintekija2'];
     $player3 = $_SESSION['maalintekija3'];
     $player4 = $_SESSION['maalintekija4'];
     $player5 = $_SESSION['maalintekija5'];
     $player6 = $_SESSION['maalintekija6'];
     $player7 = $_SESSION['maalintekija7'];
     $player8 = $_SESSION['maalintekija8'];
     $player9 = $_SESSION['maalintekija9'];
     $player10 = $_SESSION['maalintekija10'];
       
        
$sql12 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer1."','maali')";
$sql13 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer2."','maali')";
$sql14 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer3."','maali')";
$sql15 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer4."','maali')";
$sql16 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer5."','maali')";
$sql17 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer6."','maali')";
$sql18 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer7."','maali')";
$sql19 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer8."','maali')";
$sql20 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer9."','maali')";
$sql21 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer10."','maali')";

//lisätään maalit ja pelatut pelit pelaajille
if ($mysqli->query($sql12) == TRUE and $mysqli->query($sql13) == TRUE and $mysqli->query($sql14) == TRUE and $mysqli->query($sql15) == TRUE and $mysqli->query($sql16) == TRUE and $mysqli->query($sql17) == TRUE and $mysqli->query($sql18) == TRUE and $mysqli->query($sql19) == TRUE and $mysqli->query($sql20) == TRUE and $mysqli->query($sql21) == TRUE) {
    
    
      $sql301 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer1."'"; 
      $sql302 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer2."'";
      $sql303 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer3."'";
      $sql304 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer4."'";
      $sql305 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer5."'";
      $sql306 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer6."'";
      $sql307 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer7."'";
      $sql308 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer8."'";
      $sql309 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer9."'";
      $sql310 = "UPDATE Pelaajat SET Maalit=Maalit+1, PelatutPelit=PelatutPelit+1 WHERE id = '".$idOfPlayer10."'";
      
if ($mysqli->query($sql301) == TRUE and $mysqli->query($sql302) == TRUE and $mysqli->query($sql303) == TRUE and $mysqli->query($sql304) == TRUE and $mysqli->query($sql305) == TRUE and $mysqli->query($sql306) == TRUE and $mysqli->query($sql307) == TRUE and $mysqli->query($sql308) == TRUE and $mysqli->query($sql309) == TRUE and $mysqli->query($sql310) == TRUE) {
   
    
   
    //tarkitetaan onko pelaaja koti vai vierasjoukkueen pelaaja
    //1
    if($hometeam == $teamIDOfPlayer1 and $_SESSION['owngoal1'] !== 'owngoal' or $awayteam == $teamIDOfPlayer1 and $_SESSION['owngoal1'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
     //2
   if($hometeam == $teamIDOfPlayer2 and $_SESSION['owngoal2'] !== 'owngoal' or $awayteam == $teamIDOfPlayer2 and $_SESSION['owngoal2'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
    //3
   if($hometeam == $teamIDOfPlayer3 and $_SESSION['owngoal3'] !== 'owngoal' or $awayteam == $teamIDOfPlayer3 and $_SESSION['owngoal3'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
    //4
   if($hometeam == $teamIDOfPlayer4 and $_SESSION['owngoal4'] !== 'owngoal' or $awayteam == $teamIDOfPlayer4 and $_SESSION['owngoal4'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
    
    //5
   if($hometeam == $teamIDOfPlayer5 and $_SESSION['owngoal5'] !== 'owngoal' or $awayteam == $teamIDOfPlayer5 and $_SESSION['owngoal5'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
     //6
   if($hometeam == $teamIDOfPlayer6 and $_SESSION['owngoal6'] !== 'owngoal' or $awayteam == $teamIDOfPlayer6 and $_SESSION['owngoal6'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
     //7
   if($hometeam == $teamIDOfPlayer7 and $_SESSION['owngoal7'] !== 'owngoal' or $awayteam == $teamIDOfPlayer7 and $_SESSION['owngoal7'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
     //8
   if($hometeam == $teamIDOfPlayer8 and $_SESSION['owngoal8'] !== 'owngoal' or $awayteam == $teamIDOfPlayer8 and $_SESSION['owngoal8'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
     //9
   if($hometeam == $teamIDOfPlayer9 and $_SESSION['owngoal9'] !== 'owngoal' or $awayteam == $teamIDOfPlayer9 and $_SESSION['owngoal9'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    }
     //10
   if($hometeam == $teamIDOfPlayer10 and $_SESSION['owngoal10'] !== 'owngoal' or $awayteam == $teamIDOfPlayer10 and $_SESSION['owngoal10'] == 'owngoal') {
        $hometeamScore++;
    } else {
        $awayteamScore++;
    
}
    
} else {
    //alert("Error: " . $sql . "<br>" . $mysqli->error);
}
}

} //end of numberOfGoals(10)

//lisätään korttitaphtuma pelaajille

//1
if($_SESSION['numberOfCards'] == 1) {
if($yellowcard1 == "yellowCard") {
$sql345 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer1w."','kelt.kortti')";
$mysqli->query($sql345);
} else {
    $sql345 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer1w."','pun.kortti')";
$mysqli->query($sql345);
}

}





//2
if($_SESSION['numberOfCards'] == 2) {
if($yellowcard1 == "yellowCard") {
$sql345 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer1w."','kelt.kortti')";
$mysqli->query($sql345);
} else {
    $sql345 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer1w."','pun.kortti')";
$mysqli->query($sql345);
}

if($yellowcard2 == "yellowCard") {
$sql346 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer2w."','kelt.kortti')";
$mysqli->query($sql346);
} else {
$sql346 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer2w."','pun.kortti')";
$mysqli->query($sql346);
}


}

//3
if($_SESSION['numberOfCards'] == 3) {
if($yellowcard1 == "yellowCard") {
$sql345 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer1w."','kelt.kortti')";
$mysqli->query($sql345);
} else {
    $sql345 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer1w."','pun.kortti')";
$mysqli->query($sql345);
}

if($yellowcard2 == "yellowCard") {
$sql346 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer2w."','kelt.kortti')";
$mysqli->query($sql346);
} else {
$sql346 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer2w."','pun.kortti')";
$mysqli->query($sql346);
}
if($yellowcard3 == "yellowCard") {
$sql347 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer3w."','kelt.kortti')";
$mysqli->query($sql347);
} else {
    $sql347 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer3w."','pun.kortti')";
$mysqli->query($sql347);
}

}
//4
if($_SESSION['numberOfCards'] == 4) {
if($yellowcard1 == "yellowCard") {
$sql345 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer1w."','kelt.kortti')";
$mysqli->query($sql345);
} else {
    $sql345 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer1w."','pun.kortti')";
$mysqli->query($sql345);
}

if($yellowcard2 == "yellowCard") {
$sql346 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer2w."','kelt.kortti')";
$mysqli->query($sql346);
} else {
$sql346 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer2w."','pun.kortti')";
$mysqli->query($sql346);
}
if($yellowcard3 == "yellowCard") {
$sql347 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer3w."','kelt.kortti')";
$mysqli->query($sql347);
} else {
    $sql347 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer3w."','pun.kortti')";
$mysqli->query($sql347);
}
if($yellowcard4 == "yellowCard") {
$sql348 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer4w."','kelt.kortti')";
$mysqli->query($sql348);
} else {
    $sql348 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer4w."','pun.kortti')";
$mysqli->query($sql348);
}


}

//5
if($_SESSION['numberOfCards'] == 5) {
    if($yellowcard1 == "yellowCard") {
$sql345 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer1w."','kelt.kortti')";
$mysqli->query($sql345);
} else {
    $sql345 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer1w."','pun.kortti')";
$mysqli->query($sql345);
}

if($yellowcard2 == "yellowCard") {
$sql346 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer2w."','kelt.kortti')";
$mysqli->query($sql346);
} else {
$sql346 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer2w."','pun.kortti')";
$mysqli->query($sql346);
}
if($yellowcard3 == "yellowCard") {
$sql347 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer3w."','kelt.kortti')";
$mysqli->query($sql347);
} else {
    $sql347 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer3w."','pun.kortti')";
$mysqli->query($sql347);
}
if($yellowcard4 == "yellowCard") {
$sql348 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer4w."','kelt.kortti')";
$mysqli->query($sql348);
} else {
    $sql348 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer4w."','pun.kortti')";
$mysqli->query($sql348);
}
if($yellowcard5 == "yellowCard") {
$sql348 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer5w."','kelt.kortti')";
$mysqli->query($sql349);
} else {
    $sql349 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer5w."','pun.kortti')";
$mysqli->query($sql349);
}


}





//päivitetään joukkeen maalit
$sql901 = "UPDATE Joukkueet SET TehdytMaalit=TehdytMaalit+'".$hometeamScore."' WHERE id = '".$hometeam."'";
$sql902 = "UPDATE Joukkueet SET TehdytMaalit=TehdytMaalit+'".$awayteamScore."' WHERE id = '".$awayteam."'";

    if ($mysqli->query($sql901) == TRUE and $mysqli->query($sql902) == TRUE ) {
    

//päivitetään joukkueiden päästetyt maalit
$sql9011 = "UPDATE Joukkueet SET PaastetytMaalit=PaastetytMaalit+'".$awayteamScore."' WHERE id = '".$hometeam."'";
$sql9012 = "UPDATE Joukkueet SET PaastetytMaalit=PaastetytMaalit+'".$hometeamScore."' WHERE id = '".$awayteam."'";

$mysqli->query($sql9011);
$mysqli->query($sql9012);


//lisätään peli
  $sql11 = "INSERT INTO Pelit (KotijoukkueID, VierasjoukkueID, pvm, tulosKJ, tulosVJ)
VALUES ('".$hometeam."','".$awayteam."','".$pvm."','".$hometeamScore."','".$awayteamScore."')";  
$mysqli->query($sql11);

  


}

//tarkastetaan voittaja ja päivitetään voittojen määrä sekä pisteet ja hävityt pelit
if($hometeamScore > $awayteamScore) {
    
    $sql903 = "UPDATE Joukkueet SET VoitetutPelit=VoitetutPelit+1 WHERE id = '".$hometeam."'";
    $sql904 = "UPDATE Joukkueet SET HavitytPelit=HavitytPelit+1 WHERE id = '".$awayteam."'";
    $sql905 = "UPDATE Joukkueet SET Pisteet=Pisteet+3 WHERE id = '".$hometeam."'";
    
    $mysqli->query($sql903);
    $mysqli->query($sql904);
    $mysqli->query($sql905);
} else if($awayteamScore > $hometeamScore) {
    
    $sql903 = "UPDATE Joukkueet SET VoitetutPelit=VoitetutPelit+1 WHERE id = '".$awayteam."'";
    $sql904 = "UPDATE Joukkueet SET HavitytPelit=HavitytPelit+1 WHERE id = '".$hometeam."'";
    $sql905 = "UPDATE Joukkueet SET Pisteet=Pisteet+3 WHERE id = '".$awayteam."'";
    $mysqli->query($sql903);
    $mysqli->query($sql904);
    $mysqli->query($sql905);
}else{
     
    $sql904 = "UPDATE Joukkueet SET Tasapelit=Tasapelit+1 WHERE id = '".$hometeam."'";
    $sql905 = "UPDATE Joukkueet SET Tasapelit=Tasapelit+1 WHERE id = '".$awayteam."'";
    $sql906 = "UPDATE Joukkueet SET Pisteet=Pisteet+1 WHERE id = '".$hometeam."'";
    $sql907 = "UPDATE Joukkueet SET Pisteet=Pisteet+1 WHERE id = '".$awayteam."'";
    $mysqli->query($sql904);
    $mysqli->query($sql905);
    $mysqli->query($sql906);
    $mysqli->query($sql907);
}



$mysqli->close();



    
alert("Peli lisätty onnistuneesti");




 ?>
<script>window.location = "adminform.php" </script>
<?php
 } //end of  adminsubmit
?>
</body>

</html>
