<?php

function databaseQueryPlayersAll() {
    $value = "";
    global $mysqli;
    $sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat";
$result = $mysqli->query($sql);

while ($row = mysqli_fetch_array($result)) {
  echo $row["EtuNimi"]. " ". $row["Sukunimi"].", ";
}
return;
} // end of databaseQueryPlayerALL

function databaseQueryPlayers($joukkueID) {
    $value = "";
    global $mysqli;
    $sql = "SELECT EtuNimi, Sukunimi FROM Pelaajat WHERE JoukkueID = '$joukkueID'";
$result = $mysqli->query($sql);

echo "<select name='EtuNimi'>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['EtuNimi']."". $row['Sukunimi'] . "'>" . $row['EtuNimi']."". $row['Sukunimi']. "</option>";
}
echo "</select>";
return;
} // end of databaseQueryPlayer

function databaseQueryTeam($table, $column, $name) {
	$value = "";
	global $mysqli;
	$sql = "SELECT " .$column. " FROM " .$table. "WHERE Nimi = ".$name ;
		$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$value = $row[''.$column.''];
}
return $value;
}
} //end of function 'makeQuery'

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

function alert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

function databaseQueryMultiple($table, $column, $ID) {
	$value = "";
	global $mysqli;
	$sql = "SELECT " .$column. " FROM " .$table. " Where id > '".$ID."'";
		$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$value = $row[''.$column.''];
}
return $value;
}
} //end of function 'makeQuery'

function databaseQueryCard($pelaajaID) {
   $value = "";
    global $mysqli;
    $sqlkortti = "SELECT " .$pelaajaID. " FROM Pelaaja_peli WHERE PelaajaID = '$pelaajaID'";
    $resultkortti = $mysqli->query($sqlkortti);
    if ($resultkortti->num_rows > 0) {
       echo "<img class = 'playeryellowcard' src='yellowcard.png'>";
    }
   
  return;
}

// Pelaajien tietojen haku
function databaseQueryInfo($columnEtu, $columnSuku, $column1, $column2, $column3, $column4, $column5, $joukkueID) {
    $value = "";
    global $mysqli;
    $sqlEtu = "SELECT " .$columnEtu. " FROM Pelaajat WHERE JoukkueID = '$joukkueID'";
    $sqlSuku = "SELECT " .$columnSuku. " FROM Pelaajat WHERE JoukkueID = '$joukkueID'";
    $sql1 = "SELECT " .$column1. " FROM Pelaajat WHERE JoukkueID = '$joukkueID'";
    $sql2 = "SELECT " .$column2. " FROM Pelaajat WHERE JoukkueID = '$joukkueID'";
    $sql3 = "SELECT " .$column3. " FROM Pelaajat WHERE JoukkueID = '$joukkueID'";
    $sql4 = "SELECT " .$column4. " FROM Pelaajat WHERE JoukkueID = '$joukkueID'";
    $sql5 = "SELECT " .$column5. " FROM Pelaajat WHERE JoukkueID = '$joukkueID'";
$resultEtu = $mysqli->query($sqlEtu);
$resultSuku = $mysqli->query($sqlSuku);
$result1 = $mysqli->query($sql1);
$result2 = $mysqli->query($sql2);
$result3 = $mysqli->query($sql3);
$result4 = $mysqli->query($sql4);
$result5 = $mysqli->query($sql5);

  echo "<div class = 'infoAll'>";
// Etunimi
    echo "<div class = 'infoPlayers'>";
    echo "<h2 class = 'infoTitle'>Etunimi</h2> <br>";
    while ($row = mysqli_fetch_array($resultEtu)) {
      echo "<div class = 'info'>" . $row[''.$columnEtu.'']. "</div> <br>";
    }
    echo "</div>";
// Sukunimi
    echo "<div class = 'infoPlayers'>";
    echo "<h2 class = 'infoTitle'>Sukunimi</h2> <br>";
    while ($row = mysqli_fetch_array($resultSuku)) {
      echo "<div class = 'info'>" . $row[''.$columnSuku.'']. "</div> <br>";
    }
    echo "</div>";
// Ikä
    echo "<div class = 'infoPlayers infoPlayersMini'>";
    echo "<h2 class = 'infoTitle'>Ikä</h2> <br>";
    while ($row = mysqli_fetch_array($result1)) {
      echo "<div class = 'info'>" . $row[''.$column1.'']. "</div> <br>";
    }
    echo "</div>";
// Kansallisuus
    echo "<div class = 'infoPlayers'>";
    echo "<h2 class = 'infoTitle'>Kansallisuus</h2> <br>";
    while ($row = mysqli_fetch_array($result2)) {
      echo "<div class = 'info'>" . $row[''.$column2.'']. "</div> <br>";
    }
    echo "</div>";
// Pelatut Pelit
    echo "<div class = 'infoPlayers'>";
    echo "<h2 class = 'infoTitle'>Pelatut pelit</h2> <br>";
    while ($row = mysqli_fetch_array($result3)) {
      echo "<div class = 'info'>" . $row[''.$column3.'']. "</div> <br>";
    }
    echo "</div>";
// Maalit
    echo "<div class = 'infoPlayers infoPlayersMini'>";
    echo "<h2 class = 'infoTitle'>Maalit</h2> <br>";
    while ($row = mysqli_fetch_array($result4)) {
      echo "<div class = 'info'>" . $row[''.$column4.'']. "</div> <br>";
    }
    echo "</div>";
// Pelipaikka
    echo "<div class = 'infoPlayers'>";
    echo "<h2 class = 'infoTitle'>Pelipaikka</h2> <br>";
    while ($row = mysqli_fetch_array($result5)) {
      echo "<div class = 'info'>" . $row[''.$column5.'']. "</div> <br>";
    }
    echo "</div>";
    echo "</div>";

return;
}

?>
