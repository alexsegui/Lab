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
      <h1>JOC PLATAFORMES 2D</h1>
        
        <h2 id = "C1"> CARREGAR L'ESCENA </h2>
        <p>
            <li>Un cop tens descarregats i importats els assets busques la escena que te don el asset feta que es diu demo i la arrastres a la jerarquia.</li>
            <li>Pots borrar la escena SampleScene per tenir només la escena en que treballarem.</li>
        </p>
                <img src="../Imatges/ImatgesToni/plataformes1.png">
                <img src="../Imatges/ImatgesToni/plataformes2.png">
        <p></p>

        <h2 id = "C2"> TILE PALETTE </h2>
        <p> Obrirem la Tile Palette per crear les plataformes de manera més ràpida.</p>
                <img src="../Imatges/ImatgesToni/plataformes3.png">
        <p> Li donarem a create new palette i creare una carpeta que es dirà Tiles a assets i li donarem seleccionar carpeta.</p>
                <img src="../Imatges/ImatgesToni/plataformes4.png">
                <img src="../Imatges/ImatgesToni/plataformes5.png">
        <p> Busquem els tiles de tamany 256x256. </p>
        <p> Els seleccionem tots i els arrastrem a la Tile Palette. </p>
                <img src="../Imatges/ImatgesToni/plataformes6.png">
        <p> Ens dirà a quina carpeta volem posar els tiles i anem a la carpeta que em creat abans que es deia Tiles i li donem seleccionar carpeta. </p>
                <img src="../Imatges/ImatgesToni/plataformes7.png">
        <p> A la jerarquia tindrem que crear un TileMap per poder seleccionar-lo a la TilePalette.</p>
                <img src="../Imatges/ImatgesToni/plataformes8.png">
        <p> Clicant el pinzell de la TilePalette i triant el tipus de terreny que volem crear ja podrem fer plataformes directament a la Escena.</p>
                <img src="../Imatges/ImatgesToni/plataformes9.png">
        <p></p>

        <h2 id = "C3"> ANIMACIONS </h2>
        <p> Obrirem les dos Finestres, animation i animator.</p>
                <img src="../Imatges/ImatgesToni/plataformes10.png">
        <p> Buscarem la animació de iddle i li donarem la opció de multiple i li donarem Sprite Editor.</p>
                <img src="../Imatges/ImatgesToni/plataformes11.png">
                <img src="../Imatges/ImatgesToni/plataformes12.png">
        <p> Li donarem a slice perquè ens retalli cada part de la animació automàticament. </p>
        <p> Aply.</p>
                <img src="../Imatges/ImatgesToni/plataformes13.png">
        <p> Selecciones totes les parts de l'animacio que li has fet l'slice abans i l’arrastres a jerarquía. </p>
                <img src="../Imatges/ImatgesToni/plataformes14.png">
        <p>Crees una carpeta a Assets que es digui animacions 
            <li>Abrir. </li>
            <li>Guardar.</li>
        </p>
                <img src="../Imatges/ImatgesToni/plataformes15.png">
        <p> Ara farem la part de el Slice amb la animació de Run i Jump. </p> 
        <p> A la finestra de Animation crearem una nova animació i la guardarem a la carpeta de animacions que em creat abans posant-li el nom corresponent (jump o run). </p>
                <img src="../Imatges/ImatgesToni/plataformes16.png">
                <img src="../Imatges/ImatgesToni/plataformes17.png">
        <p> Seleccionarem totes les parts de la animació que las tindrem a la finestra de projecte i les arrastrem cap a la finestra de animation. </p>
                <img src="../Imatges/ImatgesToni/plataformes18.png">
        <p> Farem el mateix amb la animació que ens queda. </p>
        <p> Anirem a la finestra de Animator i farem les transicions fins que quedi com la imatge. </p>
                <img src="../Imatges/ImatgesToni/plataformes19.png">
                <img src="../Imatges/ImatgesToni/plataformes20.png">
        <p> Crearem un Paràmetre Int i li posarem de nom Status. </p>
                <img src="../Imatges/ImatgesToni/plataformes21.png">
        <p> Clicant la fletxa de Iddle a Jump posarem les opcions de l’inspector igual que la foto. </p>
        <p> Ara farem el mateix amb les altres fotos però variant el numero marcat de la següent manera: </p>
                <img src="../Imatges/ImatgesToni/plataformes22.png">
        <p>
            <li>De Iddle a Run: 1 </li>
            <li>De Jump a Iddle : 0 </li>
            <li>De Jump a Run: 1 </li>
            <li>De Run a Iddle: 0 </li>
            <li>De Run a Jump: 2 </li>
        </p>
        
        <h2 id = "C4"> MOVIMENT DEL JUGADOR </h2>
        
        <p> A la carpeta Assets crearem una carpeta que es digui Scripts. </p>
        <p> Dins de aquesta carpeta crearem un Script que es digui: PlayerController. </p>
                <img src="../Imatges/ImatgesToni/plataformes23.png">
                <img src="../Imatges/ImatgesToni/plataformes24.png">
        <p> Inicialitzem 3 variables, dos privades i una publica. 
            <li> Posem el rb a el start. </li>
            <li> Al update farem que al clicar la tecla j o l el personatge tingui la velocitat positiva o negativa i en el cas  de deixar anar la tecla que sigui 0. </li>
        </p>
                <img src="../Imatges/ImatgesToni/plataformes25.png">
                <img src="../Imatges/ImatgesToni/plataformes26.png">
        <p>Per que el personatge salti crearem dos variables més, una boolean i l’altre un float 
            <li> Al start farem que el boolean sigui false. </li>
            <li> Al update posarem un nou if amb la lletra i. </li>
            <li> Crearem una funció amb un vector 3. </li>
        </p>
                <img src="../Imatges/ImatgesToni/plataformes27.png">
                <img src="../Imatges/ImatgesToni/plataformes28.png">
                <img src="../Imatges/ImatgesToni/plataformes29.png">
        <p> Ara li associarem les animacions a els moviments creats prèviament 
            <li> Crearem aquestes dos variables. </li>
            <li> Al start posarem l’animator i el facingRight a true. </li>
            <li> A la funció de MovePlayer li posarem aquests dos if per la animació del salt. </li>
        </p>
                <img src="../Imatges/ImatgesToni/plataformes30.png">
                <img src="../Imatges/ImatgesToni/plataformes31.png">
                <img src="../Imatges/ImatgesToni/plataformes32.png">
        <p> Crearem aquestes dos funcions que la primera servirà per que quan toqui el terra torni a la animació de Iddle i la segona per girar el personatge cada cop que anem endavant o enrere. </p>
                <img src="../Imatges/ImatgesToni/plataformes33.png">
        <p> Al update cridarem aquestes dos funcions i en el if de el salt li posarem això per la animació. </p>
                <img src="../Imatges/ImatgesToni/plataformes34.png">
                <img src="../Imatges/ImatgesToni/plataformes35.png">
        <p> Per comprovar que funcioni associarem el script al player i li posarem a Speed X 9 i a Speed Y 300.</p>
        <p> Crearem un Empty a la jerarquia que li posarem un box collider 2d per que el player no caigui i tingui una superfície per poder caminar. </p>
                <img src="../Imatges/ImatgesToni/plataformes36.png">
                <img src="../Imatges/ImatgesToni/plataformes37.png">
        <p> Crearem un tag al Empty que em creat que es dirà terra. </p>
                <img src="../Imatges/ImatgesToni/plataformes38.png">
                <img src="../Imatges/ImatgesToni/plataformes39.png">
                <img src="../Imatges/ImatgesToni/plataformes40.png">
        <p></p>
        
        <h2 id = "C5"> ATAC DEL JUGADOR </h2>
        
        <p>Crearem un Empty a la jerarquia anomenat FirePos i li posarem la forma rodona petita del color que vulguem. </p>
        <p> L’associarem al player arrastrant-lo a la jerarquia. </p>
                <img src="../Imatges/ImatgesToni/plataformes41.png">
                <img src="../Imatges/ImatgesToni/plataformes42.png">
        <p> Posarem el FirePos devant del player vigilant que no toqui amb el box collider.</p>
                <img src="../Imatges/ImatgesToni/plataformes43.png">
        <p> Crearem una carpeta que es digui Prefabs. </p>
                <img src="../Imatges/ImatgesToni/plataformes44.png">
        <p> Crearem dos Emptys, els hi posarem la forma de abans, els hi direm RightBullet i LeftBullet i els arrastrarem a la carpeta de prefabs.</p>
                <img src="../Imatges/ImatgesToni/plataformes45.png">
        <p> Crearem un Script que es digui Bullet 
            <li> Crearem dos variables speed que serà un Vector2 i rb un RigidBody2d.</li>
            <li> El rb.velocity l’igualarem a la speed.</li>
        </p>
                <img src="../Imatges/ImatgesToni/plataformes46.png">
        <p>Als dos prefabs els hi posarem un RigidBody2D, un Circle Collider 2D i el script de Bullet. Al RightBullet li posarem una Speed de 7 i al LeftBullet una Speed de -7 . </p>
                <img src="../Imatges/ImatgesToni/plataformes47.png">
                <img src="../Imatges/ImatgesToni/plataformes48.png">
        <p> Ara crearem un altres Script que es dirà Destroy.</p>
                <img src="../Imatges/ImatgesToni/plataformes49.png">
        <p> Crearem una variable publica per posar el temps que volem que es destrueixi la bala i al update farem que es destrueixi el gameObject amb el temps de la variable delay. </p>
                <img src="../Imatges/ImatgesToni/plataformes50.png">
        <p> Associarem el script a els dos prefabs i els hi posarem un Delay de 1.5 .</p>
                <img src="../Imatges/ImatgesToni/plataformes51.png">
        <p> Al script de PlayerController li afegirem aquestes variable.</p>
                <img src="../Imatges/ImatgesToni/plataformes52.png">
                <img src="../Imatges/ImatgesToni/plataformes53.png">
        <p> Crearem aquesta la funció Fire que la cridarem al update amb un if.</p>
                <img src="../Imatges/ImatgesToni/plataformes54.png">
                <img src="../Imatges/ImatgesToni/plataformes55.png">
        <p> Arrastrarem els dos prefabs a les variables publiques de el script a on corresponguin.</p>
                <img src="../Imatges/ImatgesToni/plataformes56.png">
        <p> Per últim en el Body Type li posarem Kinematic als dos prefabs rightBullet i leftBullet. </p>
                <img src="../Imatges/ImatgesToni/plataformes57.png">
        <p></p>


      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter"> 
      <!-- ################################################################################################ -->
      <h6>PLATAFORMES 2D</h6>
      <nav class="sdb_holder">
        <ul>
          <li><a href="#C1">CARREGAR L'ESCENA</a></li>
          <li><a href="#C2">TILE PALETTE</a></li>
          <li><a href="#C3">ANIMACIONS</a>
          <li><a href="#C4">MOVIMENT DEL JUGADOR</a></li>
          <li><a href="#C5">ATAC DEL JUGADOR</a></li>
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