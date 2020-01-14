<!DOCTYPE html>
<!--
Template Name: Abele
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<?php session_start(); ?>
<html>
<head>
<title>ELLABORATOR</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<?php 
   $avat =  $_SESSION['avat'];
?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
   <div class="fl_left">
	    Usuari/a:  
		<?php         
            echo "<img src = /images/avatar/" . $avat . ".png style=width:20%>"?>
       <!-- 
      <ul class="nospace linklist"> -->
 		<a href="/sortir.php">-- Sortir --</a>
        <!-- <li><a href="#">Link 1</a></li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
        <li><a href="#">Link 4</a></li>
        <li><a href="#">Link 5</a></li>
      </ul>
        -->
    </div>
    <div class="fl_right">
      <ul class="nospace linklist">
        <li><i class="fa fa-phone"></i> 65 75 85 266</li>
        <li><i class="fa fa-envelope-o"></i> jferna6@xtec.cat</li>
      </ul>
    </div>
    <br>
	 <br>
	<div class="fl_right">
      <ul class="nospace linklist"> 
        <li><a href="#">Comunicat</a></li>
        <li><a href="/pages/full-width.php">Xat</a></li>
        <li><a href="/pages/tutorials/Tutorials/tutorialsindex.php">Tutorials</a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <nav id="mainav" class="fl_left">
      <img src = "/images/UDGPalamos.gif" style="width:20%"> 
    </nav>
    <!-- ################################################################################################ -->
       <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="/index.php">Inici</a></li>
        <li><a href="/pages/gallery.php">Galeria </a></li>
		 <li><a class="active" href="/pages/dam.php">DAM/SMX</a></li>
		<li><a class="active" href="/pages/mep.php">MEP/MEI</a>
        </li>       
        <li><a href="/pages/propostes.php">Propostes</a></li>
      </ul>
    </nav>
	<nav id="mainav" class="fl_center">
      <img src = "/textstyle/ElLaboratori.png" style="width:258px;height:54px"> 
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content three_quarter first"> 
      <!-- ################################################################################################ -->
      <h1>TUTORIAL START MENU/SETTINGS MENU/SAVE/LOAD SYSTEM</h1>
        
        <h2 id = "C1"> START MENU </h2>
        <p>Primer tindrem que crear dos escenes una per el joc i laltre de el menú.</p>
                <img src="../Imatges/Imatgesstart/start1.png">

        <p> Entrem a la scene de Menu.</p>
        <p>Al panel per posarli una foto la descarguem de internet i li posem la seguent opcio i arrastrem la foto al source image del panel.</p>
                <img src="../Imatges/Imatgesstart/start2.png">
        
        <p> Creem un button, li borrem el text que te de fill i li posem el text que hem creat abans. Al button li direm PlayButton.</p>
                <img src="../Imatges/Imatgesstart/start3.png">
                
        <p> Anclem el text aixi clicant el alt. </p>
                <img src="../Imatges/Imatgesstart/start4.png">
        
        <p> Normal Color = transparent.</p>
        <p>Highlighted Color= gris transparent.</p>
        <p>Pressed Color negre transparent.</p>
                <img src="../Imatges/Imatgesstart/start5.png">
        
        <p> Dupliquem el PlayButton dos cops i els hi cambien el text i el nom.</p>
                <img src="../Imatges/Imatgesstart/start6.png">
        
        <p> Creem un empty que es digui MainMenu del tamany de la foto i els hi posem els 3 buttons.</p>
                <img src="../Imatges/Imatgesstart/start7.png">

        <p> Creem un script al MainMenu que es digui MainMenu i li posem la seguent funcio.</p>
                <img src="../Imatges/Imatgesstart/start8.png">
        
        <p> A build setting li posem les dos escenes.</p>
                <img src="../Imatges/Imatgesstart/start9.png">
                
        <p> A playButton li fem un nou On Click, li posem el mainMenu a Baix i a la dreta MainMenu → PlayGame (Aixo u fariem si no tinguessim la barra de carga). </p>
                <img src="../Imatges/Imatgesstart/start10.png">
        
        <p> Al script de MainMenu li posem aquesta funcio. </p>
                <img src="../Imatges/Imatgesstart/start11.png">
        
        <p>En el Button de QuitButton li posem el on click de la funcio QuitGame.</p>
                <img src="../Imatges/Imatgesstart/start12.png">
        <p></p>
        
    <h2 id = "C2"> BARRA DE CARREGA </h2>
        
        <p> Crem un empty i resetegem la posicio. </p> 
                <img src="../Imatges/Imatgesstart/start13.png">
                
        <p> Li afegim el script de MainMenu i comentem el playgame. </p>
                <img src="../Imatges/Imatgesstart/start14.png">
        
        <p> A playButton li posem el onClick amb la funcio LoadLevel. </p>
                <img src="../Imatges/Imatgesstart/start15.png">
                
        <p> Creem un nou  panel (LoadingScreen) fill de canvas i li posem la mateixa imatge  que abans, li treiem el tranparent i l’anclem aquí. </p>
                <img src="../Imatges/Imatgesstart/start16.png">
        
        <p> Dins del panel creen un slider i li cambiem la configuracio aixi: </p>
                <img src="../Imatges/Imatgesstart/start17.png">
        
        <p> Delete al Handle Slide Area.</p>
            <img src="../Imatges/Imatgesstart/start18.png">
        
        <p> Cambiem el tamany del fillArea. </p>
                <img src="../Imatges/Imatgesstart/start19.png">
        
        <p>Cambiem color del fill</p>
                <img src="../Imatges/Imatgesstart/start20.png">
        
        <p> Entrem al script i li fem aquests canvis.</p>
                <img src="../Imatges/Imatgesstart/start21.png">
                
        <p>A levelLoad li posem els seguents objectes al script</p>
                <img src="../Imatges/Imatgesstart/start22.png">
        <p></p>
                
    <h2 id = "C3"> PAUSE </h2>
        
        <p> Creem canvas i li donem pixel perfect. </p>
                <img src="../Imatges/Imatgesstart/start23.png">
                
        <p> Creem un panel fill del canvas color transparent negre.</p>
                <img src="../Imatges/Imatgesstart/start24.png">
        
        <p> None a source image. </p>
                <img src="../Imatges/Imatgesstart/start25.png">
        
        <p> Cambiem el nom, creem un boto i li treiem la image.</p>
                <img src="../Imatges/Imatgesstart/start26.png">
        
        <p> Text del button.</p>
                <img src="../Imatges/Imatgesstart/start27.png">
        
        <p> Activem imagen i posem els color aixi i la navigation a none als 3 buttons. </p>
                <img src="../Imatges/Imatgesstart/start28.png">
                
        <p> Dupliques els button i els hi cambies el text i el nom dels buttons.</p>
        <p>El quit el dupliques del menú aixi tenen el mateix tamany.</p>
                <img src="../Imatges/Imatgesstart/start29.png">
        
        <p> Creem script al canvas que es digui pauseMenu. </p>
                <img src="../Imatges/Imatgesstart/start30.png">
        
        <p> Li afegim aixo.</p>
                <img src="../Imatges/Imatgesstart/start31.png">
        
        <p> En els tres buttons posem navigation none.</p>
                <img src="../Imatges/Imatgesstart/start32.png">
                
        <p> Fem el onclick de els tres buttons.</p>
                <img src="../Imatges/Imatgesstart/start33.png">
                <img src="../Imatges/Imatgesstart/start34.png">
                <img src="../Imatges/Imatgesstart/start35.png">
        <p></p>
        
    <h2 id = "C4"> SETTINGS MENU </h2>
        
        <p>FULLSCREEN</p>
        <p> Creem un canvas amb un panel amb el fons anterior i li posem un text amb el titol settings.</p>
        <p> Creem el toggle.</p>
                <img src="../Imatges/Imatgesstart/start36.png">
        
        <p> Cambiem el text del toggle. </p>
                <img src="../Imatges/Imatgesstart/start37.png">
        
        <p>Cambiem el nom a FullscreenButton</p>
            <img src="../Imatges/Imatgesstart/start38.png">
        
        <p>Creem un script SettingsMenu i l'associem a canvas.</p>
            <img src="../Imatges/Imatgesstart/start39.png">
            <img src="../Imatges/Imatgesstart/start40.png">
        
        <p>Fem el onclick.</p>
            <img src="../Imatges/Imatgesstart/start41.png">
        
        <p>Creem un button i li posem aquesta forma amb els colors fets.</p>
            <img src="../Imatges/Imatgesstart/start42.png">
        
        <p>Fem el onclick del boto de sortir.</p>
            <img src="../Imatges/Imatgesstart/start43.png">
        
        <p>Fem un build i comprobem que tot funcioni correctament</p>
        <p></p>


      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter"> 
      <!-- ################################################################################################ -->
      <h6>TUTORIAL START MENU/SETTINGS MENU/SAVE/LOAD SYSTEM</h6>
      <nav class="sdb_holder">
        <ul>
          <li><a href="#C1">START MENU</a></li>
          <li><a href="#C2">BARRA DE CARREGA</a></li>
          <li><a href="#C3">PAUSE</a></li>
          <li><a href="#C4">SETTINGS MENU</a></li>
        </ul>
      </nav>
        
    <!-- ################################################################################################ --> 
        
     <div class="sdb_holder">
        <article>
          <h6>TUTORIALS DAM</h6>
          <ul>
            <li><a href="mingo.php">GAMEKIT 2D</a></li>
            <li><a href="jocsan.php">GAMEKIT 3D</a></li>
            <li><a href="toni.php">PLATAFORMES 2D</a></li>
            <li><a href="eric.php">PROTOTYPE 3RD PERSON</a></li>
            <li><a href="alex.php">BASIC GAMEPLAY</a></li>
            <li><a href="danim.php">DRIVE SIMULATION</a></li>
            <li><a href="ivan.php">PLANE SIMULATION</a></li>
            <li><a href="julia.php">AR TRUMP</a></li>
            <li><a href="arturo.php">BASE DE DADES EN UNITY</a></li>
            <li><a href="dania.php">JOC MULTIPLAYER</a></li>
            <li><a href="mingoscripts.php">PROGRAMACIÓ DE VIDEOJOC BÀSICA EN C #</a></li>
            <li><a href="dialoguesystem.php">SIMPLE DIALOGUE SYSTEM</a></li>
            <li><a href="minimap.php">MINIMAP TUTORIAL</a></li>
            <li><a href="xat.php">CHAT TUTORIAL</a></li>
            <li><a href="3dcharacterselection.php">3D CHARACTER SELECTION</a></li>
            <li><a href="2dcharacterselection.php">2D CHARACTER SELECTION</a></li>
            <li><a href="multiplayer.php">MENU MULTIPLAYER</a></li>
            <li><a href="github.php">GITHUB EN UNITY</a></li>
            <li><a href="menus.php">TUTORIAL START MENU/SETTINGS MENU/SAVE/LOAD SYSTEM</a></li>
            <li><a href="gps.php">GPS EN UNITY</a></li>
            <li><a href="navmesh.php">NAV MESH TUTORIAL</a></li>
          </ul>
        </article>
      </div>
        
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row6">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">El Laboratori</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script> 
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>