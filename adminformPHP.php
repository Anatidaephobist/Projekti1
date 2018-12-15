

<?php
session_start();
include 'functions.php';

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
     
   
    //pvm talteen ottaminen
    $pvm = $_POST['pvm'];
    $_SESSION['pvm'] = $pvm;

    //arvojen talteen ottaminen
    $_SESSION['gameID'];
    //maalien määrä
     $numberOfGoals = $_POST['input1'];
    $_SESSION['numberOfGoals'] = $numberOfGoals;
    
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
    
    $gameID;
    
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
if ($result1109->num_rows > 0) {
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





$hometeam = $_SESSION['kotijoukkue'];
$awayteam = $_SESSION['vierasjoukkue'];

/*

//lisätään peli


  $sql11 = "INSERT INTO Pelit (KotijoukkueID, VierasjoukkueID, pvm)
VALUES ('".$hometeam."','".$awayteam."','".$pvm."')";  

//jos pelin lisäys onnistuu niin lisää tapahtuma
if ($mysqli->query($sql11) == TRUE) {
    alert("New Game created successfully");
  
  
   // lisätään maalintekijät
   
   //1
if($_SESSION['numberOfGoals'] == 1) {
        $player1 = $_SESSION['maalintekija1'];
 
        $sql12 = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer1."','maali')"; 

//jos tapahtuman lisäys onnistuu niin lisää maalit pelaajalle
if ($mysqli->query($sql12) == TRUE) {
    alert("New Happening(1) created successfully");
    
 $sql301 = "UPDATE Pelaajat SET Maalit=Maalit+1 WHERE id = '".$idOfPlayer1."'"; 


if ($mysqli->query($sql301) == TRUE) {
    alert("Goals(1) updated successfully");
    
    
    
    
    
} else {
    alert("Error: " . $sql . "<br>" . $mysqli->error);
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


if ($mysqli->query($sql12) == TRUE and $mysqli->query($sql13) == TRUE) {
    alert("New happening(2) created successfully");

}
else {
    alert("Error: " . $sql . "<br>" . $mysqli->error);
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

if ($mysqli->query($sql12) == TRUE and $mysqli->query($sql13) == TRUE and $mysqli->query($sql14) == TRUE) {
    alert("New happening(3) created successfully");
} else {
    alert("Error: " . $sql . "<br>" . $mysqli->error);
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

if ($mysqli->query($sql12) == TRUE and $mysqli->query($sql13) == TRUE and $mysqli->query($sql14) == TRUE and $mysqli->query($sql15) == TRUE) {
    alert("New happening(4) created successfully");
} else {
    alert("Error: " . $sql . "<br>" . $mysqli->error);
}
} //end of numberOfGoals(4)

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

if ($mysqli->query($sql12) == TRUE and $mysqli->query($sql13) == TRUE and $mysqli->query($sql14) == TRUE and $mysqli->query($sql15) == TRUE) {
    alert("New happening(4) created successfully");
} else {
    alert("Error: " . $sql . "<br>" . $mysqli->error);
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

if ($mysqli->query($sql12) == TRUE and $mysqli->query($sql13) == TRUE and $mysqli->query($sql14) == TRUE and $mysqli->query($sql15) == TRUE and $mysqli->query($sql16) == TRUE) {
    alert("New happening(5) created successfully");
} else {
    alert("Error: " . $sql . "<br>" . $mysqli->error);
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

if ($mysqli->query($sql12) == TRUE and $mysqli->query($sql13) == TRUE and $mysqli->query($sql14) == TRUE and $mysqli->query($sql15) == TRUE and $mysqli->query($sql16) == TRUE and $mysqli->query($sql17) == TRUE) {
    alert("New happening(6) created successfully");
} else {
    alert("Error: " . $sql . "<br>" . $mysqli->error);
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

if ($mysqli->query($sql12) == TRUE and $mysqli->query($sql13) == TRUE and $mysqli->query($sql14) == TRUE and $mysqli->query($sql15) == TRUE and $mysqli->query($sql16) == TRUE and $mysqli->query($sql17) == TRUE and $mysqli->query($sql18) == TRUE) {
    alert("New happening(7) created successfully");
} else {
    alert("Error: " . $sql . "<br>" . $mysqli->error);
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

if ($mysqli->query($sql12) == TRUE and $mysqli->query($sql13) == TRUE and $mysqli->query($sql14) == TRUE and $mysqli->query($sql15) == TRUE and $mysqli->query($sql16) == TRUE and $mysqli->query($sql17) == TRUE and $mysqli->query($sql18) == TRUE and $mysqli->query($sql19) == TRUE) {
    alert("New happening(8) created successfully");
} else {
    alert("Error: " . $sql . "<br>" . $mysqli->error);
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

if ($mysqli->query($sql12) == TRUE and $mysqli->query($sql13) == TRUE and $mysqli->query($sql14) == TRUE and $mysqli->query($sql15) == TRUE and $mysqli->query($sql16) == TRUE and $mysqli->query($sql17) == TRUE and $mysqli->query($sql18) == TRUE and $mysqli->query($sql19) == TRUE and $mysqli->query($sql20) == TRUE) {
    alert("New happening(9) created successfully");
} else {
    alert("Error: " . $sql . "<br>" . $mysqli->error);
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

if ($mysqli->query($sql12) == TRUE and $mysqli->query($sql13) == TRUE and $mysqli->query($sql14) == TRUE and $mysqli->query($sql15) == TRUE and $mysqli->query($sql16) == TRUE and $mysqli->query($sql17) == TRUE and $mysqli->query($sql18) == TRUE and $mysqli->query($sql19) == TRUE and $mysqli->query($sql20) == TRUE and $mysqli->query($sql21) == TRUE) {
    alert("New happening(10) created successfully");
} else {
    alert("Error: " . $sql . "<br>" . $mysqli->error);
}
} //end of numberOfGoals(10)

$mysqli->close();
} else {
    alert("Error: " . $sql . "<br>" . $mysqli->error);
}
$mysqli->close();

    
*/


 } //end of  adminsubmit
 ?>



</body>

</html>
