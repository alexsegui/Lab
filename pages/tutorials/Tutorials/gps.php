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
    <h1>GPS EN UNITY</h1>
        
    <h2 id = "C1"> CREAR PROJECTE </h2>
        
        <p> Crear un nou projecte en 3D de la versió 2018.2.21f1.</p>
        <p> Descarregar la carpeta de drive (https://drive.google.com/drive/folders/1kmPup_jUfairI68TIphqbS3SjAITbjv0?usp=sharing) o (https://cutt.ly/xrqlqtw).</p>
        <p> Dins de File > Build Settings > Platform,  anar a Android i canviar la plataforma. Switch Platform.</p>
        <p> Dins de File > Build Settings > Player Settings > Other Settings > Identification > PakageName, posar com.GPS.aplicacio.</p>
        <p> Importar la carpeta ScriptsGPS al projecte d’unity</p>
        <p></p>
                
    <h2 id = "C2"> JERARQUIA </h2>
        
        <p> Crear un UI > Canvas.
            <li> Inspector > Canvas Scaler (Script) > UI Scale Mode = Scale With Screen Size. Reference Resolution= 1280 i 800.</li>
                <img src="../Imatges/Imatgesgps/gps1.png">
            <li> Dins del canvas, creem, una Raw image, li posem el nom de “Background”. A la posició strech, strech. I li afegim Aspect Ratio Fitter. On li diem que el mode d’aspecte és Envelope Parent.</li>
                <img src="../Imatges/Imatgesgps/gps2.png">
        </p>
        
        <p> Dins del Canvas, creem, una Image, li posem el nom de “Header”. A la posició top, center. Li canviem la posició. (X: 0, Y: -120, Width: 1280, Height: 250). Li posem un color (17BEBB).</p>
                <img src="../Imatges/Imatgesgps/gps3.png">
        
        <p> Dins de Header, li afegim un UI > Text. Li posem el nom “coordinades”. El situem a middle/left, i li canviem la posició i mida (X: 453, Y: -28, Width: 881.3 , Height: 250). Li posem el text “ Lat: 99.99999  Long: 99.999999”. La mida del text a 44. I el centrem al esquerre, mig..</p>
                <img src="../Imatges/Imatgesgps/gps4.png">
                
        <p> Dins de Header, li afegim un UI > Text. Li posem el nom “metres”. El situem a middle/right, i li canviem la posició i mida(X: -233, Y: -28, Width: 407.6 , Height: 231). Li posem el text “0 m”. La mida del text a 64. I el centrem al mig, mig. </p>
                <img src="../Imatges/Imatgesgps/gps5.png">
        
        <p> Dins de Header, li afegim un UI > Text. Li posem el nom “PosicioActual”. El situem a top/left, i li canviem la posició i mida(X: 355, Y: -97, Width: 648 , Height: 89). Li posem el text “Posició Actual”. La mida del text a 54. I li posem bold.</p>
                <img src="../Imatges/Imatgesgps/gps6.png">
        
        <p> Dins de Header, li afegim un UI > Text. Li posem el nom “Distancia”. El situem a top/right, i li canviem la posició i mida (X: -196, Y: -113, Width: 379 , Height: 127). Li posem el text “ Distància ”. La mida del text a 54. I li posem bold.</p>
                <img src="../Imatges/Imatgesgps/gps7.png">
        
        <p> Dins del canvas, creem, una Image, li posem el nom de “Footer”. A la posició bottom, center. Li canviem la posició (X: -3, Y: 150, Width: 1280 , Height: 300). Li posem el mateix color que el Header.</p>
                <img src="../Imatges/Imatgesgps/gps8.png">

        <p> Dins del canvas, creem, un Botó, li posem el nom de “BotoAfegirText”. A la posició bottom, left. Li canviem la posició (X: 250, Y: 145, Width: 371, Height: 150). Li posem el color (76B041).</p>
                <img src="../Imatges/Imatgesgps/gps9.png">
        
        <p> Al text del botó, li diem “TextBotoAfegirText”. Li posem el text “AFEGIR” , la mida de 64, i alineat al mig.</p>
                <img src="../Imatges/Imatgesgps/gps10.png">
                
        <p> Dins del canvas, dupliquem el Botó afegir, li posem el nom de “BotoEliminarText”. A la posició bottom, right. Li canviem la posició (X: -250, Y: 145, Width: 371 , Height: 150). Li posem el color (E4572E). </p>
                <img src="../Imatges/Imatgesgps/gps11.png">
        
        <p> Al text del botó, li diem “TextBotoEliminarText”. Li posem el text “ELIMINAR”. </p>
        <p> Dins del canvas, creem, un Panel, li posem el nom de “PanelGuardarBotoAfegir”. Li canviem la posició (X: 250, Y: 800, Width: 250 , Height: 700). Li posem el color (2E282A).</p>
                <img src="../Imatges/Imatgesgps/gps12.png">
        
        <p> Dins del panell, creem un InputField, amb el nom “EntradaText”, li canviem les posicions (X: 0, Y: 155, Width: 600 , Height: 200).</p> 
                <img src="../Imatges/Imatgesgps/gps13.png">
                
        <p> En el Placeholder, posem a 64 el tamany del text, i el centrem.</p>
                <img src="../Imatges/Imatgesgps/gps14.png">
        
        <p> En el text, li posem el nom de “TextEtrada”, posem el tamany a 64, i el centrem.</p>
                <img src="../Imatges/Imatgesgps/gps15.png">
                
        <p> Dins del panell, creem un Boto, amb el nom “BotoGuardarText”, li canviem les posicions (X: -3, Y: -85, Width: 400 , Height: 100), i li posem el color (FFC914).</p>
                <img src="../Imatges/Imatgesgps/gps16.png">
        
        <p> Canviem a “TextBotoGuardarText” el text del boto. Li posem el text “GUARDAR BOTO”, la mida a 49, i centrat. </p>
                <img src="../Imatges/Imatgesgps/gps17.png">
        
        <p> Dins del panell, dupliquem el BotoGuardarText, li posem el nom “BotoGuardar”, i li canviem la posició (X: 0, Y: -227, Width: 400 , Height: 100).</p>
                <img src="../Imatges/Imatgesgps/gps18.png">
        
        <p> Canviem a “TextBotoGuardar” el text del boto. Li posem el text “GUARDAR”.</p>
                <img src="../Imatges/Imatgesgps/gps19.png">
        
        <p> Dins el canvas dupliquem el PanellGuardarBotoAfegir. I el desactivem. Al nou panell li direm “PanelEliminarBotoEliminar”. Eliminem els seus fills. Creem un boto i li direm “BotoSiEliminar”. El posem a bottom/left, canviem la posició (X: 150, Y: 150, Width: 200 , Height: 100)i posem el mateix color que el boto acceptar (76B041). Al text li posem “SI” del tamany 64.</p>
                <img src="../Imatges/Imatgesgps/gps20.png">
        
        <p> Dins el canvas dupliquem el BotoSiEliminar. Al nou boto li direm “BotoNoEliminar”. Canviem la posició (X: -150, Y: 150, Width: 200 , Height: 100) i posem el mateix color que el boto eliminar (E4572E). Al text li posem “NO”.</p>
                <img src="../Imatges/Imatgesgps/gps21.png">
                
        <p> Dins el canvas i el PanelEliminarBotoEliminar, crear un text “Titol” a top/center, canviem la posició (X: 0, Y: -64, Width: 780 , Height: 129).  Al text li posem “Estas segur?” tamany 64 i al centre. Color blanc.</p>
                <img src="../Imatges/Imatgesgps/gps22.png">
        
        <p> Dins el canvas i el PanelEliminarBotoEliminar, crear un text “DadesAEliminar” a stretch/ stretch, canviem la posició (X: 100, Y: 202, Width: 100 , Height: 250). tamany 55 i al centre. Color blanc. </p>
                <img src="../Imatges/Imatgesgps/gps23.png">
                
        <p> Dins del canvas, creem, un Panel, li posem el nom de “PanelSerPosicioMissatge”. Li canviem la posició (X: 0, Y: -370, Width: 1280 , Height: 250). Top/center. Li posem el color (2E282A). </p>
                <img src="../Imatges/Imatgesgps/gps24.png">
        
        <p> Dins el panell, creem un text “TextAPosicioMissatge”. a stretch/ stretch,  Li posem mida 64 , color blanc i centrat. </p>
        <p></p>
        
    <h2 id = "C3"> POSAR SCRIPTS </h2>
        
        <p> Creem un  Create Empty i li posem el nom de “GameController”. Li posem els scripts GPS, AddText, Save Script.</p>
                <img src="../Imatges/Imatgesgps/gps25.png">
        
        <p> GPS:
            <li>Coordinates: canvas > header > coordinades</li>
        </p>
        <p>AddText:
            <li>Panel Guardar Boto Afegir: canvas > PanelGuardarBotoAfegir.</li>
            <li>Entrada Text: canvas > PanelGuardarBotoAfegir > EntradaText</li>
        </p>
        <p> SaveScript:
            <li>Panel Eliminar:   canvas > PanelEliminararBotoEliminar.</li>
            <li>Dades A Eliminar:  canvas > PanelEliminararBotoEliminar >  DadesAEliminar.</li>
            <li>Distancia Metres:  canvas > header > metres.</li>
            <li>Panel Ser Coordenades:  canvas > PanelPosicioMissatge.</li>
            <li>Text Ser Coordenades:  canvas > PanelPosicioMissatge > TextAPosicioMissatge.</li>
        </p>
                <img src="../Imatges/Imatgesgps/gps26.png">
        
        <p>Dins de la Main Camera, posar l’script PhoneCamera. Amb el background dues vegades.</p>
        <p>En el Canvas > BotoAfegirText,  a l’on click, posar el gameController, l’script AddText, la funció OpenPanel.</p>
        <p>En el Canvas > BotoEliminarText,  a l’on click, posar el gameController, l’script SaveScript, la funció Confirmar.</p>
        <p>En el Canvas > PanelGuardarBotoAfegir > BotoGuardarText,  a l’on click, posar el gameController, l’script AddText, la funció PosarText.</p>
        <p>En el Canvas > PanelGuardarBotoAfegir > BotoGuardar,  a l’on click, posar el gameController, l’script SaveScript, la funció SaveData.</p>
        <p>En el Canvas > PanelEliminarBotoEliminar > BotoSiEliminar,  a l’on click, posar el gameController, l’script SaveScript, la funció DeleteData.</p>
        <p>En el Canvas > PanelEliminarBotoEliminar > BotoNoEliminar,  a l’on click, posar el gameController, l’script SaveScript, la funció Confirmar.</p>
        <p>Desactivar tots els panells.</p>
        <p></p>


      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter"> 
      <!-- ################################################################################################ -->
      <h6>GPS EN UNITY</h6>
      <nav class="sdb_holder">
        <ul>
          <li><a href="#C1">CREAR PROJECTE</a></li>
          <li><a href="#C2">JERARQUIA</a></li>
          <li><a href="#C3">POSAR SCRIPTS</a></li>
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