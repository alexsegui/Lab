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
      <h1>How to make a Minimap in Unity</h1>
        
        <p><li>Tenir un Ground i un Player a l’escena.</li></p>
        <img src="../Imatges/Imatgesminimap/mini1.PNG">
        <p></p>
        
        <p>Click dret a jerarquía i escollim Camera.</p>
        
        <p>Reset Transform.</p>
        
        <p>Copiar components del Transform del Player a la Camera que hem creat.</p>
    
        <p>Augmentem la Posició Y a 20, i la Rotacio X a 90.</p>
        
        <p>Copiar el component Camera de MainCamera i enganchar-los al de la camera que hem creat.</p>
        
        <p>Canviem la Projection de Perspective a Ortographic.</p>
    
        <p>Posem un Size de 15.</p>
    
        <p>Removem els Components Audio Listener, GUI Layer i Flare Layer.</p>
    
        <p>Renombrem la Camera a MinimapCamera.</p>
    
        <p>Click dret a jerarquía, escollim UI, dins de UI escollim RawImage.</p>
        
        <p>A l’escena escollim 2D i clickem dues vegades sobre la RawImage creada.</p>
        
        <p>Movem la RawImage a la zona on volguem ubicar el nostre minimap.</p>
        
        <p>A projecte, click dret, Create, i escollim RenderTexture.</p>
        
        <p>La renombrem amb el nom MinimapRenderTexture.</p>
    
        <p>A Size li donem les mateixes mides de la RawImage.</p>
    
        <p>A DepthBuffer seleccionem Nodepthbuffer.</p>
        
        <p>A MinimapCamera, al camp Target Texture, afegim MinimapRenderTexture.</p>
        
        <p>A RawImage, al camp Texture, afegim MinimapRenderTexture.</p>
        
        <p>Renombrem RawImage a Minimap.</p>

        <p>A jerarquía, click dret sobre Minimap, escollim UI, i escollim Image.</p>
        
        <p>Li posem el nom Minimap Border i el situem com a pare de Minimap dins del canvas.</p>

        <p>Les mides de MinimapBorder han de ser un pel mes grans que la de Minimap.</p>
        
        <p>A MinimapCamera li afegim un nou script que s’anomenara Minimap.</p>
        <img src="../Imatges/Imatgesminimap/mini2.PNG">
        <p></p>
        
        <p>Agafem el Player de jerarquía i l’arrastrem a l’script de MinimapCamera.</p>
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