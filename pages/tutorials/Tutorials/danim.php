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
    <h1>TUTORIAL DRIVE SIMULATION </h1>
    <h2>Requeriments:</h2>
        
    <p>
        <li>Unity 2018/9</li>
        <li>Visual Studio</li>
    </p>
    
     <h2>Que farem?</h2>
        
    <p>En aquesta lliçó, creareu el vostre primer projecte de joc a Unity Hub. Escollireu i posicionareu un vehicle per conduir el jugador i un obstacle perquè aquest pugui xafar o evitar. També podreu configurar una càmera perquè el reproductor la pugui veure i oferir-los una vista perfecta de l'escena. Durant tot aquest procés, aprendreu a navegar per l'Editor Unity i creixerà còmode movent-vos en espai 3D. Per últim, personalitzaràs el disseny de la teva finestra per a l’Editor Unity.</p>
        
    <p></p>
 
        
    <!-- ################################################################################################ -->
    <h1 id = "C1"> STEP 1 </h1>
        
        <p>Feu una carpeta de curs i un nou projecte. </p>
      
        <p>A l'escriptori (o en algun altre lloc que ho recordeu), feu clic amb el botó dret a> Crear una carpeta nova i, a continuació, poseu-lo el nom de "Crea amb codi". </p>          
        <p>Obriu Hub Unity i feu clic a Nou.</p>
            <img src="../Imatges/ImatgesDanim/drive1.png">
        
        <p>Nom el projecte “Prototip 1”, seleccioneu la versió correcta d’Unity, configureu la ubicació a la nova carpeta “Crea amb codi” i seleccioneu la plantilla 3D.</p>
        <p>Feu clic a Crea projecte i, a continuació, espereu per obrir la Unitat. </p>
        
        <p></p>
  
        
     <!-- ################################################################################################ -->
     <h1 id = "C2"> STEP 2  </h1>
        
        <p>Feu clic a un dels enllaços per accedir als fitxers d’inici del Prototip 1, després descarregueu-los i importeu-los a Unity. </p>
        <p>A la finestra del projecte, a Actius> Escenes> feu doble clic al Prototip 1 escena per obrir-lo.</p>
            <img src="../Imatges/ImatgesDanim/drive2.png">

        <p></p>
        
     <!-- ################################################################################################ -->
     <h1 id = "C3"> STEP 3  </h1>
        
        <p>A la finestra del projecte, obriu Actius> Biblioteca de cursos> Vehicles, després arrossegueu un vehicle a la Jerarquia.  </p>
        <p>Feu clic amb el botó dret + WASD per volar al vehicle i, a continuació, intenteu girar al voltant. </p>
        <p>Premeu F a la vista Escena per centrar-se en ella, i després utilitzeu la roda de desplaçament per fer zoom i allunyar-la i mantenir la roda de desplaçament a la panoràmica. </p>
        <p>Premeu F per enfocar-la, manteniu la tecla alt + esquerra. feu clic per girar-la perfectament. </p>
        <p>Si alguna cosa va malament, premeu Ctrl / Cmd + Z per desfer fins que es resolgui. </p>
            <img src="../Imatges/ImatgesDanim/drive3.png">

        <p></p>
   
     <!-- ################################################################################################ -->
        <h1 id = "C4"> STEP 4  </h1>
        
        <p>El següent que necessita el nostre joc és un obstacle. Hem de triar-ne un i situar-lo davant del vehicle. </p>
        <p>Vés a la Biblioteca de cursos> Obstacles i arrossega directament un obstacle a la vista d'escena. </p>
        <p>A l'Inspector per l'obstacle, a la part superior dreta del component Transformar, fes clic a la icona d'engranatge> Restableix la posició. </p>
        <p>A l'Inspector, canvieu la ubicació XYZ a 0,0,25. </p>
        <p>A la jerarquia, feu clic amb el botó dret> Canvieu el nom dels vostres dos objectes com a "Vehicle" i "Obstacle". </p>
            <img src="../Imatges/ImatgesDanim/drive4.png">

        <p></p>
   
     <!-- ################################################################################################ -->
        <h1 id = "C5"> STEP 5  </h1>
        
        <p>Ara que hem creat el nostre vehicle i el nostre obstacle, provem de fer funcionar el joc i mirar-lo a través de la càmera.  </p>
        <p>Seleccioneu la càmera a la jerarquia i, a continuació, premeu F per centrar-la. </p>
        <p>Premeu el botó de reproducció per executar el joc i, a continuació, premeu Reproduir per aturar-lo. </p>
            <img src="../Imatges/ImatgesDanim/drive5.png">

        <p></p>
   
     <!-- ################################################################################################ -->
        <h1 id = "C6"> STEP 6 </h1>
        
        <p>Per tal que el jugador visualitzi correctament el nostre joc, hauríem de situar i inclinar la càmera en un bon punt darrere del vehicle. </p>
        <p>Utilitzeu les eines Move and Rotate per moure la càmera darrere del vehicle mirant cap avall. </p>
        <p>Manteniu premut Ctrl / Cmd per moure la càmera per unitats senceres. </p>
            <img src="../Imatges/ImatgesDanim/drive6.png">

        <p></p>
   
     <!-- ################################################################################################ -->
        <h1 id = "C7"> STEP 7 </h1>
        
        <p>Per últim, però no per això menys important, hem de personalitzar la disposició de l’Editor Unity de manera que sigui perfecta per editar el nostre projecte. </p>
        <p>A la cantonada superior dreta, canvieu el disseny de "Predeterminat" a "Alt". </p>
        <p>Desplaceu la vista del joc a sota de la vista Escena. </p>
        <p>A la finestra Projecte, feu clic al menú desplegable petit. a la part superior dreta i trieu "Disseny d'una columna". </p>
        <p>Al desplegable del disseny, deseu un nou disseny i anomeneu-lo "El meu disseny". </p>
            <img src="../Imatges/ImatgesDanim/drive7.png">

        <p></p>
   
     <!-- ################################################################################################ -->
         <h1 id = "C8"> STEP 8 </h1>
        
        <p>A la finestra del projecte, feu clic amb el botó dret> Crea> Carpeta anomenada "Scripts". </p>
        <p>A la carpeta "Scripts", feu clic amb el botó dret> Creeu> C # Script amb el nom de "PlayerController". </p>
        <p>Arrossegueu el nou script cap a l'objecte del vehicle. </p>
        <p>Feu clic a l'objecte del vehicle per assegurar-vos que s'ha afegit com a component a l'inspector. </p>
            <img src="../Imatges/ImatgesDanim/drive8.png">

        <p></p>
   
     <!-- ################################################################################################ -->
        <h1 id = "C9"> STEP 9 </h1>
        
        <p>Per fer que el vehicle avanci, primer hem d’obrir el nou script i familiaritzar-nos amb l’entorn de desenvolupament. </p>
        <p>Feu doble clic al guió per obrir-lo a Visual Studio. </p>
        <p>Al mètode Update (), afegiu un comentari que us farà: // Endavant el vehicle. </p>
            <img src="../Imatges/ImatgesDanim/drive9.png">

        <p></p>
   
     <!-- ################################################################################################ -->
        <h1 id = "C10"> STEP 10 </h1>
        
        <p>Ara que tenim el comentari dient què programarem, hem d’escriure una línia de codi que realment mogui el vehicle cap endavant. </p>
        <p>Sota el vostre nou comentari, escriviu transform.tr i, a continuació, seleccioneu Traduir al menú complet complet. </p>
        <p>Escriviu (afegiu 0, 0, 1 entre els parèntesis i completeu la línia amb un punt i coma(;). </p>
        <p>Premeu Ctrl / Cmd + S per desar el vostre script, i després executar el joc per provar-lo. </p>
            <img src="../Imatges/ImatgesDanim/drive10.png">

        <p></p>
   
     <!-- ################################################################################################ -->
        <h1 id = "C11"> STEP 11 </h1>
        
        <p>Hem programat el vehicle per moure’ns per l’eix Z, però hi ha una manera més neta de codificar-ho. </p>
        <p>Elimineu el 0, 0, 1 que heu escrit i utilitzeu l’autocompleció per substituir-lo per Vector3.forward.</p>
            <img src="../Imatges/ImatgesDanim/drive11.png">

        <p></p>
        
     <!-- ################################################################################################ -->
        <h1 id = "C12"> STEP 12 </h1>
        
        <p>Ara mateix, la velocitat del vehicle està fora de control. Hem de canviar el codi per ajustar-lo. </p>
        <p>Afegeix * Time.deltaTime i executa el teu joc. </p>
        <p>Afegeix * 20 i executa el teu joc. </p>
            <img src="../Imatges/ImatgesDanim/drive12.png">

        <p></p>
   
     <!-- ################################################################################################ -->
        <h1 id = "C13"> STEP 13 </h1>
        
        <p>Ara mateix, el vehicle entra directament per la caixa. Si volem que sigui més realista, hem d’afegir física. </p>
        <p>Seleccioneu el vehicle i, a continuació, a la jerarquia, feu clic a Afegeix un component i seleccioneu RigidBody. </p>
        <p>Seleccioneu l’Obstacle i, a la jerarquia, feu clic a Afegeix un component i seleccioneu RigidBody. </p>
        <p>A les propietats del component RigidBody, augmentar la massa del vehicle i l'obstacle per estar al voltant del que estarien en quilograms i tornar a provar-ho. </p>
            <img src="../Imatges/ImatgesDanim/drive13.png">

        <p></p>
   
     <!-- ################################################################################################ -->
        <h1 id = "C14"> STEP 14 </h1>
        
        <p>Per últim, però no per això menys important, hauríem de duplicar l’obstacle i fer la carretera més traïdora per al vehicle. </p>
        <p>Feu clic i arrossegueu el vostre obstacle fins a la part inferior de la llista de la jerarquia. </p>
        <p>Premeu Ctrl / Cmd + D per duplicar l’obstacle i moure’l cap a l’eix Z. </p>
        <p>Repetiu-ho algunes vegades més per crear més obstacles. </p>
        <p>Després de fer alguns duplicats, seleccioneu-ne un a la jerarquia i manteniu premut ctrl + feu clic per seleccionar diversos obstacles i, a continuació, dupliqueu-los. </p>
            <img src="../Imatges/ImatgesDanim/drive14.png">

        <p></p>
   
     <!-- ################################################################################################ -->
        <h1 id = "C15"> STEP 15 </h1>
        
        <p>Necessitem una manera més fàcil de canviar la velocitat del vehicle i permetre-la accedir des de l’inspector. Per fer-ho, el que necessitem és quelcom que s’anomena variable. </p>
        <p>A PlayerController.cs, afegiu la velocitat de flotació pública = 5.0f; a la part superior de la classe. </p>
        <p>Substituïu el valor de velocitat al mètode Traducció per la variable de velocitat i, a continuació, prova. </p>
        <p>Deseu el guió i, a continuació, editeu el valor de la velocitat a l'inspector per obtenir la velocitat que voleu. </p>
            <img src="../Imatges/ImatgesDanim/drive15.png">

        <p></p>
   
     <!-- ################################################################################################ -->
        <h1 id = "C16"> STEP 16 </h1>
        
        <p>Actualment la càmera està enganxada en una posició. Si volem que segueixi el reproductor, hem de fer un nou guió per a la càmera. </p>
        <p>Creeu un nou script C # anomenat FollowPlayer i connecteu-lo a la càmera. </p>
        <p>Afegeix un reproductor públic de GameObject; a la part superior del guió. </p>
        <p>Seleccioneu la càmera principal i, després, arrossegueu objecte del reproductor a la variable del reproductor buit de l'inspector. </p>
        <p>A Actualització (), assigna la posició de la càmera a la posició del jugador i, a continuació, prova. </p>
            <img src="../Imatges/ImatgesDanim/drive16.png">

        <p></p>
   
     <!-- ################################################################################################ -->
        <h1 id = "C17"> STEP 17 </h1>
        
        <p>Hem de situar la posició de la càmera per sobre del vehicle perquè el jugador tingui una visió decent del joc. </p>
        <p>A la línia del mètode Actualització, afegiu + Vector3 nou (0, 5, -7) i, a continuació, feu una prova.</p>
            <img src="../Imatges/ImatgesDanim/drive17.png">

        <p></p>
        
     <!-- ################################################################################################ -->
        <h1 id = "C18"> STEP 18 </h1>
        
        <p>Hem definit la posició de la càmera, però és possible que vulguem canviar-la més endavant. Necessitem una forma més senzilla d’accedir a l’offset. </p>
        <p>A la part superior de FollowPlayer.cs, declari el Vector3 com a compensació privada. </p>
        <p>Copieu el nou codi Vector3 () i assigneu-lo a aquesta variable. </p>
        <p>Substituïu el codi original per la variable offset 4. Proveu i deseu. </p>
            <img src="../Imatges/ImatgesDanim/drive18.png">

        <p></p>
   
     <!-- ################################################################################################ -->
        <h1 id = "C19"> STEP 19 </h1>
        
        <p>Si crearem i editarem variables, hem d’assegurar-nos que no intentem per casualitat fer canvis quan estem en “Mode de reproducció”. </p>
        <p>Des del menú superior, aneu a Edita> Preferències (Windows). o Unitat> Preferències (Mac). </p>
        <p>Al menú de l'esquerra, seleccioneu Colors i, a continuació, editeu el color "Playmode tint" per tenir un color lleuger. </p>
        <p>Juga el projecte per provar-lo, després tanqueu les preferències. </p>
            <img src="../Imatges/ImatgesDanim/drive19.png">

        <p></p>
   
     <!-- ################################################################################################ -->
        <h1 id = "C20"> STEP 20 </h1>
        
        <p>Fins ara, el vehicle només ha pogut avançar recte per la carretera. Necessitem que es pugui desplaçar a l’esquerra i a la dreta per evitar els obstacles. </p>
        <p>A la part superior de PlayerController.cs, afegiu un float public TurnSpeed; variable. </p>
        <p>A FixedUpdate (), afegiu transform.Translate (Vector3.right * Time.deltaTime * turnSpeed). </p>
        <p>Executeu el joc i utilitzeu el control lliscant variable TurnSpeed per moure el vehicle a l'esquerra i a la dreta. </p>
            <img src="../Imatges/ImatgesDanim/drive20.png">

        <p></p>
   
     <!-- ################################################################################################ -->
        <h1 id = "C21"> STEP 21 </h1>
        
        <p>Actualment, només podem controlar el moviment a l'esquerra i a la dreta del vehicle a l'inspector. Hem de concedir una mica de potència al jugador i permetre que controlin aquest moviment per si mateixos. </p>
        <p>A PlayerController.cs, afegiu una nova variable pública horizontal horizontalInput. </p>
        <p>A FixedUpdate, assigneu horizontalInput = Input.GetAxis ("Horizontal"), i feu una prova per veure-la a l'inspector. </p>
        <p>Afegeix la variable horizontalInput a la vostra esquerra / dreta: el mètode de traducció per obtenir el control del vehicle. </p>
        <p>A l’inspector, editeu les variables turnSpeed i velocitat per ajustar la sensació. </p>
            <img src="../Imatges/ImatgesDanim/drive21.png">

        <p></p>
   
     <!-- ################################################################################################ -->
        <h1 id = "C22"> STEP 22 </h1>
        
        <p>Hem permès al jugador controlar el volant, però també volem que controli el pedal de gas i el fre. </p>
        <p>Declarem una nova variable de reenviament pública pública. </p>
        <p>A FixedUpdate, assigna forwardInput = Input.GetAxis ("Vertical"). </p>
        <p>Afegeix la variable forwardInput al mètode Translate forward, i prova. </p>
            <img src="../Imatges/ImatgesDanim/drive22.png">

        <p></p>
   
     <!-- ################################################################################################ -->
        <h1 id = "C23"> STEP 23 </h1>
        
        <p>Hi ha alguna cosa estrany sobre el moviment del vehicle ... es llisca cap a l'esquerra a la dreta en lloc de girar. Deixem que el vehicle giri com un cotxe real! </p>
        <p>A FixedUpdate, truqueu transform.Rotate (Vector3.up, horizontalInput) i, a continuació, prova. </p>
        <p>Esborra la línia de codi que es tradueix a la dreta, i prova. </p>
        <p>Afegeix * turnSpeed * Time.deltaTime. Després prova. </p>
            <img src="../Imatges/ImatgesDanim/drive23.png">

        <p></p>
   
     <!-- ################################################################################################ -->
        <h1 id = "C24"> STEP 24 </h1>
        
        <p>Hem afegit moltes coses noves en aquesta lliçó. Abans de seguir endavant i ser més professionals, hem de netejar els nostres scripts i jerarquia per fer-los més organitzats. </p>
        <p>A la jerarquia, feu clic amb el botó dret> Crea el buit i canvieu-lo el nom de "Obstacles" i arrossegueu tots els obstacles. </p>
        <p>Inicialitzeu les variables amb valors a PlayerController i, a continuació, feu que totes les variables siguin privades. (Excepte les variables del reproductor). </p>
        <p>Utilitzeu // per afegir comentaris a cada secció de codi. </p>
            <img src="../Imatges/ImatgesDanim/drive24.png">

        <p></p>
   
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter"> 
      <!-- ################################################################################################ -->
      <h6>INDEX DRIVE SIMULATION</h6>
      <nav class="sdb_holder">
        <ul>
            <li><a href="#C1"> STEP 1 </a></li>
            <li><a href="#C2"> STEP 2 </a></li>
            <li><a href="#C3"> STEP 3 </a></li>
            <li><a href="#C4"> STEP 4 </a></li>
            <li><a href="#C5"> STEP 5 </a></li>
            <li><a href="#C6"> STEP 6 </a></li>
            <li><a href="#C7"> STEP 7 </a></li>
            <li><a href="#C8"> STEP 8 </a></li>
            <li><a href="#C9"> STEP 9 </a></li>
            <li><a href="#C10"> STEP 10 </a></li>
            <li><a href="#C11"> STEP 11 </a></li>
            <li><a href="#C12"> STEP 12 </a></li>
            <li><a href="#C13"> STEP 13 </a></li>
            <li><a href="#C14"> STEP 14 </a></li>
            <li><a href="#C15"> STEP 15 </a></li>
            <li><a href="#C16"> STEP 16 </a></li>
            <li><a href="#C17"> STEP 17 </a></li>
            <li><a href="#C18"> STEP 18 </a></li>
            <li><a href="#C19"> STEP 19 </a></li>
            <li><a href="#C20"> STEP 20 </a></li>
            <li><a href="#C21"> STEP 21 </a></li>
            <li><a href="#C22"> STEP 22 </a></li>
            <li><a href="#C23"> STEP 23 </a></li>
            <li><a href="#C24"> STEP 24 </a></li>
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