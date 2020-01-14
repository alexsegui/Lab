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
      <h1>3D CHARACTER SELECTION</h1>
        
    <p>Obrim un Projecte amb la versio 2018.2 “SelectCharacter”.</p>
        
    <p>Importem la carpeta “Characters” a “Assets”.</p>
        <img src="../Imatges/Imatges3dchar/3dchar1.png">
    <p></p>
        
    <p>Una vegada importada la carpeta, anem a “Scenes” i pujem la -scene.</p>
        <img src="../Imatges/Imatges3dchar/3dchar2.png">
    <p></p>
        
    <p>Abans de tot nem a “File” → “Build Settings..” → Posem la “scene” i “scene1” per ordre.</p>
        <img src="../Imatges/Imatges3dchar/3dchar3.png">
    <p></p>
    
    <p>Creem un “GameObject” desde “CreateEmpty” i fiquem tots els “Prefabs”.</p>
    <p>Cambiem la “Rotation Y” de “GameObject” a 180.</p>
        <img src="../Imatges/Imatges3dchar/3dchar4.png">
    <p></p>
        
    <p>Creem “UI” → “Canvas” → “Panel” (Anclat a l'esquerra) → “Buttons”... (6)</p>
        <img src="../Imatges/Imatges3dchar/3dchar5.png">
    <p></p>
        
    <p>“GameObject” fiquem un component: → Carpeta Scripts → “Character Creation”.</p>
        <img src="../Imatges/Imatges3dchar/3dchar6.png">
    <p></p>
    
    <p>Dins el mateix “Canvas” → “Panell” (Anclat al centre adalt) → 1-“InputField” i 1-“Buttons”.</p>
        <img src="../Imatges/Imatges3dchar/3dchar7.png">
    <p></p>
    
    <p>Agafem tots els “Buttons” i els hi donem “On Click()” → Arrastrem “GameObject” dins “On Click”;</p>
    <p>CharacterCreation → Select (int); → Els ordenem de 0 al 5.</p>
        <img src="../Imatges/Imatges3dchar/3dchar8.png">
    <p></p>
    
    <p>Anem al “GameObject” → Arrastrem “InputField” → Script → Playername</p>
        <img src="../Imatges/Imatges3dchar/3dchar9.png">
    <p></p>
    
    <p>Al “Button” del “Panel (1)” li donem “On Click” → Arrastrem “GameObject” dins “On Click” → CharacterCreation → “ConfirmButton()”.</p>
        <img src="../Imatges/Imatges3dchar/3dchar10.png">
    <p></p>
        
    <p>Guardem “scene” i copiem “GameObject” → Pujem “scene1” i eliminem “scene” → Enganxem “GameObject” a “scene1”.</p>
        <img src="../Imatges/Imatges3dchar/3dchar11.png">
    <p></p>
        
    <p>COPY</p>
        <img src="../Imatges/Imatges3dchar/3dchar12.png">
        <img src="../Imatges/Imatges3dchar/3dchar13.png">
    <p></p>
        
    <p>PASTE</p>
        
    <p>Creem un “UI” → Text</p>
        <img src="../Imatges/Imatges3dchar/3dchar14.png">
    <p></p>
    
    <p>Agregem un Component a “GameObject” → Script → “CharacterName” → Arrastrem “Text” → CharacterName → PlayerName.</p>
        <img src="../Imatges/Imatges3dchar/3dchar15.png">
    <p></p>
    
    <p>Guardem “scene1” , pujem “scene”, eliminem “scene1”</p>
        
    <p>PLAY</p>
        <img src="../Imatges/Imatges3dchar/3dchar16.png">
        <img src="../Imatges/Imatges3dchar/3dchar17.png">
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