
<head>
<script>
@import "/style.css";
</script>
<meta charset="UTF-8">
</head>

<?php

  $sql = "SELECT Pisteet, id FROM Joukkueet WHERE id > 8 AND id < 13 ORDER BY Pisteet DESC LIMIT 1";  
	$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
		while ($row=mysqli_fetch_assoc($result))
    {
    $firstTeamPoints = $row['Pisteet'];
    $firstTeamID = $row['id'];
    }
    
    
   $sql2 = "SELECT id from Joukkeet where Pisteet = '".$firstTeam."'";  
	$result2 = $mysqli->query($sql2);
	if ($result2->num_rows > 0) {
		while ($row=mysqli_fetch_assoc($result2))
    {
    $firstTeamID = $row['id'];
    }
  
  mysqli_free_result($result);
}


}
?>


<div id="teamInfoBoxWrapperC" class ="teamInfoBoxWrapper">

  <div class="teamInfoBox">

    <div class="teamLogo">
      <img class="imgsize"src="
      <?php
      echo databaseQuery( 'Logot','logo', $firstTeamID); //TOIMII
      ?>">
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

    <!-- Päästetyt Maalit -->
    <div class="totalGoals2 title">
      <h1> Päästetyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','PaastetytMaalit','9');
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

    <div class="moreInfo"  onclick="playerCard9()">
      <h1> Lisätietoa </h1>
    </div>
  </div>

  <div class="teamInfoBox">

    <div class="teamLogo">
      <img class="imgsize"src="
      <?php
      echo databaseQuery('Logot','logo','10');
      ?>">
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

    <!-- Päästetyt Maalit -->
    <div class="totalGoals2 title">
      <h1> Päästetyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','PaastetytMaalit','10');
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

    <div class="moreInfo"  onclick="playerCard10()">
      <h1> Lisätietoa </h1>
    </div>
  </div>

  <div class="teamInfoBox">

  <div class="teamLogo">
    <img class="imgsize"src="
    <?php
    echo databaseQuery('Logot','logo','11');
    ?>">
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

  <!-- Päästetyt Maalit -->
  <div class="totalGoals2 title">
    <h1> Päästetyt Maalit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','PaastetytMaalit','11');
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

  <div class="moreInfo"  onclick="playerCard11()">
    <h1> Lisätietoa </h1>
  </div>
</div>

<div class="teamInfoBox">

<div class="teamLogo">
  <img class="imgsize"src="
  <?php
  echo databaseQuery('Logot','logo','12');
  ?>">
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

<!-- Päästetyt Maalit -->
<div class="totalGoals2 title">
  <h1> Päästetyt Maalit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','PaastetytMaalit','12');
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
  echo databaseQueryInfo('EtuNimi', 'Sukunimi', 'Ika', 'Kansallisuus', 'PelatutPelit', 'Maalit', 'Pelipaikka','9');
  ?>
  </div>
</div> <!-- End of wrapperOfPlayers9 -->

<div class="playerList" id="wrapperOfPlayers10">
   <button onclick="closePlayerInfo()" class="btn btn-primary playerbutton"> takaisin</button>
  <div class= "teamInfoBox playerBox">
  <!-- Pelaajien tiedot -->
  <?php
  echo databaseQueryInfo('EtuNimi', 'Sukunimi', 'Ika', 'Kansallisuus', 'PelatutPelit', 'Maalit', 'Pelipaikka','10');
  ?>
  </div>
</div> <!-- End of wrapperOfPlayers10 -->

<div class="playerList" id="wrapperOfPlayers11">
   <button onclick="closePlayerInfo()" class="btn btn-primary playerbutton"> takaisin</button>
  <div class= "teamInfoBox playerBox">
  <!-- Pelaajien tiedot -->
  <?php
  echo databaseQueryInfo('EtuNimi', 'Sukunimi', 'Ika', 'Kansallisuus', 'PelatutPelit', 'Maalit', 'Pelipaikka','11');
  ?>
  </div>
</div> <!-- End of wrapperOfPlayers11 -->

<div class="playerList" id="wrapperOfPlayers12">
   <button onclick="closePlayerInfo()" class="btn btn-primary playerbutton"> takaisin</button>
  <div class= "teamInfoBox playerBox">
  <!-- Pelaajien tiedot -->
  <?php
  echo databaseQueryInfo('EtuNimi', 'Sukunimi', 'Ika', 'Kansallisuus', 'PelatutPelit', 'Maalit', 'Pelipaikka','12');
  ?>
  </div>
</div> <!-- End of wrapperOfPlayers12 -->
