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
        
      <h1>2D CHARACTER SELECTION </h1>
        
        <p>Obrir projecte 2D Unity i assignar nom al projecte.</p>
            <img src="../Imatges/Imatges2dchar/2dchar1.png">
            <img src="../Imatges/Imatges2dchar/2dchar2.png">
        
        <p>S’obrira l’Unity project.</p>
            <img src="../Imatges/Imatges2dchar/2dchar3.png">
        
        <p>Crearem les següents carpetes (icones,prefabs,Scripts)</p>
            <img src="../Imatges/Imatges2dchar/2dchar4.png">
    
        <p>Crearem un canvas amb imatge.
            <li> Click dret a la jerarquía-->UI-->Image</li>
                <img src="../Imatges/Imatges2dchar/2dchar5.png">
        </p>
        
        <p>Crearem un GameObject.
            <li>Click dret a la jerarquía-->Empty Object</li>
                <img src="../Imatges/Imatges2dchar/2dchar6.png">
        </p>
        
        <p>Rename per(Fons/background)</p>
            <img src="../Imatges/Imatges2dchar/2dchar7.png">
        
        <p>Seleccionem el GameObject anomenat (Fons/background)
            <li>Li afegim el component Video Player</li>
                <img src="../Imatges/Imatges2dchar/2dchar8.png">
        </p>
        
        <p>Anem a la carpeta de Tutorial Character 2D que ens hem descarregat al DRIVE.
            <li>Arrosseguem el video CHISPAS a la carpeta arrel de Unity (Assets)</li>
                <img src="../Imatges/Imatges2dchar/2dchar9.png">
        </p>
    
        <p>Afegim el video CHISPAS al GameObject (Fons/background)</p>
            <img src="../Imatges/Imatges2dchar/2dchar10.png">
    
        <p>Al GameObject (Fons/background) li afegim el component Audio Source</p>
            <img src="../Imatges/Imatges2dchar/2dchar11.png">
    
        <p>Anem a la carpeta de Tutorial Character 2D que ens hem descarregat al DRIVE.
            <li>Arrosseguem el audio Puños de hierro 7 a la carpeta arrel de Unity (Assets)</li>
                <img src="../Imatges/Imatges2dchar/2dchar12.png">
        </p>
    
        <p>Crearem la carpeta MEDIA a Assets/MEDIA</p>
            <img src="../Imatges/Imatges2dchar/2dchar13.png">
        
        <p>Fiquem dintre els dos arxius multimedia.</p>
            <img src="../Imatges/Imatges2dchar/2dchar14.png">
        
        <p>Anem al GameObject (Fons/background) 
            <li>A Video Player farem els següents canvis</li>
            <li>Render mode:Camera Far Plane.</li>
            <li>Camera: arroseguem la cámara de la jerarquía a camera video player.</li>
                <img src="../Imatges/Imatges2dchar/2dchar15.png">
        </p>
        
        <p>Eliminem Image de jerarquía</p>
            <img src="../Imatges/Imatges2dchar/2dchar16.png">
        
        <p>Anem a la carpeta de Tutorial Character 2D que ens hem descarregat al DRIVE.
            <li>Arrosseguem tots els Character Slots a Assets.</li>
                <img src="../Imatges/Imatges2dchar/2dchar17.png">
        </p>
    
        <p>Si tenim problemes amb les imatges, les seleccionem totes i  en Texture Type les posem com Sprite (2d and UI)com a 2D</p>
            <img src="../Imatges/Imatges2dchar/2dchar18.png">
    
        <p>Crearem un nou GameObject a la jerarquia.
            <li>Click dret a jerarquia-->Create Empty.</li>
                <img src="../Imatges/Imatges2dchar/2dchar19.png">
        </p>
        
        <p>Al nou GameObject, el renombrem per Slots.</p>
            <img src="../Imatges/Imatges2dchar/2dchar20.png">
        
        <p>Els arroseguem un per un i amb ordre a Slots,han de quedar com a fills de Slots.</p>
            <img src="../Imatges/Imatges2dchar/2dchar21.png">
        
        <p>Posició Slot 1</p>
            <img src="../Imatges/Imatges2dchar/2dchar22.png">
        <p>Posició Slot 2</p>
            <img src="../Imatges/Imatges2dchar/2dchar23.png">
        <p>Posició Slot 3</p>
            <img src="../Imatges/Imatges2dchar/2dchar24.png">
        <p>Posició Slot 4</p>
            <img src="../Imatges/Imatges2dchar/2dchar25.png">
        <p>Posició Slot 5</p>
            <img src="../Imatges/Imatges2dchar/2dchar26.png">
        <p>Posició Slot 6</p>
            <img src="../Imatges/Imatges2dchar/2dchar27.png">
        <p>Posició Slot 7</p>
            <img src="../Imatges/Imatges2dchar/2dchar28.png">
        <p>Posició Slot 8</p>
            <img src="../Imatges/Imatges2dchar/2dchar29.png">
        
        <p>Arrosseguem Slots a la carpeta prefabs per convertir-lo en prefab.</p>
            <img src="../Imatges/Imatges2dchar/2dchar30.png">
        
        <p>Crearem la carpeta SPLASH.</p>
            <img src="../Imatges/Imatges2dchar/2dchar31.png">
        
        <p>Afegim un Button com a fill de Canvas.</p>
            <img src="../Imatges/Imatges2dchar/2dchar32.png">

        <p>Copiem i enganxem el botó 8 vegades i eliminem els fills de Button → ”text”</p>
            <img src="../Imatges/Imatges2dchar/2dchar33.png">
        
        <p>Resultat</p>
            <img src="../Imatges/Imatges2dchar/2dchar34.png">

        <p>Crearem un Script (LoadScene):</p>
            <img src="../Imatges/Imatges2dchar/2dchar35.png">
        
        <p>Script codi:</p>
            <img src="../Imatges/Imatges2dchar/2dchar36.png">
        
        <p>Seleccionem primer tots els botons.
            <li>Assignem l’Script LoadScene.</li>
                <img src="../Imatges/Imatges2dchar/2dchar37.png">
        </p>
        
        <p>Ha de quedar així.</p>
            <img src="../Imatges/Imatges2dchar/2dchar38.png">
        
        <p>Anirem a la carpeta Scenes i crearem la carpeta Character Scene,també  crearem 8 Scenes.</p>
            <img src="../Imatges/Imatges2dchar/2dchar39.png">
        
        <p>Arrosseguem les 8 Escenes a la carpeta nova</p>
            <img src="../Imatges/Imatges2dchar/2dchar40.png">
        
        <p>Als Buttons, començarem a assignar les Scenes.</p>
        <p>Al primer botó:
            <li>Arrosseguem el botó que tenim actualment seleccionat a la jerarquia a sota de Runtime Only.</li>
            <li>Al costat dret de Runtime Only, Seleccionem Load Scene-->Change Scene</li>
            <li>Asignar el número d’escena.(Preferible fer les escenes per ordre, del 1 al 8).</li>
                <img src="../Imatges/Imatges2dchar/2dchar41.png">
        </p>
        
        <p>Botó 2</p>
            <img src="../Imatges/Imatges2dchar/2dchar42.png">
        <p>Botó 8</p>
            <img src="../Imatges/Imatges2dchar/2dchar43.png">
        
        <p>Mourem totes les Escenes a la jerarquia:</p>
            <img src="../Imatges/Imatges2dchar/2dchar44.png">
        
        <p>Anem a File → Build Settings → Add Open Scenes:</p>
            <img src="../Imatges/Imatges2dchar/2dchar45.png">
            <img src="../Imatges/Imatges2dchar/2dchar46.png">
        
        <p>Eliminem totes les escenes afegides menys Sample Scene.</p>
            <img src="../Imatges/Imatges2dchar/2dchar47.png">
        
        <p>Guardem l’escena.</p>
            <img src="../Imatges/Imatges2dchar/2dchar48.png">
        
        <p>A la carpeta SPLASH crearem la carpeta SPLASHPJ.</p>
            <img src="../Imatges/Imatges2dchar/2dchar49.png">
        
        <p>Arrosseguem totes les imatges a SlashPJ.
            <li>Crearem la carpeta SplashTXT.</li>
                <img src="../Imatges/Imatges2dchar/2dchar50.png">
        </p>
        
        <p>A la carpeta que hem descarregat del Drive, arrossegarem tots els SplashText, a la carpeta de Unity SplashTXT.</p>
            <img src="../Imatges/Imatges2dchar/2dchar51.png">
        
        <p>Arrosseguem per ordre els textos pertinents, és a dir:
            <li>1 fill de Snake</li>
            <li>2 fill de Armor king</li>
            <li>3 fill de Panda</li>
            <li>4 fill de Vasiily</li>
            <li>5 fill de Cani</li>
            <li>6 fill de Blood Bag</li>
            <li>7 fill de john cobra</li>
            <li>8 fill de torrente</li>
                <img src="../Imatges/Imatges2dchar/2dchar52.png">
        </p>
        
        <p>A cada SplashTXT li posem Order in Layer 1.</p>
            <img src="../Imatges/Imatges2dchar/2dchar53.png">
        
        <p>Resultat:</p>
            <img src="../Imatges/Imatges2dchar/2dchar54.png">
        
        <p>Save Scene:</p>
            <img src="../Imatges/Imatges2dchar/2dchar55.png">
        
        <p>Crearem la carpeta Characters a Assets/Media</p>
            <img src="../Imatges/Imatges2dchar/2dchar56.png">
        
        <p>Arrosseguem tots els videos a la carpeta creada en Unity Characters a Assets/Media.</p>
            <img src="../Imatges/Imatges2dchar/2dchar57.png">
        
        <p>Arrosseguem totes les Escenes a la jerarquia un altre vegada.</p>
            <img src="../Imatges/Imatges2dchar/2dchar58.png">
        
        <p>Tornem a Guardar la Sample Scene.
            <li>Eliminem la Sample Scene</li>
                <img src="../Imatges/Imatges2dchar/2dchar59.png">
        </p>
        
        <p>Seleccionem totes les Main Camera.</p>
            <img src="../Imatges/Imatges2dchar/2dchar60.png">
        
        <p>Agafem el component Video Player a la selecció múltiple que hem fet.</p>
             <img src="../Imatges/Imatges2dchar/2dchar61.png">
        
        <p>Per ordre, de l’1 al 8, asignarem els videos.
            <li>1 Snake</li>
                <img src="../Imatges/Imatges2dchar/2dchar62.png">
            <li>2 Armor king</li>
                <img src="../Imatges/Imatges2dchar/2dchar63.png">
            <li>3 Panda</li>
                <img src="../Imatges/Imatges2dchar/2dchar64.png">
            <li>4 Vasiily</li>
                <img src="../Imatges/Imatges2dchar/2dchar65.png">
            <li>5 Cani</li>
                <img src="../Imatges/Imatges2dchar/2dchar66.png">
            <li>6 Blood Bag</li>
                <img src="../Imatges/Imatges2dchar/2dchar67.png">
            <li>7 John cobra</li>
                <img src="../Imatges/Imatges2dchar/2dchar68.png">
            <li>8 Torrente</li>
                <img src="../Imatges/Imatges2dchar/2dchar69.png">
        </p>
        
        <p>Guardem totes les Scenes.</p>
            <img src="../Imatges/Imatges2dchar/2dchar70.png">
        
        <p>Afegim la SampleScene un altre vegada a la jerarquia.</p>
            <img src="../Imatges/Imatges2dchar/2dchar71.png">
        
        <p>Eliminem totes les Scenes del 1 al 8.</p>
            <img src="../Imatges/Imatges2dchar/2dchar72.png">
        
        <p>Si els vídeos surten del 4 al 8 en un ordre incorrecte hem de arreglar el següent:
            <li>botó 8 carrega la escena 5</li>
            <li>botó 7 carrega la escena 6</li>
            <li>botó 6 carrega la escena 7</li>
            <li>botó 5 carrega la escena 8</li>
                <img src="../Imatges/Imatges2dchar/2dchar73.png">
        </p>
        
        <p>Guardem la Scenes:</p>
            <img src="../Imatges/Imatges2dchar/2dchar74.png">
        
        <p>PLAY</p>
            <img src="../Imatges/Imatges2dchar/2dchar75.png">
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