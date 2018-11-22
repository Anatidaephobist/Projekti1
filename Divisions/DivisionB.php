
<head>
<script>
@import "style.css";
</script>
</head>



<div id="teamInfoBoxWrapperB">

<div class="teamInfoBox" id="teamInfoB">
    


 <div class="teamLogo" id="benficaLogo">

     <img src="logos/benfica.jpg" style="width:100px;height:100px;">

 </div>

 <div class="teamName" id="benficaName">
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


     <div class="totalGoals title">
        <h1> Tehdyt Maalit</h1>
        <div class="infoNumber">
 <?php

 echo databaseQuery('Joukkueet','TehdytMaalit','4');

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


    <!-- Päästetyt Maalit -->

    <div class="totalGoals2 title">
        <h1> Päästetyt Maalit</h1>
        <div class="infoNumber">
 <?php

 echo databaseQuery('Joukkueet','PaastetytMaalit','4');
 
 ?>


        </div>


    </div>

     <div class="moreInfo"  onclick="playerCardBelfica()">

        <h1> Lisätietoa </h1>

</div>





</div>

</div>