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
<style>
div.a {
  text-transform: uppercase;
}
</style>
      
      
    <!-- ################################################################################################ -->
    <div class="a"> 
      <!-- ################################################################################################ -->
      <h1>TUTORIAL AR TRUMP  </h1>
    
    <p><li> Entrar a la web de Vuforia (https://developer.vuforia.com/vui/develop/licenses). Registrar-se o iniciar sessió. I anar a “Get Development Key”. </li></p>
        <img src="../Imatges/ImatgesJulia/ar1.png">
    <p><li> Posar un nom a la llicència per el joc que es vol crear. Acceptar les condicions d’ús, i confirmar. </li></p>
        <img src="../Imatges/ImatgesJulia/ar2.png">
    <p><li> S'ha creat la llicència, i ara s'ha d'entrar clicant-hi a sobre. </li></p>
        <img src="../Imatges/ImatgesJulia/ar3.png">
    <p><li> Copiar la clau de la llicència. </li></p>  
        <img src="../Imatges/ImatgesJulia/ar4.png">
    <p><li> Anar al moodle, a l'apartat de AR Augmented Reality (dins de MP15 - Dual - Videojocs) i descarregar el Kit Augmented Reality Trump. </li></p>
        <img src="../Imatges/ImatgesJulia/ar5.png">
    <p><li> Tornar a la web de Vuforia, dins l'apartat de "Target Manager". </li></p>
        <img src="../Imatges/ImatgesJulia/ar6.png">
    <p><li> Afegir una base de dades, i posar-li un nom. </li></p>
        <img src="../Imatges/ImatgesJulia/ar7.png">
        <img src="../Imatges/ImatgesJulia/ar8.png">
    <p><li> Afegir un objecte. </li></p>
        <img src="../Imatges/ImatgesJulia/ar9.png">
    <p><li> L’objecte ha de ser una sola imatge. Buscar l'imatge del bitllet (20euros.jpg) dins del .zip descarregat a l'apartat 5. I posar-li un tamany de 5. </li></p>
        <img src="../Imatges/ImatgesJulia/ar10.png">
        <img src="../Imatges/ImatgesJulia/ar11.png">
    <p><li> Quan ja s'hagi creat, s'haurà de descarregar la base de dades. </li></p>
        <img src="../Imatges/ImatgesJulia/ar12.png">
        <img src="../Imatges/ImatgesJulia/ar13.png">
    <p><li> Crear un projecte 3D a Unity (2018.2.21f). </li></p>
        <img src="../Imatges/ImatgesJulia/ar14.png">
    <p><li> Importar el paquet de Vuforia dins dels Assets. </li></p>
        <img src="../Imatges/ImatgesJulia/ar15.png">
    <p><li> Insertar la base de dades del bitllet (Descarregada al pas 10). </li></p>
        <img src="../Imatges/ImatgesJulia/ar16.png">
    <p><li> Insertar tambè la carpeta LowpolyTrump, que es troba dins del .zip descarregat del moodle.</li></p>
        <img src="../Imatges/ImatgesJulia/ar17.png">
    <p><li> Guardar l'escena com a main. </li></p>
        <img src="../Imatges/ImatgesJulia/ar18.png">
    <p><li> Dins de la carpeta Assets,Vuforia, Prefabs, hi ha l' ARCamera,  que s'ha de pujar fins a la jerarquia. </li></p>
        <img src="../Imatges/ImatgesJulia/ar19.png">
    <p><li> Eliminar la Càmera Principal. </li></p>
        <img src="../Imatges/ImatgesJulia/ar20.png">
    <p><li> Dins de Assets, Vuforia, Prefabs, hi ha ImageTrget que s'ha de pujar a la jerarquia. </li></p>
        <img src="../Imatges/ImatgesJulia/ar21.png">
    <p><li> Dins de l’inspector de l'AR Camera i "Open VuforiaConfiguration", enganxar la llicència copiada al pas 4. I activar les dades. </li></p>
        <img src="../Imatges/ImatgesJulia/ar22.png">
        <img src="../Imatges/ImatgesJulia/ar23.png">
    <p><li> Dins de l’inspector de l’ImageTarget, posar la base de dades descarregada i importada. </li></p> 
        <img src="../Imatges/ImatgesJulia/ar24.png">
    <p><li> Dins de les carpetes Assets,LowpolyTrump, Anims, hi ha el trump_lp_anim_iddle01, que s'ha de pujar a la jerarquia dins de ImageTarget. </li></p>
        <img src="../Imatges/ImatgesJulia/ar25.png">
    <p><li> A l’inspector de trump_ip_anim_iddle01, canviar la rotació i l'escala. </li></p>
        <img src="../Imatges/ImatgesJulia/ar26.png">
    <p><li> Importar la carpeta StandardAssets del .zip descarregat dins de la carpeta Assets. </li></p>
        <img src="../Imatges/ImatgesJulia/ar27.png">
    <p><li> Dins les carpetes Assets, StandardAassets, CrossPlatformInput, Prefabs, hi ha el MobileSingleStickControl, que s'ha de pujar  a la jerarquia. </li></p>
        <img src="../Imatges/ImatgesJulia/ar28.png">
    <p><li> Eliminar el botó JumpButton. </li></p>
        <img src="../Imatges/ImatgesJulia/ar29.png">
    <p><li> Canviar els valors a l'escala i el rang de moviment a l’inspector de MobileJoystick. </li></p>
        <img src="../Imatges/ImatgesJulia/ar30.png">
    <p><li> Crear una carpeta d'Scripts dins d'Assets, i afegir-hi el TrumpController del .zip descarregat. </li></p>
        <img src="../Imatges/ImatgesJulia/ar31.png">
    <p><li> A l'animació d'en Trump, s'ha d'afegir un Rigidbody, on s'ha de treure la gravetat. I afegir també l'script afegit al pas anterior. </li></p>
        <img src="../Imatges/ImatgesJulia/ar32.png">
    <p><li> Dins de la segona animació (iddle) de dins les carpetes Assets, LowpolyTrump, Anims, Canviar el tipus d'animació a Legacy, dins de l'apartat Rig. </li></p>
        <img src="../Imatges/ImatgesJulia/ar33.png">
    <p><li> Fer el mateix amb la tercera animació (walk). </li></p>
        <img src="../Imatges/ImatgesJulia/ar34.png">
    <p><li> Dins de l'animació de iddle, s'ha de canviar el nom a "Iddle", i posar-la en mode loop. </li></p>
        <img src="../Imatges/ImatgesJulia/ar35.png">
        <img src="../Imatges/ImatgesJulia/ar36.png">
    <p><li> Dins del personatge de Trump, dir que hi ha dos animacions, i posar l'animació de walk. </li></p>
        <img src="../Imatges/ImatgesJulia/ar37.png">
    <p></p>
        
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