
<head>
<script>
@import "/style.css";
</script>
</head>



<div id="teamInfoBoxWrapperC">

  <div class="teamInfoBox">

    <div class="teamLogo">
      <img class="imgsize"src="
      <?php
      echo databaseQuery('Logot','logo','9');
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

    <div class="moreInfo"  onclick="playerCardBelfica()">
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

    <div class="moreInfo"  onclick="playerCardBelfica()">
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

  <div class="moreInfo"  onclick="playerCardBelfica()">
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

<div class="moreInfo"  onclick="playerCardBelfica()">
  <h1> Lisätietoa </h1>
</div>
</div>
</div>
