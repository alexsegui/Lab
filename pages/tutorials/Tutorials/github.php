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
      <h1>Github para Unity</h1>
        
        <p> Crear una cuenta de Git Hub y descargarse el software Git https://git-scm.com/download/win    (Podríamos descargarnos la interfaz gráfica de Github, pero este tutorial será realizado con el código GIT desde la consola). </p>
        <p>Creamos un repositorio nuevo que es como una carpeta dentro de la página Git Hub.</p>
            <img src="../Imatges/Imatgesgit/git1.png">
        <p></p>
        
        <p>Le pondremos el nombre de unity-tutorial, una pequeña descripción, por ahora lo haremos private, hacemos click que lo inicie con un archivo README y agregamos un gitignore llamado Unity (este va a hacer un archivo texto donde se indicará los tipos de archivo y carpetas que no se aceptaran en el proyecto, de la lista aparece justamente uno llamado unity, porque ya existe un formato de lo que no se puede aceptar en un proyecto unity) Si agregamos un archivo README, podremos editarlo después y colocar información pertinente para los que editen el proyecto ( para este caso lo haremos sin el archivo README).</p>
            <img src="../Imatges/Imatgesgit/git2.png">
        <p></p>
        
        <p>Una vez creado el repository podemos editar el archivo gitignore y si lo tienen quitarle todos los Slash (/) de cada línea para permitir la creación y edición de las carpetas que salen al principio (este es una buena práctica a realizar cada vez que se trabaje con el GitHub).</p>
            <img src="../Imatges/Imatgesgit/git3.png">
    
        <p>Ahora vamos a crear una carpeta donde colocaremos nuestro proyecto unity al repository a través de la consola de Windows, primero colocamos dir para saber dónde estamos, cd hasta llegar aDesktop y  git clone junto el enlace que tomamos de la página web del botón clone or download.</p>
            <img src="../Imatges/Imatgesgit/git4.png">
            <img src="../Imatges/Imatgesgit/git5.png">
            <img src="../Imatges/Imatgesgit/git6.png">
        
        <p>Y así estaría una vez creado una carpeta en nuestro escritorio.</p>
            <img src="../Imatges/Imatgesgit/git7.png">
        
        <p>A nuestra carpeta que se creó en el escritorio le pasamos todos los archivos que contienen nuestro proyecto de Unity (puede ser uno que este creado o uno nuevo que se haya creado desde cero).</p>
            <img src="../Imatges/Imatgesgit/git8.png">
    
        <p>Entramos a través de la consola en nuestra carpeta de unity-tutorial (cd unity-tutorial) y luego el comando git status.</p>
            <img src="../Imatges/Imatgesgit/git9.png">
    
        <p>Luego colocamos las carpetas que queremos subir al repositorio con git add (git add .vscode/), va a salir una advertencia y luego le damos a git status para ver si lo tomo.</p>
            <img src="../Imatges/Imatgesgit/git10.png">
    
        <p>Pero como queremos subir todas los archivos le damos de una vez git add . (importante el punto y separado del add).</p>
            <img src="../Imatges/Imatgesgit/git11.png">
            <img src="../Imatges/Imatgesgit/git12.png">
    
        <p>Ahora si procedemos a subir todos nuestros archivos a git hub con el comando git commit -m y le podemos agregar un mensaje adicional como “Agregando proyecto unity”.</p>
            <img src="../Imatges/Imatgesgit/git13.png">
        
        <p>Antes tenemos que identificarnos con nuestro correo y con nuestro nombre para poder subirlo, a través de los comandos que nos indican por la consola.</p>
            <img src="../Imatges/Imatgesgit/git14.png">
            <img src="../Imatges/Imatgesgit/git15.png">
        
        <p>Hacemos un git status para ver si todo esta ok.</p>
            <img src="../Imatges/Imatgesgit/git16.png">
        
        <p>Ahora si podemos subirlos con un git push.</p>
            <img src="../Imatges/Imatgesgit/git17.png">
        
        <p>Si refrescamos nuestra página web podrán ver las carpetas que estarán en la nube de git hub.</p>
            <img src="../Imatges/Imatgesgit/git18.png">
    
        <p>Ahora abrimos el proyecto unity con los archivos que copiamos a la carpeta que creamos en el escritorio que lo llamamos unity-tutorial.</p>
        <p>Volvemos a la consola e introducimos este comando para cambiar de editor, lo que hará es que cuando hacemos git commit abrirá el editor y podremos colocar un mensaje más largo.</p>
            <img src="../Imatges/Imatgesgit/git19.png">
    
        <p>Y creamos un nuevo script en el unity que lo llamaremos showcaseScript y hacemos un simple cambio para ver si se ha guardado.</p>
            <img src="../Imatges/Imatgesgit/git20.png">
        
        <p>Lo abrimos y le quitamos la parte del start.</p>
            <img src="../Imatges/Imatgesgit/git21.png">
        
        <p>Volvemos a la consola y damos git status y observaremos que se está registrando los cambios que se están realizando.</p>
            <img src="../Imatges/Imatgesgit/git22.png">
        
        <p>Ahora queremos subir este cambio que hemos hecho por lo tanto hacemos git add . y luego git status.</p>
            <img src="../Imatges/Imatgesgit/git23.png">

        <p>Lo subimos con un mensaje de que fue lo que hicimos colocamos git commit y nos abrirá el nano donde colocaremos el mensaje.</p>
            <img src="../Imatges/Imatgesgit/git24.png">
        
        <p>Damos control x, yes y enter.</p>
            <img src="../Imatges/Imatgesgit/git25.png">

        <p>Damos un nuevo git status observamos que vamos a hacer un cambio en la rama principal y si le damos git push lo subirá.</p>
            <img src="../Imatges/Imatgesgit/git26.png">
        
        <p>Por ejemplo si queremos tomar los cambios que han hechos otros usuarios lo que hacemos es un git pull.</p>
            <img src="../Imatges/Imatgesgit/git27.png">
        
        <p>Navegamos por nuestra carpeta asset y veremos los cambios en el archivo que se hizo y el mensaje que se coloco.</p>
            <img src="../Imatges/Imatgesgit/git28.png">
        
        <p>Creamos otro script en unity que lo llamaremos testing.</p>
            <img src="../Imatges/Imatgesgit/git29.png">

        <p>Y repetimos el proceso para subir los cambios, ahora el commit lo hago con –m para hacer un mensaje más rápido.</p>
            <img src="../Imatges/Imatgesgit/git30.png">
        
        <p>Navegamos otra vez por nuestro proyecto y observamos los cambios.</p>
            <img src="../Imatges/Imatgesgit/git31.png">
        
        <p>También entramos en los commit y veremos la historia de todos los cambios que hemos hecho.</p>
            <img src="../Imatges/Imatgesgit/git32.png">
        
        <p>Si entramos en el commit de remover un método, observaremos el resto del mensaje que escribimos en el nano.</p>
            <img src="../Imatges/Imatgesgit/git33.png">
        
        <p>En resumen aprendimos a subir cambios al archivo principal y bajar los cambios a tu ordenador. También existen otros comandos útiles con el software “Git” que podrán ser útiles para hacer cambios en el repository.</p>
        
        <p>git fetch:
            <li>Descarga los cambios realizados en el repositorio remoto.</li>
        </p>
        
        <p>git merge nombre_rama:
            <li>Impacta en la rama en la que te encuentras parado, los cambios realizados en la rama “nombre_rama”.</li>
        </p>
        
        <p>git pull:
        <li>Unifica los comandos fetch y merge en un único comando.</li>
        </p>
        
        <p>git commit -am "mensaje":
            <li>Confirma los cambios realizados. El “mensaje” generalmente se usa para asociar al commit una breve descripción de los cambios realizados.</li>
        </p>
        
        <p>git push origin nombre_rama:
            <li>Sube la rama “nombre_rama” al servidor remoto.</li>
        </p>
        
        <p>git status:
            <li>Muestra el estado actual de la rama, como los cambios que hay sin comentar.</li>
        </p>
        
        <p>git add nombre_archivo:
            <li>Comienza a trackear el archivo “nombre_archivo”.</li>
        </p>
        
        <p>git checkout -b nombre_rama_nueva:
            <li>Crea una rama a partir de la que te encuentres parado con el nombre “nombre_rama_nueva”, y luego salta sobre la rama nueva, por lo que quedas parado en esta última.</li>
        </p>
        
        <p>git checkout -t origin/nombre_rama:
            <li>Si existe una rama remota de nombre “nombre_rama”, al ejecutar este comando se crea una rama local con el nombre “nombre_rama” para hacer un seguimiento de la rama remota con el mismo nombre.</li>
        </p>
        
        <p>git branch:
            <li>Lista todas las ramas locales.</li>
        </p>
        
        <p>git branch -a:
            <li>Lista todas las ramas locales y remotas.</li>
        </p>
        
        <p>git branch -d nombre_rama:
            <li>Elimina la rama local con el nombre “nombre_rama”.</li>
        </p>
        
        <p>git push origin nombre_rama:
            <li>Commitea los cambios desde el branch local origin al branch “nombre_rama”.</li>
        </p>
        
        <p>git remote prune origin:
            <li>Actualiza tu repositorio remoto en caso que algún otro desarrollador haya eliminado alguna rama remota.</li>
        </p>
        
        <p>git reset --hard HEAD:
            <li>Elimina los cambios realizados que aún no se hayan hecho commit.</li>
        </p>
        
        <p>git revert hash_commit:
            <li>Revierte el commit realizado, identificado por el “hash_commit”.</li>
        </p>
        
        <p>Para mayor información se puede ir al siguiente link
            <li>https://es.wikipedia.org/wiki/Git</li>
        </p>
        
        <p>También es importante saber la filosofía de las ramas, lo cual una buena práctica de cualquier proyecto informático es tener como mínimo 4 ramas (branch) lo cual lo muestro en el siguiente gráfico:</p>
            <img src="../Imatges/Imatgesgit/git34.png">
        <p>Master(principal), Development (desarrollo), Features (funcionalidades), y Hotfix (parches).</p>
        
        <p>Master
            <li>Es la rama principal. Contiene el repositorio que se encuentra publicado en producción, por lo que debe estar siempre estable.</li>
        </p>
        
        <p>Development
            <li>Es una rama sacada de Master. Es la rama de integración, todas las nuevas funcionalidades se deben integrar en esta rama. Luego que se realice la integración y se corrijan los errores (en caso de haber alguno), es decir que la rama se encuentre estable, se puede hacer un merge de development sobre la rama Master.</li>
        </p>
        
        <p>Features
            <li>Cada nueva funcionalidad se debe realizar en una rama nueva, específica para esa funcionalidad. Estas se deben sacar de Development. Una vez que la funcionalidad esté desarrollada, se hace un merge de la rama sobre Development, donde se integrará con las demás funcionalidades.</li>
        </p>
        
        <p>Hotfix
            <li>Son errores de software que surgen en producción, por lo que se deben arreglar y publicar de forma urgente. Es por ello, que son ramas sacadas de Master. Una vez corregido el error, se debe hacer una unificación de la rama sobre Master. Al final, para que no quede desactualizada, se debe realizar la unificación de Master sobre Development.</li>
        </p>
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