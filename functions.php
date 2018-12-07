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


?>