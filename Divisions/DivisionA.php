<head>
<script>
@import "style.css";
</script>
</head>


<div id="teamInfoBoxWrapperA">

 <!-- Joukkue 1 -->

<div class="teamInfoBox" id="teamInfoA">

    <div class="teamLogo">
      <img class="imgsize"src="
      <?php
      echo databaseQuery('Logot','logo','1');
      ?>">
    </div>

    <div class="teamName">
    <?php
    echo databaseQuery('Joukkueet','Nimi','1');
    ?>
    </div>

    <!-- Pelatut pelit -->
    <div class="playedGames title">
      <h1> Pelatut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pelatutpelit','1');
    ?>
      </div>
    </div>

    <!-- Voitetut pelit -->
    <div class="wonGames title">
      <h1> Voitetut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Voitetutpelit','1');
    ?>
      </div>
    </div>

    <!-- tasapelit -->
    <div class="drawGames title">
      <h1> Tasapelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Tasapelit','1');
    ?>
      </div>
    </div>

    <!-- Havityt pelit -->
    <div class="lostGames title">
      <h1> Havityt pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Havitytpelit','1');
    ?>
      </div>
    </div>

    <!-- Tehdyt maalit -->
    <div class="totalGoals title">
      <h1> Tehdyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','TehdytMaalit','1');
    ?>
      </div>
    </div>

    <!-- Päästetyt Maalit -->
    <div class="totalGoals2 title">
      <h1> Päästetyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','PaastetytMaalit','1');
    ?>
      </div>
    </div>

    <!-- Pisteet -->
    <div class="points title">
      <h1> Pisteet</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pisteet','1');
    ?>
      </div>
    </div>

    <div class="moreInfo"  onclick="playerCardBelfica()">
      <h1> Lisätietoa </h1>
    </div>
  </div>

   <!-- Joukkue 2 -->

    <div class="teamInfoBox">

    <div class="teamLogo">
      <img class="imgsize"src="
      <?php
      echo databaseQuery('Logot','logo','2');
      ?>">
    </div>

    <div class="teamName">
    <?php
    echo databaseQuery('Joukkueet','Nimi','2');
    ?>
    </div>

    <!-- Pelatut pelit -->
    <div class="playedGames title">
      <h1> Pelatut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pelatutpelit','2');
    ?>
      </div>
    </div>

    <!-- Voitetut pelit -->
    <div class="wonGames title">
      <h1> Voitetut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Voitetutpelit','2');
    ?>
      </div>
    </div>

    <!-- tasapelit -->
    <div class="drawGames title">
      <h1> Tasapelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Tasapelit','2');
    ?>
      </div>
    </div>

    <!-- Havityt pelit -->
    <div class="lostGames title">
      <h1> Havityt pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Havitytpelit','2');
    ?>
      </div>
    </div>

    <!-- Tehdyt maalit -->
    <div class="totalGoals title">
      <h1> Tehdyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','TehdytMaalit','2');
    ?>
      </div>
    </div>

    <!-- Päästetyt Maalit -->
    <div class="totalGoals2 title">
      <h1> Päästetyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','PaastetytMaalit','2');
    ?>
      </div>
    </div>

    <!-- Pisteet -->
    <div class="points title">
      <h1> Pisteet</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pisteet','2');
    ?>
      </div>
    </div>

    <div class="moreInfo"  onclick="playerCardBelfica()">
      <h1> Lisätietoa </h1>
    </div>
  </div>

  <!-- Joukkue 3 -->

   <div class="teamInfoBox">

    <div class="teamLogo">
      <img class="imgsize"src="
      <?php
      echo databaseQuery('Logot','logo','3');
      ?>">
    </div>

    <div class="teamName">
    <?php
    echo databaseQuery('Joukkueet','Nimi','3');
    ?>
    </div>

    <!-- Pelatut pelit -->
    <div class="playedGames title">
      <h1> Pelatut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pelatutpelit','3');
    ?>
      </div>
    </div>

    <!-- Voitetut pelit -->
    <div class="wonGames title">
      <h1> Voitetut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Voitetutpelit','3');
    ?>
      </div>
    </div>

    <!-- tasapelit -->
    <div class="drawGames title">
      <h1> Tasapelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Tasapelit','3');
    ?>
      </div>
    </div>

    <!-- Havityt pelit -->
    <div class="lostGames title">
      <h1> Havityt pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Havitytpelit','3');
    ?>
      </div>
    </div>

    <!-- Tehdyt maalit -->
    <div class="totalGoals title">
      <h1> Tehdyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','TehdytMaalit','3');
    ?>
      </div>
    </div>

    <!-- Päästetyt Maalit -->
    <div class="totalGoals2 title">
      <h1> Päästetyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','PaastetytMaalit','3');
    ?>
      </div>
    </div>

    <!-- Pisteet -->
    <div class="points title">
      <h1> Pisteet</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pisteet','3');
    ?>
      </div>
    </div>

    <div class="moreInfo"  onclick="playerCardBelfica()">
      <h1> Lisätietoa </h1>
    </div>
  </div>

  <!-- Joukkue 4 -->

   <div class="teamInfoBox">

    <div class="teamLogo">
      <img class="imgsize"src="
      <?php
      echo databaseQuery('Logot','logo','4');
      ?>">
    </div>

    <div class="teamName">
    <?php
    echo databaseQuery('Joukkueet','Nimi','4');
    ?>
    </div>

    <!-- Pelatut pelit -->
    <div class="playedGames title">
      <h1> Pelatut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pelatutpelit','4');
    ?>
      </div>
    </div>

    <!-- Voitetut pelit -->
    <div class="wonGames title">
      <h1> Voitetut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Voitetutpelit','4');
    ?>
      </div>
    </div>

    <!-- tasapelit -->
    <div class="drawGames title">
      <h1> Tasapelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Tasapelit','4');
    ?>
      </div>
    </div>

    <!-- Havityt pelit -->
    <div class="lostGames title">
      <h1> Havityt pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Havitytpelit','4');
    ?>
      </div>
    </div>

    <!-- Tehdyt maalit -->
    <div class="totalGoals title">
      <h1> Tehdyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','TehdytMaalit','4');
    ?>
      </div>
    </div>

    <!-- Päästetyt Maalit -->
    <div class="totalGoals2 title">
      <h1> Päästetyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','PaastetytMaalit','4');
    ?>
      </div>
    </div>

    <!-- Pisteet -->
    <div class="points title">
      <h1> Pisteet</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pisteet','4');
    ?>
      </div>
    </div>

    <div class="moreInfo"  onclick="playerCardBelfica()">
      <h1> Lisätietoa </h1>
    </div>
  </div>


</div> <!-- End of teaminfoboxwrapper -->

<div id="wrapperOfPlayers">

   <button onclick="closePlayerInfo()" class="btn btn-primary playerbutton"> takaisin</button>

<div class="teamInfoBox">






  <div class="playerInfo fname ">
  <h1> Etunimi</h1>

   <?php
   $sql = "SELECT EtuNimi FROM Pelaajat Where JoukkueID = '1'";
   $result = $mysqli->query($sql);

   if ($result->num_rows > 0) {

     while($row = $result->fetch_assoc()) {
         echo  $row["EtuNimi"];
     }
 } else {
     echo "0 results";
 }
  ?>
  </div>

  <div class="playerInfo lastname ">
  <h1> Sukunimi</h1>

  <?php
   $sql = "SELECT Sukunimi FROM Pelaajat Where id = '26'";
   $result = $mysqli->query($sql);

   if ($result->num_rows > 0) {

     while($row = $result->fetch_assoc()) {
         echo  $row["Sukunimi"];
     }
 } else {
     echo "0 results";
 }
  ?>
  </div>
  <div class="playerInfo age ">
  <h1> Ikä</h1>

  <?php
   $sql = "SELECT Ika FROM Pelaajat Where id = '26'";
   $result = $mysqli->query($sql);

   if ($result->num_rows > 0) {

     while($row = $result->fetch_assoc()) {
         echo  $row["Ika"];
     }
 } else {
     echo "0 results";
 }
  ?>
  </div>

 <div class="playerInfo nationality ">
  <h1> Kansallisuus</h1>

   <?php
   $sql = "SELECT Kansallisuus FROM Pelaajat Where id = '26'";
   $result = $mysqli->query($sql);

   if ($result->num_rows > 0) {

     while($row = $result->fetch_assoc()) {
         echo  $row["Kansallisuus"];
     }
 } else {
     echo "0 results";
 }
  ?>
  </div>
 <div class="playerInfo playerGames ">
  <h1> Pelatut Pelit</h1>

  <?php
   $sql = "SELECT PelatutPelit FROM Pelaajat Where id = '26'";
   $result = $mysqli->query($sql);

   if ($result->num_rows > 0) {

     while($row = $result->fetch_assoc()) {
         echo  $row["PelatutPelit"];
     }
 } else {
     echo "0 results";
 }
  ?>
  </div>

  <div class="playerInfo madeGoals ">
  <h1> Maalit</h1>

   <?php
   $sql = "SELECT Maalit FROM Pelaajat Where id = '26'";
   $result = $mysqli->query($sql);

   if ($result->num_rows > 0) {

     while($row = $result->fetch_assoc()) {
         echo  $row["Maalit"];
     }
 } else {
     echo "0 results";
 }
  ?>
 </div>

 <div class="playerInfo position">
  <h1> Pelipaikka</h1>

     <?php
   $sql = "SELECT Pelipaikka FROM Pelaajat Where id = '26'";
   $result = $mysqli->query($sql);

   if ($result->num_rows > 0) {

     while($row = $result->fetch_assoc()) {
         echo  $row["Pelipaikka"];
     }
 } else {
     echo "0 results";
 }
  ?>
 </div>

 <div class="cards">


  </div>



</div>

</div> <!-- End of wrapperOfPlayers -->
