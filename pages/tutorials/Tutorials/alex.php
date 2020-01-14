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
    <h1>Basic Gameplay Tutorial </h1>
    <h2>Resumen:</h2>
        <p>En esta unidad, programarás un juego de arriba hacia abajo con el objetivo de lanzar comida a los animales hambrientos - que están estampidando hacia ti - antes de que puedan correr más allá de ti. Para hacer esto, te familiarizarás mucho más con algunos de los conceptos de programación y Unity más importantes, incluidas las declaraciones if-then, la generación de valor aleatorio, las matrices, la detección de colisiones, los prefabs y la creación de instancias. Al completar esta Unidad, aprenderás cómo programar un juego básico con la capacidad de lanzar proyectiles i maniobrar al jugador para mantener el juego vivo.</p>
        
    <h2>Introduccion:</h2>
        <p>Comenzarás esta unidad creando un nuevo proyecto para tu segundo prototipo y haciendo funcionar el movimiento básico del jugador. Primero elegirás qué personaje te gustaría, con qué tipos de animales te gustaría interactuar y qué comida te gustaría alimentar a esos animales. Le darás al jugador un movimiento básico de lado a lado, luego usarás declaraciones if-then para mantener al Jugador en unos límites.</p>
    
    <h2>Resultado del proyecto:</h2>
        <p>El jugador podrá moverse a la izquierda y a la derecha en la pantalla en función de las pulsaciones de teclas izquierda y derecha del usuario, pero no podrá abandonar el área de juego a ambos lados.</p>
        
    <p></p>
 
        
    <!-- ################################################################################################ -->
    <h1 id = "C1"> Crear un nuevo proyecto </h1>
        
        <p>Abre Unity Hub y crea un nuevo proyecto llamado "Prototype 2" en tu directorio del curso. </p>
        <p>Haga clic en el enlace para acceder a los archivos de inicio del prototipo 2, luego impórtelos en Unity</p>  
        <p>Abre la escena del prototipo 2 y elimina SampleScene sin guardar.</p>    
        <p>En la parte superior derecha del Editor de Unity, cambia tu diseño de Predeterminado a tu diseño personalizado. </p>
            
        <p></p>
  
        
     <!-- ################################################################################################ -->
     <h1 id = "C2"> Añadir el jugador, los animales y la comida: </h1>
        
        <p>Arrastre 1 humano, 3 animales y 1 objeto de alimento en la jerarquía. </p>
            <img src="../Imatges/ImatgesAlex/basic1.png">
        <p>Ajusta la escala XYZ de la comida para que pueda ver fácilmente desde arriba X=2 Y=2 Z=2. </p>
            <img src="../Imatges/ImatgesAlex/basic2.png">
       
        <p></p>
        
     <!-- ################################################################################################ -->
     <h1 id = "C3"> Obtener la entrada horizontal del usuario: </h1>
        
        <p> En la carpeta Assets, cree una carpeta "Scripts" y un script "FarmerController" dentro. </p>
            <img src="../Imatges/ImatgesAlex/basic3.png">
        <p> Adjunta el script al Jugador y ábralo. </p>
        <p> En la parte superior de PlayerController.cs, declare un nuevo float público horizontalInput. </p>
            <img src="../Imatges/ImatgesAlex/basic4.png">
        <p> En el Update(), establezca horizontalInput á Input.GetAxis("Horizontal"), a continuación, pruebe para asegurarse de que funciona en el inspector. </p>
            <img src="../Imatges/ImatgesAlex/basic5.png">
        <p></p>
   
        
     <!-- ################################################################################################ -->
    <h1 id = "C4"> Mover el jugador de izquierda a derecha: </h1>

        <p>Declaramos una nueva variable publica float que le diremos speed.</p>
            <img src="../Imatges/ImatgesAlex/basic6.png">
        <p>En el Update(), Traducimos el movimiento lado a lado del jugador basandonos en el horizontal Input i speed. </p>
            <img src="../Imatges/ImatgesAlex/basic7.png">
        <p></p>
        <p>Mantener al jugador dentro de unos limites: </p> 
        <p>En Update(), escribe una declaración if comprobando si la posición X izquierda del jugador es menor que un valor determinado. </p>
        <p> En la instrucción if, establece la posición del jugador en su posición actual, pero con una ubicación X fija. </p>
            <img src="../Imatges/ImatgesAlex/basic8.png">
        <p></p>
    
        
    <!-- ################################################################################################ -->
    <h1 id = "C5"> Limpia tu codigo y tus variables: </h1>
        
        <p> Repita el proceso anterior para el lado derecho de la pantalla.</p>
        <p> Declare nueva variable xRange y, a continuación, reemplace los valores codificados de forma rígida con ellos. </p>
            <img src="../Imatges/ImatgesAlex/basic9.png">
        <p></p>
        
    <!-- ################################################################################################ -->
    <h1 id = "C6"> Haga que el proyectil vuele hacia adelante: </h1>
        
        <p> Cree un nuevo script "MoveForward", adjúntelo al objeto food y ábralo. </p>
            <img src="../Imatges/ImatgesAlex/basic10.png">
        <p> Declare una nueva variable speed de tipo float pública. </p>
        <p> En Update(), agregue transform. Translate(Vector3.forward * Time.deltaTime * speed); a continuación, guardar. </p>
            <img src="../Imatges/ImatgesAlex/basic11.png">
        <p> En el Inspector, establecer la variable de velocidad del proyectil, a continuación, probar. </p>
            <img src="../Imatges/ImatgesAlex/basic12.png">
        <p></p>
        <!-- ################################################################################################ -->
    <h1 id = "C7"> Convierta el proyectil en un prefab:</h1>
        
        <p> Cree una nueva carpeta "Prefabs", arrastre su comida en ella y elija Original Prefab.</p>
            <img src="../Imatges/ImatgesAlex/basic13.png">
        <p> En el script FarmerController declare una variable publica gameObject de nombre projectilePrefab. </p>
            <img src="../Imatges/ImatgesAlex/basic14.png">
        <p>Seleccione el jugador en la jerarquía y, a continuación, arrastre el objeto desde la carpeta Prefabs al nuevo cuadro projectilePrefab en el inspector. </p>
            <img src="../Imatges/ImatgesAlex/basic15.png">
        <p> Dale play en unity i arrastra el proyectil para asegurar-se de que funciona i el proyectil se mueve hacia delante. </p>

        <p></p>

        
    <!-- ################################################################################################ -->
    <h1 id = "C8"> Barra Espaciadora para disparar el proyectil  </h1>
        
        <p> En el script FarmerController, en Update(), agregue una comprobación IF para comprobar cuando se pulsa la barra espaciadora. </p>
        <p> Dentro del IF agregue un comentario que diga que debe // Disparar el proyectil des del jugador. </p>
            <img src="../Imatges/ImatgesAlex/basic16.png">
        <p></p>
        <!-- ################################################################################################ -->

    <h1 id = "C9"> Disparar el proyectil al pulsar la barra espaciadora:</h1>
        
        <p> Dentro de la instrucción if, usa el método Instantiate para generar un proyectil en la ubicación del jugador con la rotación del prefab.</p> 
            <img src="../Imatges/ImatgesAlex/basic17.png">

        <p></p>

        
    <!-- ################################################################################################ -->
    <h1 id = "C10"> Convertir animales en prefabs </h1>
        
        <p>Gire todos los animales en el eje Y 180 grados para mirar hacia abajo. </p>
            <img src="../Imatges/ImatgesAlex/basic18.png">
        <p> Seleccione los tres animales en la jerarquía y Add Component > MoveForward. </p>
            <img src="../Imatges/ImatgesAlex/basic19.png">
        <p> Editar sus valores de velocidad y probar para ver cómo se mueven. </p>
            <img src="../Imatges/ImatgesAlex/basic20.png">
        <p>Arrastrar los tres animales en la carpeta Prefabs, eligiendo "Prefab original". </p>
            <img src="../Imatges/ImatgesAlex/basic21.png">
        <p> Prueba arrastrando prefabs en la jerarquia despues de darle play para ver que los animales se mueven. </p>

        <p></p>
    
    <!-- ################################################################################################ -->
    <h1 id = "C11"> Destruyamos los proyectiles que se salgan de la pantalla </h1>
        
        <p> Creamos un script “DestroyOutOfBounds” y le assignamos el script al proyectile.</p>
            <img src="../Imatges/ImatgesAlex/basic22.png">
        <p>Abrimos el script creamos una variable privada float de nombre topBound i la inicializamos a un valor fijo. </p>
            <img src="../Imatges/ImatgesAlex/basic23.png">
        <p> Escribimos el codigo para destruir el proyectil si este llega al valor de topBound. </p>
            <img src="../Imatges/ImatgesAlex/basic24.png">
        <p> Assignamos el script al proyectil i damos a Apply para guardar el prefab. </p>
        <p></p>
    <!-- ################################################################################################ -->
    <h1 id = "C12"> Hagamos lo mismo con los animales </h1>
        
        <p> Creamos una variable privada float de nombre bottomBound i la inicializamos a un valor fijo. </p>
            <img src="../Imatges/ImatgesAlex/basic241.png">
        <p> Escribimos el codigo para destruir los animales si llegan al valor de bottomBound. </p>
            <img src="../Imatges/ImatgesAlex/basic242.png">
        <p>Assignamos el script a todos los prefabs animales i damos a Apply para guardar.</p>
        
        <p></p>
        
        
 <!-- ################################################################################################ -->
    <h1 id = "C13"> Spawn Manager </h1>
        
        <p>En Jerarquia creamos un empty object de nombre SpawnManager. </p>
            <img src="../Imatges/ImatgesAlex/basic25.png">
        <p>Creamos tambien un script SpawnManager, lo ponemos el el empty object que hemos creado y abralo. </p>
            <img src="../Imatges/ImatgesAlex/basic26.png">
        <p> Declaramos una variable publica: public GameObject[ ] animalPrefabs. </p>
            <img src="../Imatges/ImatgesAlex/basic27.png">
        <p> En el inspector, cambiamos el tamaño del array para que sea igual al numero de animales que tenemos, luego assignamos los prefabs de los animales arrastrandolos. </p>
            <img src="../Imatges/ImatgesAlex/basic28.png">
        <p></p>
     <!-- ################################################################################################ -->
        
    <h1 id = "C14"> Generar un animal si S es presionada</h1>
        
        <p> En Update(), escriba una instrucción if-then para crear una instancia de un nuevo prefab animal en la parte superior de la pantalla si se presiona S. </p>
        <p> Declare un nuevo int animalIndex público e incorpórelo en la llamada Instantiate, luego pruebe editando el valor en el Inspector. </p>
            <img src="../Imatges/ImatgesAlex/basic29.png">
        <p></p>
    <!-- ################################################################################################ -->
        
    <h1 id = "C15"> Fem que els animals apareguin aleatoriament de l'array:</h1>
        
        <p> En la comprobación if si se presiona S, genere un int animalIndex aleatorio entre 0 y la longitud del array. </p>
        <p> Eliminar la variable global animalIndex, ya que solo se necesita localmente en la instrucción if. </p>
            <img src="../Imatges/ImatgesAlex/basic30.png">
        <p></p>
    <!-- ################################################################################################ -->
        
    <h1 id = "C16"> Fem que els animals apareguin en una posicio random: </h1>
        
        <p> Reemplace el valor X para vector3 por Random.Range(-20, 20), luego pruebe.</p>
        <p> Dentro de la sentencia if, cree una nueva variable local Vector3 spawnPos.</p>
        <p> En la parte superior del script, cree variables float privadas para spawnRangeX y spawnPosZ. </p>
            <img src="../Imatges/ImatgesAlex/basic31.png">
        <p></p>
    <!-- ################################################################################################ -->
        
    <h1 id = "C17"> Creamos un nuevo método para generar animales:</h1>
        
        <p> En el script SpawnManager creamos una funcion void SpawnRandomAnimal() {} debajo del Update(). </p>
            <img src="../Imatges/ImatgesAlex/basic32.png">
        <p> Copiamos i pegamos el codigo del if a la nueva funcion.</p>
        <p> Llamamos a la funcion si pulsamos S.</p>
            <img src="../Imatges/ImatgesAlex/basic33.png">
        <p></p>
    <!-- ################################################################################################ -->
        
    <h1 id = "C18"> Generar los animales a intervalos cronometrados: </h1>
        
        <p> En Start(), utilice InvokeRepeating para generar los animales en función de un intervalo y, a continuación, pruebe. </p>
            <img src="../Imatges/ImatgesAlex/basic34.png">
        <p> Quitamos el if que comprueba si pulsamos la letra S. </p>
        <p> Declarar nuevas variables startDelay y spawnInterval privadas. </p>
            <img src="../Imatges/ImatgesAlex/basic35.png">
        <p></p>
    <!-- ################################################################################################ -->
        
    <h1 id = "C19"> Añadir componentes Collider i Trigger:</h1>
        
        <p> Haga doble clic en uno de los prefabs animales, luego Añadir componente > Box Collider. </p>
            <img src="../Imatges/ImatgesAlex/basic36.png">
        <p> Haga clic en Editar Collider, luego arrastre los manejadores del Collider para abarcar el objeto.</p>
        <p> Compruebe la casilla de verificación “Is Trigger”. </p>
            <img src="../Imatges/ImatgesAlex/basic37.png">
        <p> Repetir este proceso para cada uno de los animales y el proyectil. </p>
        <p> Añadir una componente RigidBody al proyectil y desmarque "Use Gravity". </p>
            <img src="../Imatges/ImatgesAlex/basic38.png">
        <p></p>
    <!-- ################################################################################################ -->
       <h1 id = "C20"> Destruir objetos en caso de colisión:
</h1>
        
        <p>  Cree un nuevo script DetectCollisions, agréguelo a cada prefab animal y, a continuación, ábralo . </p>
            <img src="../Imatges/ImatgesAlex/basic39.png">
        <p> Fem servir la funcio OnTriggerEnter de unity. </p>
        <p> En OnTriggerEnter posem Destroy(gameObject); i provem</p>
                    <img src="..//Imatges/ImatgesAlex/basic40.png">
        <p></p>

      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter"> 
      <!-- ################################################################################################ -->
      <h6>INDEX BASIC GAMEPLAY</h6>
      <nav class="sdb_holder">
        <ul>
            <li><a href="#C1"> Crear un nuevo proyecto </a></li>
            <li><a href="#C2"> Añadir el jugador, los animales y la comida </a></li>
            <li><a href="#C3"> Obtener la entrada horizontal del usuario </a></li>
            <li><a href="#C4"> Mover el jugador de izquierda a derecha </a></li>
            <li><a href="#C5"> Limpia tu codigo y tus variables </a></li>
            <li><a href="#C6"> Haga que el proyectil vuele hacia adelante </a></li>
            <li><a href="#C7"> Convierta el proyectil en un prefab </a></li>
            <li><a href="#C8"> Barra Espaciadora para disparar el proyectil </a></li>
            <li><a href="#C9"> Disparar el proyectil al pulsar la barra espaciadora </a></li>
            <li><a href="#C10"> Convertir animales en prefabs </a></li>
            <li><a href="#C11"> Destruyamos los proyectiles que se salgan de la pantalla </a></li>
            <li><a href="#C12"> Hagamos lo mismo con los animales </a></li>
            <li><a href="#C13"> Spawn Manager </a></li>
            <li><a href="#C14"> Generar un animal si S es presionada </a></li>
            <li><a href="#C15"> Fem que els animals apareguin aleatoriament de l'array </a></li>
            <li><a href="#C16"> Fem que els animals apareguin en una posicio random </a></li>
            <li><a href="#C17"> Creamos un nuevo método para generar animales </a></li>
            <li><a href="#C18"> Generar los animales a intervalos cronometrados </a></li>
            <li><a href="#C19"> Añadir componentes Collider i Trigger </a></li>
            <li><a href="#C20"> Destruir objetos en caso de colisión </a></li>
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