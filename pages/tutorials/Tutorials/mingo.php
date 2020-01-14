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
    <h1>Tutorial Game Kit 2D </h1>
    <h2>Descarregar Game Kit 2D</h2>
        
    <p>Per a descarregar el Kit hauràs d’obrir la finestra Asset Store a Unity i trobar-lo.</p>
        <img src="../Imatges/ImatgesMingo/gamekit.png">
        
    <p>Un cop descarregat, s’haura d’importar al projecte.</p>
        <img src="../Imatges/ImatgesMingo/gamekit2.png">
    <p></p>
 
        
    <!-- ################################################################################################ -->
    <h1 id = "C1"> Crear una nova Scene (Escena) </h1>
        
      <p>El projecte ens permet crear una nova escena per defecte automàticament. Aquesta Escena conte la Ellen (el nostre personatge), una petita plataforma, la Health UI (IU de salut) i tot el que es necessita per moure’s i atacar. </p>
      
        <p>Anem a crear una nova Scene (Escena): 
          <li>-En el menú, a la part superior, fes un clic a Kit Tools (Eines del kit). </li>
          <li>-Escull Create New Scene (Crear una nova Escena). </li>
        </p>  
            <img src="../Imatges/ImatgesMingo/gamekit3.png">
        
        <p>- S’obrirà una nova finestra.</p>
            <img src="../Imatges/ImatgesMingo/gamekit4.png">
        
        <p>
            <li>- Al camp buit New Scene Name (Nom de la nova Escena), escriu el nom que vols posar-li a la teva nova Escena (NovaScene); </li>
            <li>- Fes clic a Create (Crear). </li>
            <p>Unity crea una nova Escena a l’arrel del projecte i afegeix l’Escena a les Build Settings (Configuracions de generació) per tu. </p>
            <img src="../Imatges/ImatgesMingo/gamekit5.png">
        <p>Unity també obre la nova Escena a l’Editor, d’aquesta manera podrás començar a treballar en ella. </p>
            <img src="../Imatges/ImatgesMingo/gamekit6.png">
        <p></p>
  
        
     <!-- ################################################################################################ -->
     <h1 id = "C2"> Pintar un nivell  </h1>
        
        <p>El 2D GameKit utilitza l’eina Tilemap (Mapa de mosaics), la qual està disenyada per ajudar-te a pintar un nivell de manera ràpida y fàcil. El Kit te tot el que necessites ja establert, així que podras començar inmediatament. </p>
        <p>Comencem a dissenyar un nivell: 
            <li>- A la barra de menús, ves a Window > 2D > TilePalette (Finestra > 2D > Paleta de mosaics). </li>
        </p>
            <img src="../Imatges/ImatgesMingo/gamekit7.png">
        <p>La finestra de Tile Palette (Paleta de mosaics) es mostra així: </p>
            <img src="../Imatges/ImatgesMingo/gamekit8.png">
        <p>Hem creat dos Tile Palettes (Paletes de mosaics) que et permeten pintar nivells. Aquests mosaics utilitzen els sistemes de Scriptable Tile (Comandos seqüencials de mosaics) del Tilemap (Mapa de mosaics) de Unity. Escullen l’sprite (bloc d’objectes móvils) correcte automáticament per una plataforma. </p>
        <p>Tenim dos estils d’sprites: Les roques amb gespa i les estructures extraterrestres. 
            Necessitem assegurar-nos de que el conjunt de mosaics correcte estigui escollit a la Tile Palette:
            <li>- Fes clic al Tile Palette Menu (Menú de la paleta de mosaics). </li>
            <li>- Selecciona el Tileset_Gamekit (Conjunt mosaics_Kit de jocs). </li>
            <li>- Escull el tipus de mosaic que mes t’agradi pel teu nivell. </li>
        </p> 
            <img src="../Imatges/ImatgesMingo/gamekit9.png">
        
        <p>Ara pintem alguns mosaics a l’escena per crear un nivell: 
            <li>- Fes clic en un mosaic a la Tile Palette per seleccionar-lo; </li>
            <li>- Navega a l’Scene View (Vista Escena); </li>
            <li>- Fes un clic i arrossega el cursor per dibuixar el teu nivell. </li>
            Si comets un error pots mantenir polsat Shift i fer clic o arrossegar el cursor per borrar mosaics. 
        </p>
            <img src="../Imatges/ImatgesMingo/gamekit10.png">
        <p></p>
        
     <!-- ################################################################################################ -->
     <h1 id = "C3"> Provar el nivell  </h1>
        
        <p>Com que heu creat un nivell, és hora de provar-lo.</p>
            <img src="../Imatges/ImatgesMingo/gamekit11.png">
        <p>- Prem Play (Jugar) a la part superior de l'editor. </p>
        <p> Els controls d'Ellen (el nostre personatge del jugador) són els següents: </p>
            <img src="../Imatges/ImatgesMingo/gamekit12.png">
        <p>S’ha inclòs un menú per eliminar errors. Prem F12 al teclat per a mostrar l'opció d'activar o desactivar cadascuna de les armes d ‘Ellen a la vista del joc. </p>
            <img src="../Imatges/ImatgesMingo/gamekit13.png">
        <p></p>
   
        
     <!-- ################################################################################################ -->
    <h1 id = "C4"> Afegir una plataforma mòbil </h1>

        <p>Abans de començar a manipular GameObjects (Objectes de joc) en l’Scene View (Vista Escena), assegura't que no sigui en el mode de pintar. Per fer-ho, tanqueu la Tile Palette (Paleta de mosaics) o seleccioneu la Moving Tool (Eina de desplaçament) a la part esquerra de la barra d’eines de l’editor (també podeu seleccionar l'eina de desplaçament -Moving Tool- prement W al teclat).</p>
            <img src="../Imatges/ImatgesMingo/gamekit14.png">
        <p>Ara anem a afegir una plataforma mòbil al nostre nivell: </p>
            <img src="../Imatges/ImatgesMingo/gamekit15.png">
        <p></p>
        <li>- Navega a la Project Window (Finestra del projecte). </li>  
        <li>- Ves a  Prefabs > Interactables (Prefabricats > Interactuables); </li>
        <li>- Feu clic esquerre i arrossegueu la Moving Tool (Eina de desplaçament) a l’Scene View (Vista Escena). </li>
        <li>- Assegura’t que la Moving Platform (Plataforma mòbil) està seleccionada en Hierarchy (Jerarquia). </li>
        <li>- Prem W per utilitzar la Moving Tool (Eina de desplaçament). </li>
        <p>Utilitza la Moving Tool (Eina de desplaçament) a la Moving Platform (Plataforma mòbil) per posar-lo on vulguis en el teu nivell.</p> 
        <p>Quan seleccionis el Moving Platform (Plataforma mòbil),una línia de punts vermella apareixerà amb un Gizmo des de Moving Tool (Eina de desplaçament) al final (la fletxa vermella). Això indica el camí que prendrà la plataforma quan es reprodueix el joc. </p>
            <img src="../Imatges/ImatgesMingo/gamekit16.png">
        <p>Utilitzar el gizmo de la Moving Tool (Eina de desplaçament) al final de la línia de punts vermells per indicar el camí que t’agradaria que prengui la plataforma. </p>
            <img src="../Imatges/ImatgesMingo/gamekit17.png">
        <p>Per previsualitzar la ruta que tindrà la plataforma mòbil (Moving Platform), seleccioneu Moving Platform i segueix aquests passos: 
            <li>- Ves a l'Inspector. </li>
            <li>- Al component Moving Platform, cerqueu el lliscador Preview Position Slider (posició de previsualització). </li>
            <li>- Feu clic i arrossegueu per veure on anirà la Moving Platform. </li>
        <p>Ara farem que el camí que pren la plataforma és quelcom més complex, fent-lo prendre una trajectòria en forma de quadrat. Això és possible quan s’afegeixen nodes. </p>
        <p>Els nodes són punts de navegació addicionals per al component de la Moving Platform. </p>
            <img src="../Imatges/ImatgesMingo/gamekit18.png">
        <p>
            <li>- A l'inspector localitza el component Moving Platform (Plataforma mòbil). </li>
            <li>- Feu clic a Add Node (Afegeix un node) dues vegades. </li>
        </p>
        <p>Això afegeix dues línies vermelles de punts i Gizmos. Utilitzeu els Gizmos per fer un quadrat amb els Nodes addicionals que has creat. </p>
        <p>T'adonaràs que no hi ha cap camí des de l'últim node de tornada al principi de la trajectòria. Si pressionem jugar ara, la plataforma s'aturarà a l'últim punt, retrocedirà al principi i començarà de nou. </p>
        <p>Pots canviar la configuració de la plataforma per fer que formi un bucle: </p>
            <li>- En el component Moving Platform localitza l'opció de Looping (Bucle). </li>
            <li>- Feu clic al menú desplegable que diu BACK_FORTH (Anada i tornada). </li>
            <li>- Selecciona LOOP (Bucle).</li> 
        <p></p>
            <img src="../Imatges/ImatgesMingo/gamekit19.png">
            <img src="../Imatges/ImatgesMingo/gamekit20.png">
        <p>Això forma un circuit amb els gizmos i la plataforma pren aquest camí. </p>
        <p>Nota: El control lliscant de posició de previsualització no completa el circuit, de manera que s’haurà de prémer reproduir per veure'l en acció. </p>
        <p>Cada component que proporciona el Kit té moltes opcions per personalitzar la forma en què funcionen. Per obtenir més informació sobre què fa cada opció en el component MovingPlatform, dona un cop d'ull a la Documentació sobre Components i cerca la secció MovingPlatform (Plataforma mòbil).</p>
        <p></p>
    
        
    <!-- ################################################################################################ -->
    <h1 id = "C5"> Obrir una porta amb Events (Esdeveniments) </h1>
        
        <p>En el Game Kit 2D, Events (Esdeveniments) ens permet crear accions. Farem servir els Events per aconseguir que s’obri una porta quan el jugador trepitja un botó de pressió. </p>
        <p>Comencem afegint una Porta (Door): </p>
            <li>- A la  Project Window (Finestra del projecte) ves a Prefabs > Interactables;  </li>  
            <li>- Localitza la Prefab Door (Porta prefabricada) i arrossega'l a l’Scene View (Vista d'escena). Posa'l en algun lloc on obstrueixi el camí del jugador. </li>
        <p></p>
                    <img src="../Imatges/ImatgesMingo/gamekit21.png">
        <p>Ara anem a afegir un botó de pressió a l'Escena: </p>
            <li>- A la finestra del Projecte, ves a Prefabs > Interactables i localitza el PressurePad (Botó de pressió). </li>
            <li>- Arrossega’l cap a terra davant de la Door (Porta). </li>
        <p>Nota: Si el botó de pressió sembla obstruir el pas del jugador en comptes de permetre-li trepitjar-lo, abaixa’l una mica. El jugador podria quedar atrapat contra el colisionador.</p>
                    <img src="../Imatges/ImatgesMingo/gamekit22.png">
        <p>Alguns esdeveniments ja estan definits; per exemple, en trepitjar-lo, la Pressurepad reprodueix un so i s'encén. Ara anem a connectar la pressurepad amb la porta.   </p>
            <li>- A la finestra de Hierarchy (Jerarquia), selecciona PressurePad. </li>
            <li>- A l'inspector localitza el component de PressurePad. </li>
            <li>- A la llista On Pressed (Al prémer), fes clic al + a la part inferior per afegir un esdeveniment nou. </li>
        <p></p>
                    <img src="../Imatges/ImatgesMingo/gamekit23.png">
        <p>
            <li>- Arrossega Door GameObject des de la finestra de Hierarchy (Jerarquia) fins al camp que diu None(Object) (cap objecte) a l'esdeveniment. </li>
            <li>- Al menú desplegable No Function (sense funció), localitza Animator > Play (string) (Animador > Reprodueix (cadena)). </li>
            <li>- Al camp de text buit que apareix al menú desplegable, introduïu el text DoorOpening (Porta Obrint-se). </li>
        </p>
                    <img src="../Imatges/ImatgesMingo/gamekit24.png">
        <p></p>
            <li>- Prem Play (Reprodueix) i utilitza les tecles de moviment (A i D) per correr sobre el PressurePad. La porta s'ha d'obrir. </li>
        <p>Tots els Animation Clips (Clips d'animació) es guarden a la Project Window (Finestra del projecte) a Art > Animations > AnimationClips. Per reproduir altres animacions en un esdeveniment, has d'assegurar-te que el nom (String/cadena) correspon exactament al de l’Animation Clip (Clip d'animació). </p>
                    <img src="../Imatges/ImatgesMingo/gamekit25.png">
        <p>Si vols disparar a un interruptor amb la teva pistola, en lloc de posar un botó de pressió, pots fer-ho utilitzant les mateixes instruccions, però en lloc de seleccionar el botó, selecciona la ResusableSwitch (Interruptor reutilitzable). Anima't i prova-ho! </p>
        <p></p>
        
    <!-- ################################################################################################ -->
    <h1 id = "C6"> Enemics </h1>
        
        <p>Tenim dos enemics complets en el Kit: Chomper i Spitter. Pots trobar-los a la finestra del Projecte a Prefabs > Enemies (Prefabricats > Enemics)</p>
                    <img src="../Imatges/ImatgesMingo/gamekit26.png">
        <p>Tots dos són controlats pel component Enemy Behavior (Comportament de l’enemic) a l'inspector. Pots utilitzar aquest component per ajustar propietats com la velocitat de l’enemic, camp de visió (FOV), salut, i més. Cada enemic té el mateix Component, només que es configuren d'una manera lleugerament diferent. Val la pena esmentar que pots establir valors específics o pots fer clic i arrossegar a la dreta o a l'esquerra a les propietats del Component per passar a través de diversos valors. </p>
        <p>Intenta afegir un Chomper a l’escena. Juga amb la configuració per ajustar la velocitat i el camp de visió (FOV). No oblidis que quan és en el mode Play (Jugar), pots prémer F12 per assegurar-se que les armes d'Ellen estan habilitades i s’ataca amb O o K.   </p>
                    <img src="../Imatges/ImatgesMingo/gamekit27.png">
        <p>A l'escena de dalt, un Chomper està seleccionat. Hem ajustat la View Fov (Visió CDV) i la View Direction (Direcció de visió), de manera que no veurà l'Ellen fins que es doni la volta. </p>
                    <img src="../Imatges/ImatgesMingo/gamekit28.png">
        <p></p>
        <p></p>

        
    <!-- ################################################################################################ -->
    <h1 id = "C7"> Causar danys amb els objectes  </h1>
        
        <p>En aquesta secció explorarem el sistema per causar dany. Per fer això seguirem els passos per llançar una caixa a un Spitter per matar-lo. Pobre! </p>
        <p>Comencem dibuixant un nivell en què l’Ellen és a la part superior i l'Spitter en una plataforma a sota, així: </p>
            <li>- Ves a Prefabs > Enemies  i arrossega l’Spitter a l’Scene View (Vista d'escena). </li>
            <li>- Posa'l al fons del seu nivell, prop de la paret del penya-segat. </li>
        <p></p>
                    <img src="../Imatges/ImatgesMingo/gamekit29.png">
        <p>
            <li>- Amb l’Spitter seleccionat, troba l’Enemy Behaviour Script (Guió de la conducta enemiga).  </li> 
            <li>- Redueix el valor de la View Distance (Distància de visió) de manera que l'Spitter no et dispari immediatament mentre estàs provant aquest mode de joc. </li>
        </p>
                    <img src="../Imatges/ImatgesMingo/gamekit30.png">
        <p></p>
            <li>- A la Project Window (Finestra del Projecte) anar a Prefabs > Interactables, fer clic i arrossegar el Prefabicat PushableBox (Caixa que s’empeny) a l’Scene View. </li>
        <p></p>
                    <img src="../Imatges/ImatgesMingo/gamekit31.png">
        <p>
            <li>- Selecciona PushableBox a la finestra Hierarchy (Jerarquia), i a l'Inspector fes clic a Add Component (Afegir component). </li>
            <li>- Al Search Box (Caixa de cerca), introdueix Damage (Dany). </li>
            <li>- Fes clic a Damager (Causar dany) per afegir-lo PushableBox. </li>
        </p>
        <p>El component Damager li diu a qualsevol GameObject (Objecte del joc) que té un Damageable Component  -com un Spitter o un Chomper- que li farà mal.</p> 
        <p>El component Damager està representat per una caixa de col·lisió verda. Aquesta és l'àrea que causa dany. Ara no està cobrint PushableBox; de manera que si empenyem la caixa al caure sobre l’Spitter, no li causarà cap mal. </p>
                    <img src="../Imatges/ImatgesMingo/gamekit32.png">
        <p>Traslladem aquesta caixa per tal de tenir la mateixa mida i en la mateixa posició que la PushableBox. Hi ha dues maneres d'aconseguir això: 
            <li>- Selecciona i arrossega els punts verds als costats de la caixa de col·lisió verda de manera que estiguin sobre PushableBox. </li>  
        </p>
                    <img src="../Imatges/ImatgesMingo/gamekit33.png">
        <p>
            <li>- A l'Inspector localitza el component Damager. </li>
            <li>- Ajusta l’Offset i el Size (Compensació i mida) per ubicar i ajustar la caixa de col·lisió. La manera més fàcil de fer-ho és fer clic a les paraules i arrossegar a l'esquerra o a la dreta per passar per diversos valors i trobar el que més convingui. </li>
        </p>
                    <img src="../Imatges/ImatgesMingo/gamekit34.png">
        <p>Finalment, necessitem assegurar-nos que es causi dany al GameObject correcte. Necessitem separar objectes en Layers (Capes) a l'Editor de manera que es puguin trobar i separar fàcilment: 
            <li>- Selecciona PushableBox. </li>
            <li>- A l’Inspector, localitza el component Damager.</li> 
            <li>- En el menú desplegable Hittable Layers, seleccioneu l’Enemy Layer (Capa enemiga).   </li>
        </p>
                    <img src="../Imatges/ImatgesMingo/gamekit35.png">
        <p>PushableBox ara causarà danys a qualsevol cosa que estigui en la Enemy Layer, com el nostre Spitter. 
            Intenta fer mal a altres enemics i fins i tot a l’Ellen mateixa! 
        </p>
                    <img src="../Imatges/ImatgesMingo/gamekit36.png">
                    <img src="../Imatges/ImatgesMingo/gamekit36b.png">
        <p></p>

        
    <!-- ################################################################################################ -->
    <h1 id = "C8"> Decorar </h1>
        
        <p>El kit inclou sprites (Blocs d’objectes) decoratius, que s’ha utilitzat en el joc de mostra "Explorer" inclòs en el kit. </p>
        <p>Suggerencia: Si alguna cosa et crida l’atenció dins del joc de mostra, pots buscar el nom i localitzar-lo a la finestra de Projecte. </p>
        <p>Per assegurar-te que el teu nivell és digne d'Instragram, cerca les decoracions a la Finestra del Projecte a Art > Sprites > Environment (Entorn). Molts s'emmagatzemen en subcarpetes, així que no t’oblidis de desplegar els menús senyalats per les petites fletxes i veure quins altres sprites estan en aquesta categoria. </p>
                    <img src="../Imatges/ImatgesMingo/gamekit37.png">
        <p></p>
        
        
        
    <!-- ################################################################################################ -->
    <h1 id = "C9"> Teletransport del jugador </h1>
        
        <p>És possible teletransportar un jugador d'una àrea en una Scene (Escena) a una altra, o entre diferents nivells.</p>
    
    <h2 id = "C91"> Teletransport en la mateixa Scene (Escena) </h2>
        
        <p>Per teletransportar el jugador en la mateixa Scene necessitem establir una transició. Per això farem dos Prefabricats: 
            <li>- TransitionStart (Inici de Transició).</li> 
            <li>- TransitionEnd (Fi de Transició). </li>
        </p>
        <p>Primer cal fixar el punt de partida de la transició: 
            <li>- A la finestra del Projecte ves a Prefabs > SceneControl (Prefabricats > Control d'escena). </li>
            <li>- Trobar el Prefabricat TransitionStart. </li>
        </p>
                    <img src="../Imatges/ImatgesMingo/gamekit38.png">
        <p>
            <li>- Arrossegui el TransitionStart a la Scene View.  Posa'l en una posició on el jugador toqui el col·lisionador (la caixa verda) quan camini. En l'exemple anterior es posa a l'altre costat de la porta. </li>
        </p>
                    <img src="../Imatges/ImatgesMingo/gamekit39.png">
        <p>Per definir la destinació: 
            <li>- Arrossega un altre Prefabricat de TransitionStart de la carpeta SceneControl a la Scene View.</li>   
            <li>- A l'Inspector, canvieu el nom a TransitionEnd (Final de transició). </li>
        </p>
                    <img src="../Imatges/ImatgesMingo/gamekit40.png">
        <p>Ara anem a enllaçar els dos: 
            <li>- A la finestra de Hierarchy (Jerarquia) selecciona el GameObject TransitionStart. </li>
            <li>- A l'Inspector, cerqueu el component TransitionPoint (Punt de Transició). </li>
            <li>- Arrossegueu el GameObject Ellen des de la finestra de Hierarchy a l'espai  TransitioningGameObject del component del TransitionPoint. </li>
        </p>
                    <img src="../Imatges/ImatgesMingo/gamekit41.png">
        <p>
            <li>- Configura el Transition Type (Tipus de Transició) a SameScene (Mateixa escena). </li>  
                
        <p>Això assegura que l’Ellen és l'únic objecte teletransportat i que es teletransporta a la mateixa escena. </p>
        <p>Ara anem a configurar la destinació: 
            <li>- Arrossega  l'objecte de joc TransitionEnd al TransitionPoint.  </li>
            <li>- Configura l’espai Transition When (Passar quan) a On Trigger Enter (Activar-se a l’entrar). </li>
        </p>
        <p>On Trigger Enter significa que la transició només s'activa quan el jugador entra en el Col·lisionador i no quan es prem una clau. Si prefereixes Teletransportarte només quan el jugador prem la tecla E d'interacció, establir la transició Interact Pressed (Interacció polsada)</p>
                    <img src="../Imatges/ImatgesMingo/gamekit42.png">
        <p></p>
        
    <h2 id = "C92"> Teletransport a una altra Scene (Escena) </h2>
        
        <p>Per fer que la destinació del jugador sigui una altra Scene (Escena), necessitem dos prefabricats: 
            <li>- TransitionStart (Inici de Transició) és el mateix Prefabricat que s’ha utilitzat a l'apartat anterior; envia el jugador a la destinació. Conté un component TransitionPoint (Punt de Transició), el mateix que defineix totes les propietats, com per exemple, on comença la teletransportació i on la teletransportació hauria de enviar al jugador. Col·loca aquest Prefabricat allà on vols que comenci la transició. </li>
            <li>- Transition Destination (Destí de Transició) és un Prefabricat que "rep" al jugador. Conté un Component de Transition Destination. Col·loca aquest Prefabricat en una Scene diferent, on vols que la transició acabi. </li>
        </p>
        
    <h4>Configura TransitionDestination (Destí de Transició) </h4>
        
        <p>Configureu primer la destinació, d'aquesta manera tindreu tota la informació que necessitarem més endavant quan configureu el punt de partida. Per afegir una transició a una Scene, obre l’Scene de destí, navega a Project Window (Finestra de Projecte) i ves a Prefabs > SceneControl > TransitionDestination (Prefabricats > Control d'Escena > Destí de Transició). Posa-ho a la teva Scene, a l’ubicació que vols que el jugador utilitzi el teletransportador. </p>
        <p>El Prefabricat Transition Destination conté un component Scene Transition Destination (Destí de Transició d'Escena): </p>
                    <img src="../Imatges/ImatgesMingo/gamekit43.png">
        <p>
            <li>- En primer lloc, defineix la Destination Tag (Etiqueta de destí) amb una lletra. No importa quina lletra utilitzis mentre sigui l'únic component de Transition Destination  en l’Scene amb aquella lletra. </li>
            <li>- A continuació, s’ha d'indicar quin objecte de joc s’espera rebre, arrossega el Player’s Game Object (Objecte de Joc del Jugador), Ellen, des de la finestra de Hierarchy (Jerarquia) a l'espai de Transitioning Game Object (Objecte de Joc Transferible). </li>
            <li>- Finalment, assegura’t que Transition Destination està a la Configuració del teu Editor de Generació. Per fer això ves a File > Build Settings (Arxiu > Configuració de construcció) i fes clic a Add Open Scenes (Afegir Escenes Obertes). </li>
        </p>
        
    <h4>Configura TransitionStart (Inici de transició) </h4>
        
        <p>Aquestes configuracions són molt similars a la secció anterior, amb alguns canvis: </p>
                    <img src="../Imatges/ImatgesMingo/gamekit44.png">
        
        <p>
            <li>- Defineix el Transition Type (Tipus de Transició) a Different Level (Nivell diferent). </li>    
            <li>- Estableix el New Scene Name (Nom de l'Escena Nova).   </li>
            <li>- Defineix l'Etiqueta Transition Destination (Destí de Transició) a la lletra de la Destination Tag (Etiqueta de destí) que s’ha definit a la Transition Destination Component (Component de Destí de Transició). </li>
        </p>
        <p>Exemple: </p>
        <p>Anem a fer que el jugador es Teletransporti al primer nivell del joc. Al component d'Inici de Transició, canvia la configuració a la següent: 
            <li>- Estableix el Transition Type (Tipus de Transició) a Different Level (Nivell Diferent). </li>  
            <li>- Estableix el New Scene Name (Nom de l'Escena Nova) a Zone1; </li>
            <li>- Estableix el Transition Destination (Destí de Transició) a ‘A’. </li>
        </p>
                    <img src="../Imatges/ImatgesMingo/gamekit45.png">
        <p>Toca Play (Jugar) i camina fins on és la transició. Hauries de ser capaç d'arribar al començament de la Zona 1! </p>
        
        
 <!-- ################################################################################################ -->
    <h1 id = "C10"> Diverteix-te! </h1>
        
        <p>La majoria dels objectes del Kit interactuen amb els System Events (Esdeveniments del Sistema) que hem vist en la configuració del Pressure Pad (Plataforma de pressió). </p>
        <p>Explora les escenes existents (Zones 1 a 5) i mira com es configuren altres objectes per utilitzar esdeveniments i els mecanismes que els activen. 
            Diverteix-te dissenyant nivells per al teu joc! </p>
        
    <p></p>
    
       
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter"> 
      <!-- ################################################################################################ -->
      <h6>INDEX GAME KIT 2D</h6>
      <nav class="sdb_holder">
        <ul>
            <li><a href="#C1"> CREAR NOVA ESCENA </a></li>
            <li><a href="#C2"> PINTAR UN NIVELL </a></li>
            <li><a href="#C3"> PROVAR EL NIVELL </a></li>
            <li><a href="#C4"> AFEGIR PLATAFORMA MOBIL </a></li>
            <li><a href="#C5"> OBRIR PORTA AMB EVENTS </a></li>
            <li><a href="#C6"> ENEMICS </a></li>
            <li><a href="#C7"> CAUSAR DANY AMB OBJECTES </a></li>
            <li><a href="#C8"> DECORAR </a></li>
            <li><a href="#C9"> TELETRANSPORT DEL JUGADOR </a></li>
            <ul>
              <li><a href="#C91"> TELETRANSPORT EN LA MATEIXA SCENE </a></li>
              <li><a href="#C92"> TELETRANSPORT A UNA ALTRA SCENE </a></li>
            </ul>
            <li><a href="#C10"> DIVERTEIX-TE! </a></li>
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
    <div class="clear"></div>
  
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row6">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2020 All Rights Reserved - <a href="#">El Laboratori</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script> 
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>