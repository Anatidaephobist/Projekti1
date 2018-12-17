<?php

//Alustetaan tietokanta
$dbuser = 'c6jomust';
$dbpass = 'agan6poniP';
$dbhost = 'mydb.tamk.fi';
$dbname = 'dbc6jomust1';
$dbtype = 'mysql';

//Otetaan yhteys tietokantaan
$mysqli = mysqli_connect($dbhost, $dbuser,$dbpass, $dbname);
$mysqli->set_charset('utf8');
	if ($mysqli->connect_errno) {
		echo "Failed to connect to MYSQL: ("
			. $mysqli->connect_errno
			.") "
			.$mysqli->connect_error;
	}
	
	?>