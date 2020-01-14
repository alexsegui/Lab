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
    <h1>Nav Mesh Tutorial </h1>
        <p>Aprende a crear búsquedas de rutas de IA con los componentes de Unity NavMesh.</p>
        
    <h1 id = "C1"> FASE 1: BASICS </h1>
        
        <p>NUEVO PROYECTO DE UNITY EN 3D (UNITY 2018.4). </p>
            <img src="../Imatges/Imatgesnavmesh/nav1.png">
        
        <p>ASSETS QUE VAMOS A USAR</p>
	    <p>De la carpeta Assets necessitamos:
            <li>Exemple01 Basics</li>
            <li>NavMeshComponents</li>
            <li>Exemple01 Basics.unity</li>
        </p>
            <img src="../Imatges/Imatgesnavmesh/nav2.png">
        <p>Arrastramos a Unity estos Assets.</p>
        
        <p>Doble-Click a Exemple01 Basics.unity. </p>
            <img src="../Imatges/Imatgesnavmesh/nav3.png">
        
        <p>DEFINIR LA SUPERFICIE POR DONDE PODREMOS MOVERNOS
            <li>En Jerarquia creamos un empty object, cambiamos el nombre a Nav Mesh y le 	hacemos reset al Transform.</li>
                <img src="../Imatges/Imatgesnavmesh/nav4.png">
            <li>Movemos el Nav Mesh arriba del todo y vamos Add Component > Nav Mesh Surface.</li>
                <img src="../Imatges/Imatgesnavmesh/nav5.png">
            <li>Vamos a Nav Mesh Surface y simplemente damos click a Bake y se creara la superficie
	           donde podremos movernos.</li>
                <img src="../Imatges/Imatgesnavmesh/nav6.png">
            <li>Si os fijais bien el Nav Mesh considera a nuestro player como un obstaculo vamos a arreglarlo.</li>
                <img src="../Imatges/Imatgesnavmesh/nav7.png">
            <li>Seleccionamos el Player i vamos a Layer.</li>
                <img src="../Imatges/Imatgesnavmesh/nav8.png">
            <li>Le damos a add layer, creamos un layer de nombre Player y lo assignamos al Player.</li>
                <img src="../Imatges/Imatgesnavmesh/nav9.png">
                <img src="../Imatges/Imatgesnavmesh/nav10.png">
            <li>Volvemos a Nav Mesh > Nav Mesh Surface y donde pone Included Layers quitamos la 	que pone Player para acabar solo hay que darle otra vez a Bake.</li>
                <img src="../Imatges/Imatgesnavmesh/nav11.png">
                <img src="../Imatges/Imatgesnavmesh/nav12.png">
            <li>El Nav Mesh ya no considera al Player como un obstaculo.</li>
        </p>
        
        <p>Navigation 
            <li>En Nav Mesh > Nav Mesh Surface tenemos la opcion Agent Type, si hacemos click sobre Humanoid nos saldra la Open Agent Setting hacemos click aquí.</li>
                <img src="../Imatges/Imatgesnavmesh/nav13.png">
            <li>Nos saldra la ventana Navigation des de la que podremos modificar el NavMesh.</li>
                <img src="../Imatges/Imatgesnavmesh/nav14.png">
        </p>
        
        <p>Muros 
            <li>Los muros no deberian ser una superficie por la que puedas moverte vamos a cambiar el Nav Mesh para que tampoco tenga en cuenta los muros.</li>
            <li>Vamos a Jerarquia seleccionamos Level > Walls > Add Component > Nav Mesh Modifier.</li>
                <img src="../Imatges/Imatgesnavmesh/nav15.png">
            <li>Seleccionamos la opcion Override Area i nos saldra la opcion Area Type, aquí cambiamos Walkable por Not Walkable.</li>
                <img src="../Imatges/Imatgesnavmesh/nav16.png">
            <li>Resultado si le damos a Bake veremos como la superficie de los muros ya no estan en azul.</li>
                <img src="../Imatges/Imatgesnavmesh/nav17.png">
        </p>
        
        <p>Moviendo al Jugador
            <li>Añadimos la componente Nav Mesh Agent al Player.</li>
                <img src="../Imatges/Imatgesnavmesh/nav18.png">
            <li>Creamos el Script que controlara al Player le podemos decir PlayerController, tambe podem crear una carpeta un guardar tots els Scripts y le damos doble-click.</li>
                <img src="../Imatges/Imatgesnavmesh/nav19.png">
            <li>Per començar eliminem Start() y en Update() miraremos cuando el jugador pulse el boton izquierdo del raton fent servir la classe Input y la funcio GetMousseButtonDown(0).</li>
                <img src="../Imatges/Imatgesnavmesh/nav20.png">
            <li>Queremos disparar un rayo a la posicion donde este el raton para necessitamos saber la posicion actual del raton. Input.moussePosition es la posicion actual del raton en la pantalla.</li>
                <img src="../Imatges/Imatgesnavmesh/nav21.png">
            <li>Necessitamos una funcion para convertir la posicion en un rayo que dispararemos. La Camara de Unity tiene la funcion que necessitamos por eso vamos arriba del Update y creamos una referencia a la Camara:</li>
                <img src="../Imatges/Imatgesnavmesh/nav22.png">
            <li>Ahora podemos usar la función ScreenPointToRay() la traemos de la siguiente manera:</li>
                <img src="../Imatges/Imatgesnavmesh/nav23.png">
            <li>Guardamos toda la linea un una variable de tipo Ray.</li>
                <img src="../Imatges/Imatgesnavmesh/nav24.png">
            <li>Queremos una variable que guarde informacion sobre la posicion donde dispararemos. Para eso vamos a utilizar una variable RaycastHit.</li>
                <img src="../Imatges/Imatgesnavmesh/nav25.png">
            <li>Para disparar el rayo usaremos Physics.raycast(ray “nuestro rayo”, out hit donde guaramos la informacion:</li>
                <img src="../Imatges/Imatgesnavmesh/nav26.png">
            <li>Creamos una sentencia if y usamos el Physics.Raycast como condición. Dentro del if es donde ira el codigo para mover el agente:</li>
                <img src="../Imatges/Imatgesnavmesh/nav27.png">
            <li>IMPORTANTE: Siempre que trabajemos con Nav Mesh tenemos que utilizar UnityEngine.AI. Tambien podemos eliminar System.Collections no los vamos a utilizar:</li>
                <img src="../Imatges/Imatgesnavmesh/nav28.png">
            <li>Para mover el Agente necessitamos una referencia al NavMeshAgent en el script:</li>
                <img src="../Imatges/Imatgesnavmesh/nav29.png">
            <li>Ahora en el if donde vamos a mover el agente usaremos la funcion SetDestination():</li>
                <img src="../Imatges/Imatgesnavmesh/nav30.png">
        </p>
        
        <p>Vamos a Unity
            <li>Si vamos a PlayerController ahora hay dos variables Cam y Agent. A Cam le arrastramos MainCamera. A Agent le arrastramos el NavMeshAgent. Ya podemos darle Play y si hacemos click en un punto del mapa el Player deberia buscar la ruta mas rapida hacia ese punto.</li>
                <img src="../Imatges/Imatgesnavmesh/nav31.png">
            <li>Podemos cambiar la velocidad de movimiento, de giro, la acceleracion y el stop:</li>
                <img src="../Imatges/Imatgesnavmesh/nav32.png">
        </p>
        <p></p>
        
    <h1 id = "C2"> FASE 2: MAKING IT DYNAMIC </h1>
  
        <p>ASSETS QUE NECESSITAMOS
            <li>Arrastramos a unity los siguientes objetos: la carpeta Example2 – Obstacle y Example2 – Obstacle.unity.</li>
                <img src="../Imatges/Imatgesnavmesh/nav33.png">
            <li>Vamos a Assets Abrimos el Example2 – Obstacle.unity.</li>
                <img src="../Imatges/Imatgesnavmesh/nav34.png">
            <li>Vamos a Jerarquia > Nav Mesh y en el inspector le damos a Bake.</li>
                <img src="../Imatges/Imatgesnavmesh/nav35.png">
            <li>Vamos al Player y le añadimos el script PlayerController hay que dejarlo igual que antes.</li>
                <img src="../Imatges/Imatgesnavmesh/nav36.png">
        </p>
        
        <p>OBSTACULOS
            <li>Vamos a Jerarquia, creamos un cubo (Click Derecho > 3D Object > Cube) y hacemos reset al transform.</li>
                <img src="../Imatges/Imatgesnavmesh/nav37.png">
            <li>Cambiamos la Position Y del Cubo a 1 y lo escalamos X=2 Y=1 Z=2.</li>
                <img src="../Imatges/Imatgesnavmesh/nav38.png">
                <img src="../Imatges/Imatgesnavmesh/nav39.png">
            <li>En la Carpeta Example02 tenemos preparados unos materiales, cogemos el que se llama Obstacle y lo ponemos al cubo. Cambia el nombre del Cubo a Obstaculo.</li>
                <img src="../Imatges/Imatgesnavmesh/nav40.png">
                <img src="../Imatges/Imatgesnavmesh/nav41.png">
                <img src="../Imatges/Imatgesnavmesh/nav42.png">
            <li>Ahora el Nav Mesh ignora nuestro obstaculo el siguiente paso sera hacer que nuestro Nav Mesh se actualize durante la partida.</li>
        </p>
        
        <p>NAV MESH OBSTACLE
            <li>Vamos al Obstacle y le añadiremos la componente NavMeshObstacle.</li>
                <img src="../Imatges/Imatgesnavmesh/nav43.png">
            <li>Hay 2 formas de crear obstaculos: La primera consiste en utilizar el Obstacle Avoidance del NavMeshAgent que hemos puesto al Player.</li>
                <img src="../Imatges/Imatgesnavmesh/nav44.png">
            <li>La otra manera es utilizando el Carve de la componente Nav Mesh Obstacle.</li>
                <img src="../Imatges/Imatgesnavmesh/nav45.png">
            <li>La diferencia entre las dos maneras es que el segundo afecta al Nav Mesh y el primero no. Estos metodos son eficientes cuando tenemos pocos objetos.</li>
        </p>
        
        <p>Nivel Autogenerado
            <li>Vamos ha hacer que el Nivel pueda generarse solo durante la partida. Para ello necessitamos La Carpeta Example03 – Runtime y el .unity de mismo nombre.</li>
                <img src="../Imatges/Imatgesnavmesh/nav46.png">
            <li>Abrimos el Example03 – Runtime y veremos que solo tiene el ground, Nav Mesh y un LevelGenerator.</li>
                <img src="../Imatges/Imatgesnavmesh/nav47.png">
            <li>Si le damos a play el LevelGenerator creara un nivel aleatorio.</li>
                <img src="../Imatges/Imatgesnavmesh/nav48.png">
            <li>Esta imagen es solo un ejemplo el nivel sera aleatorio.</li>
        </p>
        
        <p>Vamos ha hacer que el Nav Mesh se genere cada vez que le damos a play. Abrimos el script LevelGenerator y veremos que hay una funcion que se
            encarga de generar aleatoriamente el nivel.</p>
	
	    <p>Necessitamos actualizar el Nav Mesh cada vez que generamos el nivel para ello en el Start() debajo de la funcion GenerateLevel() es donde lo haremos.
            <li>Primero using UnityEngine.AI, Segundo una variable que hara referencia a nuestro Nav Mesh.</li>
                <img src="../Imatges/Imatgesnavmesh/nav49.png">
            <li>Ahora vamos al Start() y solo tenemos que hacer esto:</li>
                <img src="../Imatges/Imatgesnavmesh/nav50.png">
            <li>Volvemos a Unity si vamos al script LevelGenerator en Surface vamos a ponerle el objeto Nav Mesh. Ademas vamos a Nav Mesh y le damos a Bake.</li>
                <img src="../Imatges/Imatgesnavmesh/nav51.png">
                <img src="../Imatges/Imatgesnavmesh/nav52.png">
                <img src="../Imatges/Imatgesnavmesh/nav53.png">
        </p>
        <p></p>
        
    <h1 id = "C3"> FASE 3: Animacion de Personaje y Conectar dos Nav Mesh </h1>
    
       <p>Para empezar vamos a necessitar Example04 – Links y  Example04 – Links.unity los arrastramos a Assets.
            <li>Abrimos Example04 – Links.unity.</li>
                <img src="../Imatges/Imatgesnavmesh/nav54.png">
            <li>En el Player le volvemos a Assignar el PlayerController y le ponemos la camera y el Nav Mesh Agent.</li>
                <img src="../Imatges/Imatgesnavmesh/nav55.png">
            <li>Vamos a Nav Mesh y hacemos click en Bake se creara el Nav Mesh en las dos superficies pero estan separadas en el siguiente paso vamos a crear un link para conectar-las.</li>
        </p>
        
        <p>Conectar dos Nav Mesh
            <li>Creamos un empty Object, reset al transform y lo llamamos Link.</li>
                <img src="../Imatges/Imatgesnavmesh/nav56.png">
            <li>A Link le añadiremos la componente NavMeshLink y veremos como se crea un dibujo de 2 flechas que apuntan en direcciones opuestas.</li>
                <img src="../Imatges/Imatgesnavmesh/nav57.png">
            <li>Rotamos el objeto para que apunte a las dos superficies y lo subimos hasta que aparezcan los circulos al final de cada flecha.</li>
                <img src="../Imatges/Imatgesnavmesh/nav58.png">
            <li>Eso seria todo ahora si le damos play el player deberia poder cruzar al otro lado y al reves siempre pasara por donde esten los dos circulos.</li>
            <li>Como extra si vamos a Nav Mesh Link en Unity podremos ver la opcion Width o Anchura. Si ponemos la Anchura del mismo tamaño que el espacio que separa los bloques entonces el player buscara la distancia mas cercana para cruzar al otro lado.</li>
        </p>
        
        <p>Conectar dos Nav Mesh distintos</p>
        <p>En el paso anterior creamos un link que conectaba dos bloques separados pero esos usaban el mismo Nav Mesh tambien se pueden conectar dos Nav Mesh diferentes.
            <li>Duplicamos el Nav Mesh y los llamamos Nav Mesh 01 y Nav Mesh 02.</li>
                <img src="../Imatges/Imatgesnavmesh/nav59.png">
            <li>Vamos a Ground01 y vamos a añadir 2 nuevos layers Ground01 y Ground02.</li>
                <img src="../Imatges/Imatgesnavmesh/nav60.png">
            <li>Assignamos el layer a su respectivo objeto.</li>
                <img src="../Imatges/Imatgesnavmesh/nav61.png">
                <img src="../Imatges/Imatgesnavmesh/nav62.png">
            <li>Si vamos a NavMesh01 a Included layers quitaremos el layer Ground02 y Bake. El mateix a NavMesh02 pero al reves treurem Ground01 y Bake.</li>
                <img src="../Imatges/Imatgesnavmesh/nav63.png">
            <li>Esto ya esta el link deberia funcionar y el player podra moverse entre bloques.</li>
        </p>
        
        <p>Modificar al Player, darle cuerpo, animaciones... En este paso vamos a cambiar el cilindro por una figura Humanoide
            <li>Antes de nada vamos a necessitar la carpeta Example05 – LowMan y el .unity de mismo nombre (todo incluido en el ExamplesNavMesh.zip). Cuando lo tengamos abrimos la escena.</li>
                <img src="../Imatges/Imatgesnavmesh/nav64.png">
            <li>Antes de continuar vamos a: En el Player le volvemos a Assignar el PlayerController y le ponemos la camera y el Nav Mesh Agent.</li>
                <img src="../Imatges/Imatgesnavmesh/nav65.png">
            <li>Vamos a Nav Mesh y le damos a Bake para generar el Nav Mesh. Cambiemos la velocidad del player a 6.</li>
                <img src="../Imatges/Imatgesnavmesh/nav66.png">
                <img src="../Imatges/Imatgesnavmesh/nav67.png">
            <li>Seleccionamos el player y quitaremos estos componentes: Cylinder, Mesh Renderer Capsule Collider.</li>
                <img src="../Imatges/Imatgesnavmesh/nav68.png">
            <li>En la carpeta Example05 – Lowman vamos a buscar el modelo del player que se encuentra aquí y lo arrastramos al Player:</li>
                <img src="../Imatges/Imatgesnavmesh/nav69.png">
                <img src="../Imatges/Imatgesnavmesh/nav70.png">
                <img src="../Imatges/Imatgesnavmesh/nav71.png">
            <li>Quitamos la componente Animator por ahora. Vamos a Player y en Nav Mesh Agent le pondremos el Base Offset a 0 y ya podemos ponerlo al suelo.</li>
                <img src="../Imatges/Imatgesnavmesh/nav72.png">
            <li>Si no teneis el transform de LowBody a 0 haced un reset.</li>
                <img src="../Imatges/Imatgesnavmesh/nav73.png">
                <img src="../Imatges/Imatgesnavmesh/nav74.png">
            <li>Lo escalamos a 1.2 y le ponemos un material de la carpeta.</li>
                <img src="../Imatges/Imatgesnavmesh/nav75.png">
                <img src="../Imatges/Imatgesnavmesh/nav76.png">
                <img src="../Imatges/Imatgesnavmesh/nav77.png">
        </p>
        
        <p>Animaciones del player
            <li>Buscamos el script ThirdPersonCharacter y lo arrastramos al Player.</li>
                <img src="../Imatges/Imatgesnavmesh/nav78.png">
                <img src="../Imatges/Imatgesnavmesh/nav79.png">
            <li>En el Capsule Collider cambiamos la altura a 2 y la Y a 1. En Nav Mesh Agent vamos a poner la velocidad a 1.</li>
                <img src="../Imatges/Imatgesnavmesh/nav80.png">
                <img src="../Imatges/Imatgesnavmesh/nav81.png">
            <li>En la componente Animator podemos ver que falta assigar un Controller y un avatar.</li>
                <img src="../Imatges/Imatgesnavmesh/nav82.png">
            <li>En la carpeta LowMan si hacemos click sobre Animation ahi tenemos el Controller solo tenemos que arrastrarlo al Animator.</li>
                <img src="../Imatges/Imatgesnavmesh/nav83.png">
                <img src="../Imatges/Imatgesnavmesh/nav84.png">
            <li>Lo mismo con Avatar:</li>
                <img src="../Imatges/Imatgesnavmesh/nav85.png">
                <img src="../Imatges/Imatgesnavmesh/nav86.png">
            <li>Las animaciones ya estan preparadas ahora queda usar el script ThirdPersonCharacter.</li>
            <li>Vamos a abrir el script PlayerController y aquí necessitamos hacer una referencia al script ThirdPersonCharacter. Antes de nada tenemos que poner la siguiente linea de codigo “using UnityStandardAssets.Character.ThirdPerson”.</li>
                <img src="../Imatges/Imatgesnavmesh/nav87.png">
            <li>Creamos una variable publica ThirdPersonCharacter la llamamos character.</li>
                <img src="../Imatges/Imatgesnavmesh/nav88.png">
            <li>En el Start() (si no esta lo cread-lo) aquí vamos a hacer que el agent no actualize su rotación con la siguiente linea:</li>
                <img src="../Imatges/Imatgesnavmesh/nav89.png">
            <li>En el Update() vamos a usar la funcion character.Move() esta funcion necesita un Vector 3 que define donde queremos movernos y si el personaje tiene que agacharse o saltar.</li>
                <img src="../Imatges/Imatgesnavmesh/nav90.png">
            <li>Cuando el Player llega a su destino queremo que para para eso vamos a usar un if:</li>
                <img src="../Imatges/Imatgesnavmesh/nav91.png">
            <li>Si ahora guardamos y vamos a Unity En PlayerController tenemos el ThirdPersonCharacter.</li>
                <img src="../Imatges/Imatgesnavmesh/nav92.png">
            <li>Ya esta si ahora le damos a Play y nos movemos veremos las animaciones del Player.</li>
        </p>
        
        <p></p>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter"> 
      <!-- ################################################################################################ -->
      <h6>Nav Mesh Tutorial</h6>
      <nav class="sdb_holder">
        <ul>
            <li><a href="#C1"> FASE 1: BASICS </a></li>
            <li><a href="#C2"> FASE 2: MAKING IT DYNAMIC </a></li>
            <li><a href="#C3"> FASE 3: Animacion de Personaje y Conectar dos Nav Mesh </a></li>
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