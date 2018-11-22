
<head>
<script>
@import "style.css";
</script>
</head>


<div id="teamInfoBoxWrapperH">

  <div class="teamInfoBox">

    <div class="teamLogo">
       <img src="juventus.png" style="width:100px;height:100px;">
    </div>

    <div class="teamName">
    <?php
    echo databaseQuery('Joukkueet','Nimi','29');
    ?>
    </div>

    <!-- Pelatut pelit -->
    <div class="playedGames title">
      <h1> Pelatut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pelatutpelit','29');
    ?>
      </div>
    </div>

    <!-- Voitetut pelit -->
    <div class="wonGames title">
      <h1> Voitetut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Voitetutpelit','29');
    ?>
      </div>
    </div>

    <!-- tasapelit -->
    <div class="drawGames title">
      <h1> Tasapelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Tasapelit','29');
    ?>
      </div>
    </div>

    <!-- Havityt pelit -->
    <div class="lostGames title">
      <h1> Havityt pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Havitytpelit','29');
    ?>
      </div>
    </div>

    <!-- Tehdyt maalit -->
    <div class="totalGoals title">
      <h1> Tehdyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','TehdytMaalit','29');
    ?>
      </div>
    </div>

    <!-- Pisteet -->
    <div class="points title">
      <h1> Pisteet</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pisteet','29');
    ?>
      </div>
    </div>

    <!-- Päästetyt Maalit -->
    <div class="totalGoals2 title">
      <h1> Päästetyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','PaastetytMaalit','29');
    ?>
      </div>
    </div>

    <div class="moreInfo"  onclick="playerCardBelfica()">
      <h1> Lisätietoa </h1>
    </div>
  </div>

  <div class="teamInfoBox">

    <div class="teamLogo">
       <img src="manchester_united.png" style="width:100px;height:100px;">
    </div>

    <div class="teamName">
    <?php
    echo databaseQuery('Joukkueet','Nimi','30');
    ?>
    </div>

    <!-- Pelatut pelit -->
    <div class="playedGames title">
      <h1> Pelatut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pelatutpelit','30');
    ?>
      </div>
    </div>

    <!-- Voitetut pelit -->
    <div class="wonGames title">
      <h1> Voitetut pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Voitetutpelit','30');
    ?>
      </div>
    </div>

    <!-- tasapelit -->
    <div class="drawGames title">
      <h1> Tasapelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Tasapelit','30');
    ?>
      </div>
    </div>

    <!-- Havityt pelit -->
    <div class="lostGames title">
      <h1> Havityt pelit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Havitytpelit','30');
    ?>
      </div>
    </div>

    <!-- Tehdyt maalit -->
    <div class="totalGoals title">
      <h1> Tehdyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','TehdytMaalit','30');
    ?>
      </div>
    </div>

    <!-- Pisteet -->
    <div class="points title">
      <h1> Pisteet</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','Pisteet','30');
    ?>
      </div>
    </div>

    <!-- Päästetyt Maalit -->
    <div class="totalGoals2 title">
      <h1> Päästetyt Maalit</h1>
      <div class="infoNumber">
    <?php
    echo databaseQuery('Joukkueet','PaastetytMaalit','30');
    ?>
      </div>
    </div>

    <div class="moreInfo"  onclick="playerCardBelfica()">
      <h1> Lisätietoa </h1>
    </div>
  </div>

  <div class="teamInfoBox">

  <div class="teamLogo">
     <img src="valencia.png" style="width:100px;height:100px;">
  </div>

  <div class="teamName">
  <?php
  echo databaseQuery('Joukkueet','Nimi','31');
  ?>
  </div>

  <!-- Pelatut pelit -->
  <div class="playedGames title">
    <h1> Pelatut pelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Pelatutpelit','31');
  ?>
    </div>
  </div>

  <!-- Voitetut pelit -->
  <div class="wonGames title">
    <h1> Voitetut pelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Voitetutpelit','31');
  ?>
    </div>
  </div>

  <!-- tasapelit -->
  <div class="drawGames title">
    <h1> Tasapelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Tasapelit','31');
  ?>
    </div>
  </div>

  <!-- Havityt pelit -->
  <div class="lostGames title">
    <h1> Havityt pelit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Havitytpelit','31');
  ?>
    </div>
  </div>

  <!-- Tehdyt maalit -->
  <div class="totalGoals title">
    <h1> Tehdyt Maalit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','TehdytMaalit','31');
  ?>
    </div>
  </div>

  <!-- Pisteet -->
  <div class="points title">
    <h1> Pisteet</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','Pisteet','31');
  ?>
    </div>
  </div>

  <!-- Päästetyt Maalit -->
  <div class="totalGoals2 title">
    <h1> Päästetyt Maalit</h1>
    <div class="infoNumber">
  <?php
  echo databaseQuery('Joukkueet','PaastetytMaalit','31');
  ?>
    </div>
  </div>

  <div class="moreInfo"  onclick="playerCardBelfica()">
    <h1> Lisätietoa </h1>
  </div>
</div>

<div class="teamInfoBox">

<div class="teamLogo">
   <img src="young_boys.png" style="width:100px;height:100px;">
</div>

<div class="teamName">
<?php
echo databaseQuery('Joukkueet','Nimi','32');
?>
</div>

<!-- Pelatut pelit -->
<div class="playedGames title">
  <h1> Pelatut pelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Pelatutpelit','32');
?>
  </div>
</div>

<!-- Voitetut pelit -->
<div class="wonGames title">
  <h1> Voitetut pelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Voitetutpelit','32');
?>
  </div>
</div>

<!-- tasapelit -->
<div class="drawGames title">
  <h1> Tasapelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Tasapelit','32');
?>
  </div>
</div>

<!-- Havityt pelit -->
<div class="lostGames title">
  <h1> Havityt pelit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Havitytpelit','32');
?>
  </div>
</div>

<!-- Tehdyt maalit -->
<div class="totalGoals title">
  <h1> Tehdyt Maalit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','TehdytMaalit','32');
?>
  </div>
</div>

<!-- Pisteet -->
<div class="points title">
  <h1> Pisteet</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','Pisteet','32');
?>
  </div>
</div>

<!-- Päästetyt Maalit -->
<div class="totalGoals2 title">
  <h1> Päästetyt Maalit</h1>
  <div class="infoNumber">
<?php
echo databaseQuery('Joukkueet','PaastetytMaalit','32');
?>
  </div>
</div>

<div class="moreInfo"  onclick="playerCardBelfica()">
  <h1> Lisätietoa </h1>
</div>
</div>
</div>