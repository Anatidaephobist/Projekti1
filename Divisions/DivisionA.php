<head>
<script>
@import "style.css";
</script>
<meta charset="UTF-8">
</head>

<?php
$firstTeamPointsA;
$secondTeamPointsA;
$thirdTeamPointsA;
$fourthTeamPointsA;

$firstTeamIDA;
$secondTeamIDA;
$thirdTeamIDA;
$fourthTeamIDA;

//valitaan eniten pisteitä omaava joukkue
  $sql555 = "SELECT Pisteet, id FROM Joukkueet WHERE id > 0 AND id < 5 ORDER BY Pisteet DESC LIMIT 1";  
	$result555 = $mysqli->query($sql555);
if ($result555->num_rows > 0) {
		while ($row=mysqli_fetch_assoc($result555))
    {
    $firstTeamPointsA = $row['Pisteet'];
    $firstTeamIDA = $row['id'];
    }
}

//valitaan toiseksi eniten pisteitä omaava Joukkue
 $sql556 = "SELECT Pisteet, id FROM Joukkueet WHERE id > 0 AND id < 5 ORDER BY Pisteet DESC LIMIT 1, 1";  
	$result556 = $mysqli->query($sql556);
if ($result556->num_rows > 0) {
		while ($row=mysqli_fetch_assoc($result556))
    {
    $secondTeamPointsA = $row['Pisteet'];
    $secondTeamIDA = $row['id'];
    }
}

//valitaan kolmanneksi eniten pisteitä saanut Joukkue
 $sql557 = "SELECT Pisteet, id FROM Joukkueet WHERE id > 0 AND id < 5 ORDER BY Pisteet DESC LIMIT 1, 2";  
	$result557 = $mysqli->query($sql557);
if ($result557->num_rows > 0) {
		while ($row=mysqli_fetch_assoc($result557))
    {
    $thirdTeamPointsA = $row['Pisteet'];
    $thirdTeamIDA = $row['id'];
    }
}

//valitaan neljänneksi eniten pisteitä saanut
 $sql558 = "SELECT Pisteet, id FROM Joukkueet WHERE id > 0 AND id < 5 ORDER BY Pisteet DESC LIMIT 1, 3";  
	$result558 = $mysqli->query($sql558);
if ($result558->num_rows > 0) {
		while ($row=mysqli_fetch_assoc($result558))
    {
    $fourthTeamPointsA = $row['Pisteet'];
    $fourthTeamIDA = $row['id'];
    }
}


?>


<div id="teamInfoBoxWrapperA" class ="teamInfoBoxWrapper">

 <!-- Joukkue 1 -->

<div class="teamInfoBox" id="teamInfoA">

    <div class="teamLogo">
      <img class="imgsize"src="
      <?php
      echo databaseQuery('Logot','logo',$firstTeamIDA);
      ?>">
    </div>

    <div class="teamName">
    <?php
    echo databaseQuery('Joukkueet','Nimi',$firstTeamIDA);
    ?>
    </div>

    <!-- Pelatut pelit -->
    <div class="playedGames title">
      <h1> Pelatut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pelatutpelit',$firstTeamIDA);
    ?>
      </div>
    </div>

    <!-- Voitetut pelit -->
    <div class="wonGames title">
      <h1> Voitetut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Voitetutpelit',$firstTeamIDA);
    ?>
      </div>
    </div>

    <!-- tasapelit -->
    <div class="drawGames title">
      <h1> Tasapelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Tasapelit',$firstTeamIDA);
    ?>
      </div>
    </div>

    <!-- Havityt pelit -->
    <div class="lostGames title">
      <h1> Havityt pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Havitytpelit',$firstTeamIDA);
    ?>
      </div>
    </div>

    <!-- Tehdyt maalit -->
    <div class="totalGoals title">
      <h1> Tehdyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','TehdytMaalit',$firstTeamIDA);
    ?>
      </div>
    </div>

    <!-- Päästetyt Maalit -->
    <div class="totalGoals2 title">
      <h1> Päästetyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','PaastetytMaalit',$firstTeamIDA);
    ?>
      </div>
    </div>

    <!-- Pisteet -->
    <div class="points title">
      <h1> Pisteet</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pisteet',$firstTeamIDA);
    ?>
      </div>
    </div>

    <div class="moreInfo"  onclick="playerCard1()">
      <h1> Lisätietoa </h1>
    </div>
  </div>

   <!-- Joukkue 2 -->

    <div class="teamInfoBox">

    <div class="teamLogo">
      <img class="imgsize"src="
      <?php
      echo databaseQuery('Logot','logo',$secondTeamIDA);
      ?>">
    </div>

    <div class="teamName">
    <?php
    echo databaseQuery('Joukkueet','Nimi',$secondTeamIDA);
    ?>
    </div>

    <!-- Pelatut pelit -->
    <div class="playedGames title">
      <h1> Pelatut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pelatutpelit',$secondTeamIDA);
    ?>
      </div>
    </div>

    <!-- Voitetut pelit -->
    <div class="wonGames title">
      <h1> Voitetut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Voitetutpelit',$secondTeamIDA);
    ?>
      </div>
    </div>

    <!-- tasapelit -->
    <div class="drawGames title">
      <h1> Tasapelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Tasapelit',$secondTeamIDA);
    ?>
      </div>
    </div>

    <!-- Havityt pelit -->
    <div class="lostGames title">
      <h1> Havityt pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Havitytpelit',$secondTeamIDA);
    ?>
      </div>
    </div>

    <!-- Tehdyt maalit -->
    <div class="totalGoals title">
      <h1> Tehdyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','TehdytMaalit',$secondTeamIDA);
    ?>
      </div>
    </div>

    <!-- Päästetyt Maalit -->
    <div class="totalGoals2 title">
      <h1> Päästetyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','PaastetytMaalit',$secondTeamIDA);
    ?>
      </div>
    </div>

    <!-- Pisteet -->
    <div class="points title">
      <h1> Pisteet</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pisteet',$secondTeamIDA);
    ?>
      </div>
    </div>

    <div class="moreInfo"  onclick="playerCard2()">
      <h1> Lisätietoa </h1>
    </div>
  </div>

  <!-- Joukkue 3 -->

   <div class="teamInfoBox">

    <div class="teamLogo">
      <img class="imgsize"src="
      <?php
      echo databaseQuery('Logot','logo',$thirdTeamIDA);
      ?>">
    </div>

    <div class="teamName">
    <?php
    echo databaseQuery('Joukkueet','Nimi',$thirdTeamIDA);
    ?>
    </div>

    <!-- Pelatut pelit -->
    <div class="playedGames title">
      <h1> Pelatut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pelatutpelit',$thirdTeamIDA);
    ?>
      </div>
    </div>

    <!-- Voitetut pelit -->
    <div class="wonGames title">
      <h1> Voitetut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Voitetutpelit',$thirdTeamIDA);
    ?>
      </div>
    </div>

    <!-- tasapelit -->
    <div class="drawGames title">
      <h1> Tasapelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Tasapelit',$thirdTeamIDA);
    ?>
      </div>
    </div>

    <!-- Havityt pelit -->
    <div class="lostGames title">
      <h1> Havityt pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Havitytpelit',$thirdTeamIDA);
    ?>
      </div>
    </div>

    <!-- Tehdyt maalit -->
    <div class="totalGoals title">
      <h1> Tehdyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','TehdytMaalit',$thirdTeamIDA);
    ?>
      </div>
    </div>

    <!-- Päästetyt Maalit -->
    <div class="totalGoals2 title">
      <h1> Päästetyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','PaastetytMaalit',$thirdTeamIDA);
    ?>
      </div>
    </div>

    <!-- Pisteet -->
    <div class="points title">
      <h1> Pisteet</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pisteet',$thirdTeamIDA);
    ?>
      </div>
    </div>

    <div class="moreInfo"  onclick="playerCard3()">
      <h1> Lisätietoa </h1>
    </div>
  </div>

  <!-- Joukkue 4 -->

   <div class="teamInfoBox">

    <div class="teamLogo">
      <img class="imgsize"src="
      <?php
      echo databaseQuery('Logot','logo',$fourthTeamIDA);
      ?>">
    </div>

    <div class="teamName">
    <?php
    echo databaseQuery('Joukkueet','Nimi',$fourthTeamIDA);
    ?>
    </div>

    <!-- Pelatut pelit -->
    <div class="playedGames title">
      <h1> Pelatut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pelatutpelit',$fourthTeamIDA);
    ?>
      </div>
    </div>

    <!-- Voitetut pelit -->
    <div class="wonGames title">
      <h1> Voitetut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Voitetutpelit',$fourthTeamIDA);
    ?>
      </div>
    </div>

    <!-- tasapelit -->
    <div class="drawGames title">
      <h1> Tasapelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Tasapelit',$fourthTeamIDA);
    ?>
      </div>
    </div>

    <!-- Havityt pelit -->
    <div class="lostGames title">
      <h1> Havityt pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Havitytpelit',$fourthTeamIDA);
    ?>
      </div>
    </div>

    <!-- Tehdyt maalit -->
    <div class="totalGoals title">
      <h1> Tehdyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','TehdytMaalit',$fourthTeamIDA);
    ?>
      </div>
    </div>

    <!-- Päästetyt Maalit -->
    <div class="totalGoals2 title">
      <h1> Päästetyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','PaastetytMaalit',$fourthTeamIDA);
    ?>
      </div>
    </div>

    <!-- Pisteet -->
    <div class="points title">
      <h1> Pisteet</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pisteet',$fourthTeamIDA);
    ?>
      </div>
    </div>

    <div class="moreInfo"  onclick="playerCard4()">
      <h1> Lisätietoa </h1>
    </div>
  </div>
</div> <!-- End of teaminfoboxwrapper -->

<div class="playerList" id="wrapperOfPlayers1">
   <button onclick="closePlayerInfo()" class="btn btn-primary playerbutton"> takaisin</button>
  <div class= "teamInfoBox playerBox">
  <!-- Pelaajien tiedot -->
  <?php
  echo databaseQueryInfo('EtuNimi', 'Sukunimi', 'Ika', 'Kansallisuus', 'PelatutPelit', 'Maalit', 'Pelipaikka',$firstTeamIDA);
  ?>
  </div>
</div> <!-- End of wrapperOfPlayers1 -->

<div class="playerList" id="wrapperOfPlayers2">
   <button onclick="closePlayerInfo()" class="btn btn-primary playerbutton"> takaisin</button>
  <div class= "teamInfoBox playerBox">
  <!-- Pelaajien tiedot -->
  <?php
  echo databaseQueryInfo('EtuNimi', 'Sukunimi', 'Ika', 'Kansallisuus', 'PelatutPelit', 'Maalit', 'Pelipaikka',$secondTeamIDA);
  ?>
  </div>
</div> <!-- End of wrapperOfPlayers2 -->

<div class="playerList" id="wrapperOfPlayers3">
   <button onclick="closePlayerInfo()" class="btn btn-primary playerbutton"> takaisin</button>
  <div class= "teamInfoBox playerBox">
  <!-- Pelaajien tiedot -->
  <?php
  echo databaseQueryInfo('EtuNimi', 'Sukunimi', 'Ika', 'Kansallisuus', 'PelatutPelit', 'Maalit', 'Pelipaikka',$thirdTeamIDA);
  ?>
  </div>
</div> <!-- End of wrapperOfPlayers3 -->

<div class="playerList" id="wrapperOfPlayers4">
   <button onclick="closePlayerInfo()" class="btn btn-primary playerbutton"> takaisin</button>
  <div class= "teamInfoBox playerBox">
  <!-- Pelaajien tiedot -->
  <?php
  echo databaseQueryInfo('EtuNimi', 'Sukunimi', 'Ika', 'Kansallisuus', 'PelatutPelit', 'Maalit', 'Pelipaikka',$fourthTeamIDA);
  ?>
  </div>
</div> <!-- End of wrapperOfPlayers4 -->
