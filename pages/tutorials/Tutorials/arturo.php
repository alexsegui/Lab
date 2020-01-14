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
      <h1>Tutorial para poder visualizar una base de datos en Unity  </h1>
        <p><li> Instalar el Wamp Server </li></p>
        <img src="../Imatges/ImatgesArturo/base1.png">
    <p></p>
        
        <p><li> Para ver si está bien instalado en el navegador de su preferencia colocar la dirección “localhost” y deberá aparecer el índice del programa Wamp </li></p>
        <img src="../Imatges/ImatgesArturo/base2.png">
    <p></p>
        
        <p><li> Entramos en el PHPMyAdmin colocando la dirección localhost/phpmyadmin </li></p>
        <img src="../Imatges/ImatgesArturo/base3.png">
    
        <p><li> Colocamos Usuario: root y contraseña en blanco</li></p>
        <img src="../Imatges/ImatgesArturo/base4.png">
        
        <p><li> Creamos una nueva base de datos clicando la pestaña nueva de la parte de izquierda y la nombramos unity_DB con el cotejamiento por defecto </li></p>
        <img src="../Imatges/ImatgesArturo/base5.png">
        
        <p><li> Creamos una tabla llamada “ítems” de 4 columnas </li></p>
        <img src="../Imatges/ImatgesArturo/base6.png">
    
        <p><li> Luego rellenamos los campos Nombre, Tipo, Longitud con la siguiente data que se ve en la figura, el primero de todos “id” va a ser auto incrementable por ende será nuestra clave primaria </li></p>
        <img src="../Imatges/ImatgesArturo/base7.png">
    
        <p><li> Ignorar todos los errores si nos aparecen en pantalla al crear la tabla. 
        Nuestra tabla quedaría así: </li></p>
        <img src="../Imatges/ImatgesArturo/base8.png">
    
        <p><li> Ahora procedemos a insertarle data a nuestra tabla desde la pestaña “Insertar” colocaremos por lo menos 3 filas de datos. </li></p>
        <img src="../Imatges/ImatgesArturo/base9.png">
    
        <p><li> Los datos una vez insertados quedarían en nuestra tabla de la siguiente manera:</li></p>
        <img src="../Imatges/ImatgesArturo/base10.png">
        
        <p><li> Luego a través del explorador del ordenador ubicamos la carpeta www del programa Wamp </li></p>
        <img src="../Imatges/ImatgesArturo/base11.png">
        
        <p><li> Ahí creamos un archivo de texto (lo podemos realizar en cualquier software de redacción de código, en mi caso utilizaré Sublime) y lo llamaremos “visualitza.php” </li></p>
        <img src="../Imatges/ImatgesArturo/base12.png">
        
        <p><li> Luego redactamos un código para poder entrar, extraer y visualizar nuestra base de datos en el navegador. </li></p>
        <img src="../Imatges/ImatgesArturo/base13.png">
        
        <p><li> En el navegador colocamos la dirección de nuestro archivo y podremos ver los resultados</li></p>
        <img src="../Imatges/ImatgesArturo/base14.png">
    
        <p><li> Para efectos de Unity modificamos nuestro código para que aparezca en una solo línea nuestros datos, separados por el símbolo”|” y que cada fila termine con “;”. </li></p>
        <img src="../Imatges/ImatgesArturo/base15.png">
    
        <p><li> Lo que se observaría de la siguiente manera: </li></p>
        <img src="../Imatges/ImatgesArturo/base16.png">
        
        <p><li> Inicializamos un nuevo proyecto 3D en Unity y creamos un Script afuera de la carpeta Assets, dentro de este Script colocamos el siguiente código: </li></p>
        <img src="../Imatges/ImatgesArturo/base17.png">
        
        <p><li> Al compilar regresamos al Unity y añadimos el Script a nuestra Cámara Principal “Main Camera”. </li></p>
        <img src="../Imatges/ImatgesArturo/base18.png">
        
        <p><li> Al darle play a nuestro proyecto observamos en la el apartado Console los datos como si lo viéramos desde el navegador. </li></p>
        <img src="../Imatges/ImatgesArturo/base19.png">

        <p><li> Otra forma de visualizarlos es agregando una variable string “ítems” con su respectiva línea de código. </li></p>
        <img src="../Imatges/ImatgesArturo/base20.png">
        
        <p><li> Con lo que observamos en la parte de debajo de nuestro inspector los datos de la Base que creamos. </li></p>
        <img src="../Imatges/ImatgesArturo/base21.png">

        <p><li> Por último agregamos una función que llamamos “GetDataValue” que nos servirá para imprimir por consola la data que queramos según su Index. </li></p>
        <img src="../Imatges/ImatgesArturo/base22.png">
        
        <p><li> Lo que en nuestra consola aparecería los datos según el tipo de variable y su index. </li></p>
        <img src="../Imatges/ImatgesArturo/base23.png">
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