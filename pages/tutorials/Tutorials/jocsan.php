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
        
    <h1>TUTORIAL 3D GameKit </h1>
        
    <p></p>
        
    <!-- ################################################################################################ -->
        
    <h1 id = "C1">Crear nova Escena </h1>
        <img src="../Imatges/ImatgesJocsan/gk3d.png">     
    <p>Seleccionem la opció Kit tools, després Create New Scene</p>
        <img src="../Imatges/ImatgesJocsan/gk3d2.png"> 
    <p>Posem un nom a l'escena nova i pressionem create</p>
        <img src="../Imatges/ImatgesJocsan/gk3d3.png">
    <p>Escena creada</p>
    <p></p>
    
    <!-- ################################################################################################ -->
    <h1 id = "C2"> Ampliar terreny </h1>
        
            <img src="../Imatges/ImatgesJocsan/gk3d4.png">
        <p>Amb el terreny seleccionat, pressionem a Scale Tool </p>
            <img src="../Imatges/ImatgesJocsan/gk3d5.png">
        <p>Pressionant el quadre del mig, podem escalar el terreny (ampliar-lo o reduïr-lo).</p>
        
        <p></p>
        
     <!-- ################################################################################################ -->
     <h1 id = "C3"> Posar roques a l'Escena</h1>
            <img src="../Imatges/ImatgesJocsan/gk3d6.png">

        <p>Ruta dels objectes 3D Game Kit/Prefabs/Environments/Rock </p>
            <img src="../Imatges/ImatgesJocsan/gk3d7.png">
        <p>Seleccionem les roques i les posem a l'escena</p>

        <p></p>
        
     <!-- ################################################################################################ -->
     <h1 id = "C4"> Agregar objecte interactiu </h1>
            <img src="../Imatges/ImatgesJocsan/gk3d8.png">

        <p>Ruta de l'objecte 3D Game Kit/Prefabs/Interactables</p>
            <img src="../Imatges/ImatgesJocsan/gk3d9.png">
        
        <p>I arrastrem l'objecte a l'escena</p>
        
        <p></p>
        
     <!-- ################################################################################################ -->
    <h1 id = "C5"> Crear una estructura que marqui un cami </h1>
            <img src="../Imatges/ImatgesJocsan/gk3d10.png">

        <p>Agreguem diferents objectes a l'escenari per marcar un cami específic, pel qual haurà de passar el jugador.</p>
        
        <p></p>
        
    <!-- ################################################################################################ -->
    <h1 id = "C6"> Agregar àcid </h1>
            <img src="../Imatges/ImatgesJocsan/gk3d11.png">

        <p>Seleccionem plane a la jerarquía de l'escena. </p>
            <img src="../Imatges/ImatgesJocsan/gk3d12.png">
        <p>Despres a l'inspector pressionarem a Open Probuilder. </p>
            <img src="../Imatges/ImatgesJocsan/gk3d13.png">
        <p>I utilitzarem la opció face selection per fer un forat al terreny</p>
            <img src="../Imatges/ImatgesJocsan/gk3d14.png">
            <img src="../Imatges/ImatgesJocsan/gk3d15.png">
        <p>Seleccionem el prefab de làcid i el posem al forat.</p>
            <img src="../Imatges/ImatgesJocsan/gk3d16.png">
        <p>Agreguem l'Script Death per matar al jugador</p>

        <p></p>
           
    <!-- ################################################################################################ -->
    <h1 id = "C7"> Plataforma mòvil </h1>
        <img src="../Imatges/ImatgesJocsan/gk3d17.png">
        
        <p>Busquem el prefab movingPlatform </p>
            <img src="../Imatges/ImatgesJocsan/gk3d18.png">
        <p>I l'afegim a l'escena, modifiquem l'inici i el final del desplaçament de la plataforma. </p>
            <img src="../Imatges/ImatgesJocsan/gk3d19.png">
        <p>Activem la plataforma i cambiem el Loop Type per ping pong per tal que el desplaçament de la plataforma es repeteixi sempre</p>

        <p></p>

        
    <!-- ################################################################################################ -->
   <h1 id = "C8"> Afegim objectes que interactuen entre ells </h1>
        <img src="../Imatges/ImatgesJocsan/gk3d20.png">
        
        <p>Añadimos los prefabs DoorSmall y PressurePad en la escena </p>
            <img src="../Imatges/ImatgesJocsan/gk3d21.png">
        <p>Seleccionamos la PressurePad y en el inspector agregamos en Interactive Object el prefab de la puerta. </p>
        <p>Ahora cuando estemos encima del PressurePad la puerta se abrira automaticamente.</p>
        
     <!-- ################################################################################################ -->
    <h1 id = "C9"> Enemics </h1>
            <img src="../Imatges/ImatgesJocsan/gk3d22.png">
        <p>Afegim el chomper a l'escena</p>
            <img src="../Imatges/ImatgesJocsan/gk3d23.png">
        <p>A l'inspector del chomper modificarem el seu radi de detecció</p>
            <img src="../Imatges/ImatgesJocsan/gk3d24.png">
        <p>Radi modificat</p>
        <p>Moviment del chomper</p>
            <img src="../Imatges/ImatgesJocsan/gk3d25.png">
        <p>Creem un GameObject i el renombrem NavMeshSurface, a l'inspector de l'objecte cambiem el tipus d'agent d'humanoid a chomper</p>
            <img src="../Imatges/ImatgesJocsan/gk3d26.png">
        <p>A Include Layers seleccionarem les zones per on el chomper es podrà desplaçar, despres de seleccionar-los pressionem Bake.</p>

        <p></p>
        
     <!-- ################################################################################################ -->
    <h1 id = "C10"> Afegir vegetació </h1>
            <img src="../Imatges/ImatgesJocsan/gk3d27.png">
        <p>Agreguem la vegetació d'un en un</p>
            <img src="../Imatges/ImatgesJocsan/gk3d28.png">
        <p>Exemple vegetació (VegetationLarge)</p>
            <img src="../Imatges/ImatgesJocsan/gk3d29.png">
        <p>Podem utilitzar l'eina per agregar vegetació implementada al 3d game kit, seleccionem el tipus de vegetació que volem i els afegim a l'escenari</p>
            <img src="../Imatges/ImatgesJocsan/gk3d30.png">
        <p>Exemple de vegetació (GroundCover y VegetationSmall)</p>

        <p></p>
        
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter"> 
      <!-- ################################################################################################ -->
      <h6>TUTORIAL 3D GameKit</h6>
      <nav class="sdb_holder">
        <ul>
            <li><a href="#C1"> CREAR NOVA ESCENA </a></li>
            <li><a href="#C2"> AMPLIAR TERRENY </a></li>
            <li><a href="#C3"> POSAR ROQUES A L'ESCENA </a></li>
            <li><a href="#C4"> AGREGAR OBJECTE INTERACTIU </a></li>
            <li><a href="#C5"> CREAR UNA ESTRUCTURA QUE MARQUI UN CAMI </a></li>
            <li><a href="#C6"> AGREGAR ACID </a></li>
            <li><a href="#C7"> PLATAFORMA MOVIL </a></li>
            <li><a href="#C8"> AFEGIR OBJECTES QUE INTERACTUEN ENTRE ELLS </a></li>
            <li><a href="#C9"> ENEMICS </a></li>
            <li><a href="#C10"> AFEGIR VEGETACIÓ </a></li>
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