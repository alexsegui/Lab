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
        
    <h1>Creació de joc Multiplayer </h1>
    <h2 id = "C1">1ªPart: Preparació del projecte </h2>
        
    <p>Creem un projecte 3D amb qualsevol nom.</p>
        <img src="../Imatges/ImatgesDania/multi1.png">
        
    <p>Preparem el projecte per que sigui multiplayer, per això un cop dins l’editor de Unity anem a Window > General > Services i donarem al Multiplayer Services. Un cop carregat especificarem quants jugadors podem tenir al servidor i per això hem d’acceptar l’EULA. Per tant donarem clic i ens portarà a una web.</p>
        <img src="../Imatges/ImatgesDania/multi2.png">
        
    <p>Un cop acceptat l’EULA ens demana posar el nombre de jugadors, el posem i donem Save.</p>
        <img src="../Imatges/ImatgesDania/multi3.png">
  
    <p>Fet això tenim el projecte llest per començar. </p>
      
    <p>Creem un GameObject (Empty).</p>  
        <img src="../Imatges/ImatgesDania/multi4.png">
        
    <p>Li canviarem el nom a Network Manager i li afegirem els components: NetworkManager i NetworkManagerHUD. </p>
        <img src="../Imatges/ImatgesDania/multi5.png">
        
    <p>Crearem un prefab el qual representarà el nostre jugador i tots els altres conectats. L'anomenarem Player Prefab.</p>
        <img src="../Imatges/ImatgesDania/multi6.png">

    <p>Si no tenim cap personatge creat, hem de crear un i portar-lo a aquest prefab. Per això crearé un nou cilindre i l'arrossegaré amb el ratolí fins al prefab creat (li canvio el nom del cilindre per Player. </p>
        <img src="../Imatges/ImatgesDania/multi7.png">

    <p>Afegim els components NetworkIdentity i NetworkTransform al Player Prefab. El NetworkTransform sincronitza el moviment del GameObject del jugador, per tant, si estàs fent un joc en el qual els jugadors no es mouen, pots prescindir d’aquest. </p>
        <img src="../Imatges/ImatgesDania/multi8.png">

    <p>Anem al NetworkManager, a la part de l’inspector anem on posa Network Manager (Script) i allà despleguem l’opció Spawn Info. Un cop desplegat, on posa Player Prefab arrossegarem el nostre Player Prefab creat anteriorment.</p>
        <img src="../Imatges/ImatgesDania/multi9.png">
    
    <p>Compilem el projecte i l’obrirem. (Podem clicar Build and Run Control + B)</p>
        <img src="../Imatges/ImatgesDania/multi10.png">
        <img src="../Imatges/ImatgesDania/multi11.png">

    <p>Un cop obert el joc, donarem a Enable Match Maker.</p>
        <img src="../Imatges/ImatgesDania/multi12.png">
        
    <p>Posarem nom a la nostra sala i li donarem a Create Internet Match. </p>
        <img src="../Imatges/ImatgesDania/multi13.png">
        
    <p>Fet això només cal obrir un altre joc i donar-li a Enable Match Maker (M), Find Internet Match i connectar-nos a la sala amb el nostre nom.</p>
        <img src="../Imatges/ImatgesDania/multi14.png">
        <img src="../Imatges/ImatgesDania/multi15.png">
        
    <p>Ara que ja ens podem connectar, podem configurar el nostre joc per jugar-hi.</p>
        <img src="../Imatges/ImatgesDania/multi16.png">
    
    <p></p>

        
     <!-- ################################################################################################ -->
     <h2 id = "C2"> 2ªpart: Donar jugabililtat als personatges  </h2>
        
        <p>Crearem l’script de Player controller, afegirem el següent codi i el importarem al Player Prefab. </p>
            <img src="../Imatges/ImatgesDania/multi17.png">
            <img src="../Imatges/ImatgesDania/multi18.png">
            <img src="../Imatges/ImatgesDania/multi19.png">
            <img src="../Imatges/ImatgesDania/multi20.png">

        <p>Per saber on mira el personatge, li farem uns ulls i una pistola, per això anirem al prefab i el tornarem a pujar a la escena. Un cop allà crearem dins del player un nou objecte 3D Cube i li direm Visor. Escala de  0.95, 0.25, 0.5. Posició 0, 0.5, 0.24. Per donar-li color creem un material amb qualsevol color i l’assignem al Visor. </p>
            <img src="../Imatges/ImatgesDania/multi21.png">

        <p>Crearem el arma al jugador, per això: dins de Player igual creem un cilindre amb posició 0.5, 0, 0.5. Rotació 90, 0, 0. Escala 0.25, 0.5, 0.25. Eliminem el Collider d’aquesta i li posarem el nom de Gun. Per últim el color també el podem modificar, jo utilitzaré un nou material negre. </p>
        <p>Fet tot això, eliminarem l’antic prefab i arrastrem el nou a la carpeta del projecte per actualitzar-lo. Ja podem tornar a eliminar el Player a jerarquia.</p> 
            <img src="../Imatges/ImatgesDania/multi22.png">
            <img src="../Imatges/ImatgesDania/multi23.png">

        <p>Ara que tenim arma, farem que dispari. Per començar necessitem la textura d’una bala. Per tant, crearem un nou objecte anomenat Bullet, tipus 3d sphere. Donarem a Reset Position. Posarem una escala de 0.2, 0.2, 0.2. Li afegirem un RigidBody. Un cop fet això el portarem a la carpeta del projecte per crear un prefab i eliminarem el de jerarquia. Per últim, amb el Script PlayerController, afegirem aquest a Bullet Prefab.</p>
            <img src="../Imatges/ImatgesDania/multi24.png">
            <img src="../Imatges/ImatgesDania/multi25.png">

        <p>Si no volem que hi hagi gravetat per la bala, l’hem de desactivar al seu rigidbody:</p>
            <img src="../Imatges/ImatgesDania/multi26.png">
        
        <p>Ara definirem d’on surt la bala, per això tornarem a modificar el Player Prefab. Crearem dins seu un Empty, li direm Bullet Spawn i posarem de posició 0.5,0,1. Fet això, actualitzem el Player Prefab i eliminem el Player de jerarquia.</p>
            <img src="../Imatges/ImatgesDania/multi27.png">
        
        <p>Ara només cal anar al script de PlayerController i assignar el BulletSpawn i fer-ho també al Player Prefab:</p>
            <img src="../Imatges/ImatgesDania/multi28.png">
            <img src="../Imatges/ImatgesDania/multi29.png">
        
        <p>Crearem l’script de Bullet amb el següent codi:</p>
            <img src="../Imatges/ImatgesDania/multi30.png">
        
        <p>També crearem l’script Health amb el següent codi:</p>
            <img src="../Imatges/ImatgesDania/multi31.png">
            <img src="../Imatges/ImatgesDania/multi32.png">
        
        <p>Un cop afegit l’script Health, toca posar-lo en funcionament, per això anirem al Player Prefab i li assignarem aquest script:</p>
            <img src="../Imatges/ImatgesDania/multi33.png">
        
        <p>Ara crearem la seva vida al joc, per veure-la. A la jerarquia crearem UI-Image, posarem nom Background, el canvas el renombrarem per Healthbar Canvas, a Background li donarem a Reset Position de Image, posarem de mida, 200 x 10, Image source posarem a InputFieldBackground, posarem un color vermell i desde la propia jerarquia, duplicarem Background i el renombrarem el duplicat a Foreground.</p>
            <img src="../Imatges/ImatgesDania/multi34.png">
            <img src="..//Imatges/ImatgesDania/multi35.png">

        <p>Fet això canviem el color de Foreground a verd, l’anclem al crentre-esquerra utilitzant shift, canviem el Width a 200 i posem el Foreground con a Child de Background.</p>
            <img src="../Imatges/ImatgesDania/multi36.png">

        
        <p>Seleccionem el Healthbar Canvas i posem Canvas -> render mode -> world space. Pugem el prefab player a jerarquia i posarem el Healthbar Canvas com a child de player. Ferm Reset Position de Healthbar canvas i posem escala 0.01, 0.01, 0.01 i posició 0, 1.5, 0. Anirem al Player i actualitzarem el Prefab. </p>
            <img src="../Imatges/ImatgesDania/multi37.png">
            <img src="../Imatges/ImatgesDania/multi38.png">
        
        <p>Posem l’script Health que te Player a Healthbar-> Foreground. </p>
            <img src="../Imatges/ImatgesDania/multi39.png">

        <p>Fet tot això, actualitzem el prefab i eliminem el Player de jerarquia.</p>
            <img src="../Imatges/ImatgesDania/multi40.png">
        
        <p>Crearem l’script Billdboard amb el següent codi: </p>
            <img src="../Imatges/ImatgesDania/multi41.png">
        
        <p>Fet això anirem a Healthbar Canvas i afegirem com a component l’script de Billboard.</p>
            <img src="../Imatges/ImatgesDania/multi42.png">
        
        <p>Fet tot això amb el joc funcional, anem a crear enemics. Per això farem un nou Empty, amb nom Enemy Spawner, li farem reset position, li afegirem el component Network Identity, un cop seleccionat aquest li donarem a Server Only i podrem començar a crear l’scirpt EnemySpawner.</p>
            <img src="../Imatges/ImatgesDania/multi43.png">
        
        <p>Emplenem l’script EnemySpawner amb el següent codi i l’afegirem al Enemy Spawner com a component d’aquest:</p>
            <img src="../Imatges/ImatgesDania/multi44.png">
            <img src="../Imatges/ImatgesDania/multi45.png">
        
        <p>Disseny dels enemics. Per això, copiem el Player i li posarem nom Enemy al copiat. Fet això eliminarem els childs Gun i Bullet. També eliminarem l’script PlayerController. I podem personalitzar els materials o colors del enemic per diferenciar-lo amb un player.</p>
            <img src="../Imatges/ImatgesDania/multi46.png">
        
        <p>Ara farem un Cube com a Child d’ Enemy i l’anomenarem Mohank. Li posarem de posició 0, 0.55, -0.15. De escala 0.2, 1, 1. Eliminarem el Box Collider i guardarem el prefab. (Ja podem esborrar de jerarquia el enemy).</p>
            <img src="../Imatges/ImatgesDania/multi47.png">
        
        <p>Ara al Network Manager, afegirem Registered Spawnable Prefabs i posarem la prefab del Enemy.</p>
            <img src="../Imatges/ImatgesDania/multi48.png">
        
        <p>Ara al Enemy Spawner assignarem el prefab del enemic al apartat del script del EnemySpawner. Posem el número d’enemics que volem que apareguin, per exemple 4 i a Main Camera (dins l’inspector) posarem posició 0, 0, -15.</p>
            <img src="../Imatges/ImatgesDania/multi49.png">
        
        <p>Per acabar cal posar que els enemics donin respawn. Per això primer han de morir, anem al Enemy Prefab, a la part de l’script Health i donem a Destroy On Death.</p>
            <img src="../Imatges/ImatgesDania/multi50.png">
        
        <p>Ara li donarem dos punts de respawn diferents als enemics, per això crearem un Empty anomenat Spawn Position 1, donarem el component de Network Start Position, posarem de posició 3, 0, 0. Duplicarem el Spawn Position 1 i renombrar aquest a Spawn Position 2 i la posició d’aquest la canviarem a –3, 0, 0.</p>
            <img src="../Imatges/ImatgesDania/multi51.png">
        
        <p>Per acabar al Network Manager, a Spawn Info, apartat de Player Spawn Method posarem el Round Robin i ja estarà llest.</p>
            <img src="../Imatges/ImatgesDania/multi52.png">
        
        <p></p>


        
     <!-- ################################################################################################ -->
  
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter"> 
      <!-- ################################################################################################ -->
    <h6>INDEX MULTIPLAYER</h6>
    <nav class="sdb_holder">
        <ul>
            <li><a href="#C1"> PREPARACIÓ DEL PROJECTE </a></li>
            <li><a href="#C2"> DONAR JUGABILITAT ALS PERSONATGES </a></li>
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