
<head>
<script>
@import "/style.css";
</script>
<meta charset="UTF-8">
</head>

<?php
$firstTeamPoints;
$secondTeamPoints;
$thirdTeamPoints;
$fourthTeamPoints;

$firstTeamID;
$secondTeamID;
$thirdTeamID;
$fourthTeamID;

//valitaan eniten pisteitä omaava joukkue
  $sql555 = "SELECT Pisteet, id FROM Joukkueet WHERE id > 8 AND id < 13 ORDER BY Pisteet DESC LIMIT 1";  
	$result555 = $mysqli->query($sql555);
if ($result555->num_rows > 0) {
		while ($row=mysqli_fetch_assoc($result555))
    {
    $firstTeamPoints = $row['Pisteet'];
    $firstTeamID = $row['id'];
    }
}

//valitaan toiseksi eniten pisteitä omaava Joukkue
 $sql556 = "SELECT Pisteet, id FROM Joukkueet WHERE id > 8 AND id < 13 ORDER BY Pisteet DESC LIMIT 1, 1";  
	$result556 = $mysqli->query($sql556);
if ($result556->num_rows > 0) {
		while ($row=mysqli_fetch_assoc($result556))
    {
    $secondTeamPoints = $row['Pisteet'];
    $secondTeamID = $row['id'];
    }
}

//valitaan kolmanneksi eniten pisteitä saanut Joukkue
 $sql557 = "SELECT Pisteet, id FROM Joukkueet WHERE id > 8 AND id < 13 ORDER BY Pisteet DESC LIMIT 1, 2";  
	$result557 = $mysqli->query($sql557);
if ($result557->num_rows > 0) {
		while ($row=mysqli_fetch_assoc($result557))
    {
    $thirdTeamPoints = $row['Pisteet'];
    $thirdTeamID = $row['id'];
    }
}

//valitaan neljänneksi eniten pisteitä saanut
 $sql558 = "SELECT Pisteet, id FROM Joukkueet WHERE id > 8 AND id < 13 ORDER BY Pisteet DESC LIMIT 1, 3";  
	$result558 = $mysqli->query($sql558);
if ($result558->num_rows > 0) {
		while ($row=mysqli_fetch_assoc($result558))
    {
    $fourthTeamPoints = $row['Pisteet'];
    $fourthTeamID = $row['id'];
    }
}


?>
<!-- Eniten pisteitä omaava joukkue -->
<div id="teamInfoBoxWrapperC" class ="teamInfoBoxWrapper">

  <div class="teamInfoBox">

    <div class="teamLogo">
      <img class="imgsize" src="
      <?php
      echo databaseQuery( 'Logot','logo', $firstTeamID);
      ?>">
    </div>

    <div class="teamName">
    <?php
    echo databaseQuery('Joukkueet','Nimi',$firstTeamID);
    ?>
    </div>

    <!-- Pelatut pelit -->
    <div class="playedGames title">
      <h1> Pelatut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pelatutpelit',$firstTeamID);
    ?>
      </div>
    </div>

    <!-- Voitetut pelit -->
    <div class="wonGames title">
      <h1> Voitetut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Voitetutpelit',$firstTeamID);
    ?>
      </div>
    </div>

    <!-- tasapelit -->
    <div class="drawGames title">
      <h1> Tasapelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Tasapelit',$firstTeamID);
    ?>
      </div>
    </div>

    <!-- Havityt pelit -->
    <div class="lostGames title">
      <h1> Havityt pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Havitytpelit',$firstTeamID);
    ?>
      </div>
    </div>

    <!-- Tehdyt maalit -->
    <div class="totalGoals title">
      <h1> Tehdyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','TehdytMaalit',$firstTeamID);
    ?>
      </div>
    </div>

    <!-- Päästetyt Maalit -->
    <div class="totalGoals2 title">
      <h1> Päästetyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','PaastetytMaalit',$firstTeamID);
    ?>
      </div>
    </div>

    <!-- Pisteet -->
    <div class="points title">
      <h1> Pisteet</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pisteet',$firstTeamID);
    ?>
      </div>
    </div>

    <div class="moreInfo"  onclick="playerCard9()">
      <h1> Lisätietoa </h1>
    </div>
  </div>

  <div class="teamInfoBox">

    <div class="teamLogo">
      <img class="imgsize"src="
      <?php
      echo databaseQuery('Logot','logo',$secondTeamID);
      ?>">
    </div>

    <div class="teamName">
    <?php
    echo databaseQuery('Joukkueet','Nimi',$secondTeamID);
    ?>
    </div>

    <!-- Pelatut pelit -->
    <div class="playedGames title">
      <h1> Pelatut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pelatutpelit',$secondTeamID);
    ?>
      </div>
    </div>

    <!-- Voitetut pelit -->
    <div class="wonGames title">
      <h1> Voitetut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Voitetutpelit',$secondTeamID);
    ?>
      </div>
    </div>

    <!-- tasapelit -->
    <div class="drawGames title">
      <h1> Tasapelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Tasapelit',$secondTeamID);
    ?>
      </div>
    </div>

    <!-- Havityt pelit -->
    <div class="lostGames title">
      <h1> Havityt pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Havitytpelit',$secondTeamID);
    ?>
      </div>
    </div>

    <!-- Tehdyt maalit -->
    <div class="totalGoals title">
      <h1> Tehdyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','TehdytMaalit',$secondTeamID);
    ?>
      </div>
    </div>

    <!-- Päästetyt Maalit -->
    <div class="totalGoals2 title">
      <h1> Päästetyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','PaastetytMaalit',$secondTeamID);
    ?>
      </div>
    </div>

    <!-- Pisteet -->
    <div class="points title">
      <h1> Pisteet</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pisteet',$secondTeamID);
    ?>
      </div>
    </div>

    <div class="moreInfo"  onclick="playerCard10()">
      <h1> Lisätietoa </h1>
    </div>
  </div>

  <div class="teamInfoBox">

  <div class="teamLogo">
    <img class="imgsize"src="
    <?php
    echo databaseQuery('Logot','logo',$thirdTeamID);
    ?>">
  </div>

  <div class="teamName">
  <?php
  echo databaseQuery('Joukkueet','Nimi',$thirdTeamID);
  ?>
  </div>

  <!-- Pelatut pelit -->
  <div class="playedGames title">
    <h1> Pelatut pelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Pelatutpelit',$thirdTeamID);
  ?>
    </div>
  </div>

  <!-- Voitetut pelit -->
  <div class="wonGames title">
    <h1> Voitetut pelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Voitetutpelit',$thirdTeamID);
  ?>
    </div>
  </div>

  <!-- tasapelit -->
  <div class="drawGames title">
    <h1> Tasapelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Tasapelit',$thirdTeamID);
  ?>
    </div>
  </div>

  <!-- Havityt pelit -->
  <div class="lostGames title">
    <h1> Havityt pelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Havitytpelit',$thirdTeamID);
  ?>
    </div>
  </div>

  <!-- Tehdyt maalit -->
  <div class="totalGoals title">
    <h1> Tehdyt Maalit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','TehdytMaalit',$thirdTeamID);
  ?>
    </div>
  </div>

  <!-- Päästetyt Maalit -->
  <div class="totalGoals2 title">
    <h1> Päästetyt Maalit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','PaastetytMaalit',$thirdTeamID);
  ?>
    </div>
  </div>

  <!-- Pisteet -->
  <div class="points title">
    <h1> Pisteet</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Pisteet',$thirdTeamID);
  ?>
    </div>
  </div>

  <div class="moreInfo"  onclick="playerCard11()">
    <h1> Lisätietoa </h1>
  </div>
</div>

<div class="teamInfoBox">

<div class="teamLogo">
  <img class="imgsize"src="
  <?php
  echo databaseQuery('Logot','logo',$fourthTeamID);
  ?>">
</div>

<div class="teamName">
<?php
echo databaseQuery('Joukkueet','Nimi',$fourthTeamID);
?>
</div>

<!-- Pelatut pelit -->
<div class="playedGames title">
  <h1> Pelatut pelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Pelatutpelit',$fourthTeamID);
?>
  </div>
</div>

<!-- Voitetut pelit -->
<div class="wonGames title">
  <h1> Voitetut pelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Voitetutpelit',$fourthTeamID);
?>
  </div>
</div>

<!-- tasapelit -->
<div class="drawGames title">
  <h1> Tasapelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Tasapelit',$fourthTeamID);
?>
  </div>
</div>

<!-- Havityt pelit -->
<div class="lostGames title">
  <h1> Havityt pelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Havitytpelit',$fourthTeamID);
?>
  </div>
</div>

<!-- Tehdyt maalit -->
<div class="totalGoals title">
  <h1> Tehdyt Maalit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','TehdytMaalit',$fourthTeamID);
?>
  </div>
</div>

<!-- Päästetyt Maalit -->
<div class="totalGoals2 title">
  <h1> Päästetyt Maalit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','PaastetytMaalit',$fourthTeamID);
?>
  </div>
</div>

<!-- Pisteet -->
<div class="points title">
  <h1> Pisteet</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Pisteet',$fourthTeamID);
?>
  </div>
</div>

<div class="moreInfo"  onclick="playerCard12()">
  <h1> Lisätietoa </h1>
</div>
</div>
</div>

<div class="playerList" id="wrapperOfPlayers9">
   <button onclick="closePlayerInfo()" class="btn btn-primary playerbutton"> takaisin</button>
  <div class= "teamInfoBox playerBox">
  <!-- Pelaajien tiedot -->
  <?php
  echo databaseQueryInfo('EtuNimi', 'Sukunimi', 'Ika', 'Kansallisuus', 'PelatutPelit', 'Maalit', 'Pelipaikka',$firstTeamID);
  ?>
  </div>
</div> <!-- End of wrapperOfPlayers9 -->

<div class="playerList" id="wrapperOfPlayers10">
   <button onclick="closePlayerInfo()" class="btn btn-primary playerbutton"> takaisin</button>
  <div class= "teamInfoBox playerBox">
  <!-- Pelaajien tiedot -->
  <?php
  echo databaseQueryInfo('EtuNimi', 'Sukunimi', 'Ika', 'Kansallisuus', 'PelatutPelit', 'Maalit', 'Pelipaikka',$secondTeamID);
  ?>
  </div>
</div> <!-- End of wrapperOfPlayers10 -->

<div class="playerList" id="wrapperOfPlayers11">
   <button onclick="closePlayerInfo()" class="btn btn-primary playerbutton"> takaisin</button>
  <div class= "teamInfoBox playerBox">
  <!-- Pelaajien tiedot -->
  <?php
  echo databaseQueryInfo('EtuNimi', 'Sukunimi', 'Ika', 'Kansallisuus', 'PelatutPelit', 'Maalit', 'Pelipaikka',$thirdTeamID);
  ?>
  </div>
</div> <!-- End of wrapperOfPlayers11 -->

<div class="playerList" id="wrapperOfPlayers12">
   <button onclick="closePlayerInfo()" class="btn btn-primary playerbutton"> takaisin</button>
  <div class= "teamInfoBox playerBox">
  <!-- Pelaajien tiedot -->
  <?php
  echo databaseQueryInfo('EtuNimi', 'Sukunimi', 'Ika', 'Kansallisuus', 'PelatutPelit', 'Maalit', 'Pelipaikka',$fourthTeamID);
  ?>
  </div>
</div> <!-- End of wrapperOfPlayers12 -->
