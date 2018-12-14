

<?php
session_start();
include 'functions.php';

?>

<html>
<head>

   <script>
   function adminLogOut()  {
       /*<?php $_SESSION['userIsAdmin'] = 0; ?>*/
       window.location.href = "Index.php";
   }
   </script>

</head>










<?php
 if(isset($_POST["adminSubmit"])) {
     
   


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
    $idOfPlayer;
    
    
    
    //haetaan pelinID
    	$sql = "SELECT id FROM Pelit ORDER BY id DESC LIMIT 1";
		$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		   $gameID = $row['id'];
		   
}
}
    //haetaan pelaajan ID
	$sql = "SELECT id FROM Pelaajat WHERE EtuNimi = '".$maalintekija1."'";
		$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		 $idOfPlayer = $row['id'];

}
}


$hometeam = $_SESSION['kotijoukkue'];
$awayteam = $_SESSION['vierasjoukkue'];



//lisätään peli
  $sql = "INSERT INTO Pelit (KotijoukkueID, VierasjoukkueID, pvm)
VALUES ('".$hometeam."','".$awayteam."','2018-01-01')";  

if ($mysqli->query($sql) == TRUE) {
    alert("New Game created successfully");
   // lisätään maalintekijät
   
if($_SESSION['numberOfGoals'] == 1) {
        $player1 = $_SESSION['maalintekija1'];
        
        $sql = "INSERT INTO Pelaaja_peli (PeliID, PelaajaID, Tapahtuma)
VALUES ('".$gameID."','".$idOfPlayer."','maali')";  

if ($mysqli->query($sql) == TRUE) {
    alert("New Happening created successfully");
} else {
    alert("Error: " . $sql . "<br>" . $mysqli->error);
}
} //end of numberOfGoals(1)


$mysqli->close();
} else {
    alert("Error: " . $sql . "<br>" . $mysqli->error);
}

$mysqli->close();



     
   

 


    
   
    
    
    
    
if($_SESSION['numberOfGoals'] == 2) {
     $player1 = $_SESSION['maalintekija1'];
     $player2 = $_SESSION['maalintekija2'];
}




 } //end of  adminsubmit
 ?>



</body>

</html>
