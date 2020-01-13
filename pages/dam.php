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
<!-- ################################## xat #################  -->
<!-- '''html    -->
   <script src="/phpfreechat-2.1.0/client/lib/jquery-1.8.2.min.js" type="text/javascript"></script>
    
  <link rel="stylesheet" type="text/css" href="/phpfreechat-2.1.0/client/themes/carbon/jquery.phpfreechat.min.css" />
  <script src="/phpfreechat-2.1.0/client/jquery.phpfreechat.min.js" type="text/javascript"></script>
<!--  ################################ FI XAT ###################   -->

    <title>DAM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<?php 
   $avat =  $_SESSION['avat'];
?>

	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5dbe29b0154bf74666b734bd/1doqr46ea';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!-- ################################################################################################ -->
    <div class="wrapper row0"> 
        <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
          <div class="fl_left">
		Usuari/a:  
			<?php         
				echo "<img src = /images/avatar/" . $avat . ".png style=width:20%>"?>
                <!-- 
                <ul class="nospace linklist">
                    <li><a href="#">Link 1</a></li> -->
		   <a href="/sortir.php">-- Sortir --</a>
                    <!--<li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                    <li><a href="#">Link 4</a></li>
                   <!-- <li><a href="#">Link 5</a></li>
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
        <li><a href="/pages/gallery.php">Galeria</a></li>
		 <li><a class="active" href="/pages/dam.php">DAM/SMX</a></li>
		<li><a class="active" href="/pages/mep.php">MEP/MEI</a></li>       
        <li><a href="/pages/propostes.php">En curs</a></li>
      </ul>
    </nav>
	<nav id="mainav" class="fl_center">
      <img src = "/textstyle/ElLaboratori.png" style="width:258px;height:54px"> 
    </nav>
    <!-- ################################################################################################ -->
        </header>
    </div>

<!-- ########################<div class="overlay">#################################################### 
<div class="row2 bgded" style="background-image:url('images/SceneRegistre.jpg');">-->
 
	

<!-- **************************************************  1 -  ERIC************************************************** -->
    <div class="fila row2 bgded" >
        <div class="col-6">
            <figure>
                <a href="../demos/Eric/ProjecteUni/index.html">
                     <img src= "/images/JocCartesE.png" alt="">
                </a>
            </figure>
        </div>
        
        <div class="col-6">
            <article>
                <h3 align="center">Joc de cartes</h3>
                <ul>
                    <p align="justify">
						Agent especial ******************** ERIC ********************</p>
					 <p align="justify">
	                   &rarr; 2D <br>
	                   &rarr; Multi-jugador <br>
	                   &rarr; Intel&#8226;lig&egrave;ncia artificial (AI)<br>
	                   &rarr; Interactuar amb les cartes <br>
	                   &rarr; Registre de Victories <br><br>

                        Joc de cartes on 2 jugadors interactuen amb les seves cartes en una rivalitat de 1 vs 1. <br>
                        Cada usuari podr&agrave; escollir les cartes amb les que pot jugar i podr&agrave; modificar-les en qualsevol moment abans de la partida.<br>
                        Tamb&eacute; podr&agrave; jugar en versi&oacute; individual contra la m&agrave;quina.<br>
                        Hi haur&agrave; un registre de totes les vict&ograve;ries i derrotes de cada usuari.<br>
                        Cada carta tindr&agrave; els seus poders i caracter&iacute;stiques.
                        Contra mes poderoses o les caracter&iacute;stiques siguin millor tindran un cost mes elevat de baixar-les al tauler.
                        Cada carta tindr&aacute; el seu cost per poder-la ficar al tauler de joc. <br><br>
                        Explora les possibilitats de la demo tot i que nom&eacute;s tinc l'apartat de Multi-jugador, Individual i Cartes (les cartes no interactuen ni estan definides amb figures ni poders per&ograve; perqu&egrave; te pugis fer una idea de les possibilitats que pot tindre).
                    </p>
                </ul>
            </article>
        </div>        
   </div>
<!-- ......................................final ERIC........................................-->
    
<!-- ***********************************************  2 - MINGO ' **************************************************** -->
    
     <div class="fila row2 bgded"> 
        <div class="col-6">
            <figure>
                    <a href="../demos/Mingo/index.html">
                        <img src="/images/demo/gallery/angry.png" alt=" ">
                    </a>
            </figure>
        </div>
        
        <div class="col-6">
            <article>
                <h3 align="center">Joc Tipus angry birds</h3>
                <ul>
                    <p align="justify">
						Agent especial ******************** MINGO ******************** </p>
					<p align="justify">
                        El demo es un joc tipus angry bird que permet lle�ar la bola contra objectes.
                        
                    </p>
                </ul>
            </article>
        </div>
	</div>
    
  <!-- ..........................................final MINGO................................................... -->   
 <!-- ......................................... 3 --- ISLANDS................................................... --> 
    <div class="fila row2 bgded">
        <div class="col-6">
            <figure>
                <a href="../demos/island/buildwgl/index.html">
                    <img src="/images/island.PNG" alt=" ">
                </a>
            </figure>
        </div>
        
        <div class="col-6">
            <article>
                <h3 align="center">Island 3d</h3>
                <ul>
					<p align="justify">
						Agent especial ******************** MINGO ******************** </p>
                    <p align="justify">
                        El demo tracta sobre un jugador, que haur&agrave; de rec&ograve;rrer i 
                        descobrir els diferents llocs de l'illa on es troba.<br>
                        El jugador s'anir&agrave; trobant objectes que li serviran per
                        aconseguir diferents recompenses, per millorar el seu personatge, 
                        o per complir objectius que se li demanen, i que l'ajudaran a anar 
                        obrint noves portes per seguir descobrint l'illa sencera.<br>
                        
                        <pre>    &rarr; Minijoc de buscar lletres i obtenir-ne paraules
    &rarr; Minijoc recollir objectes i classificar-los.</pre>

                        Per a probar la demo unicament s'ha de clicar sobre la imatge i el 
                        navegador obrira una finestra que permet jugar a traves de WebGL.
                </ul>
            </article>
        </div>
    </div>
    
<!-- *********************************************** 4-TONI  COTXE   ************************************************** -->
    
    <div class="fila row2 bgded">
        <div class="col-6">            
            <figure>
                  <a href="https://m15assets.s3.amazonaws.com/demos/JocToniComprimit.zip">
                    <img src="/images/jocCotxesT.png" alt="link">
                  </a>
            </figure>
        </div>

        <div class="col-6">
            <article>
                <h3 align="center">Joc de curses</h3>
                <ul>
					<p align="justify">
						Agent especial ******************** TONI ******************** </p>
                    <p align="justify">    
                        Joc 3D multiplayer de l'estil Mario Kart que a l'agafar les recompenses et sortir&agrave; una pregunta ja sigui de matem&agrave;tiques o de qualsevol altre assignatura, si la acertes et donar&agrave; alguna avantatge i sin&oacute; una desavantatge.<br><br>
                        Potser podr&iacute;em posar un r&agrave;nking on hi hauran els diferents jugadors classificats per el temps de la carrera aix&iacute; es podr&agrave; comprovar el temps dels alumnes ordenats.<br><br>
                        Per provar la demo tingues en compte que et baixar&agrave; un arxiu comprimit, el descomprimeixes.
                        Cliques:  <em>demo_pc_toni</em> i doble click a <em>JocFinal.exe</em><br><br>
                        Probablement canviar&eacute; el circuit i el tipus de cotxes.
                    </p>
                </ul>
            </article>
        </div>        
    </div>
    
<!-- ..........................................final TONI................................................... -->
    
<!-- **************************************************** DANI M********************************************************** -->
    
    <div class="fila row2 bgded">
        <div class="col-6">
            <figure>
                <a href="https://m15assets.s3.amazonaws.com/demos/JocDaniMComprimit.zip">
                    <img src="/images/jocDaniM.png" alt=" ">
                 </a>
            </figure>
        </div>
        
        <div class="col-6">
            <article>
                <h3 align="center">SPACE PLATFORM</h3>
                <ul>
                    <p align="justify">
                        Agent especial ******************** DANI M ******************** </p>
                    <p align = "justify">
                        És un joc orientat a la capacitat de relació i percepció de conceptes que poden tenir els nens en una serie de puzzles | problemes. 
                        Per iniciar el joc "el cub", has d'entrar i dintre d'aquest cub, ets dintre d'un cub mes petit. L'objectiu es sortir de tots els cubs que composen el cub major mitjançant problemes, endevinalles o relacions lògiques.
                    </p>
                </ul>
            </article>
        </div>
    </div>
<!-- ..........................................final DANI M................................................... -->
    
<!-- ****************************************************JOCSAN********************************************************** -->

    <div class="fila row2 bgded">
        <div class="col-6">
            <figure>
                    <a href="https://m15assets.s3.amazonaws.com/demos/JocJocsanComprimit.exe">
                        <img src="../images/jocJocs.png" alt=" ">
                    </a>
            </figure>
        </div>
        
        <div class="col-6">
            <article>
                <h3 align="center">Joc Primera Persona</h3>
                <ul>
					<p align="justify">
						Agent especial ******************** JOCSAN ******************** </p>
                    <p align = "justify">El juego se basar&aacute; en un mundo abierto en el que se encontraran diferentes objetos, estos objetos representan desaf&iacute;os a superar para poder avanzar en el juego y tambi&eacute;n se encontrar&aacute;n diferentes enemigos que tendr&aacute;n que ser destruidos para conseguir puntos y ganar el juego.<br>
                    Es un juego en primera persona y para un &uacute;nico jugador.</p>

                    <dl align = "justify">
                        <dt>
                            <strong>INTERACCI&Oacute;N CON OBJETOS</strong>
                        </dt>
                        <dd>
                            <br>Al interactuar con los objetos del mapa se desplegar&aacute;n diferentes preguntas de cualquier tipo, ya   sean de matem&aacute;ticas, ciencias, geograf&iacute;a.
                            Si la respuesta de la pregunta es correcta obtendr&aacute;s una cantidad de puntos, de ser lo contrario y te equivocas en varias preguntas seguidas se penalizar&aacute;.
                        </dd>
                        
                        <br>
                        <dt>
                            <strong>ENEMIGOS</strong>
                        </dt>
                        <dd>
                            <br>El mapa tendr&aacute; diferentes tipos de enemigos, de esta  forma se agrega m&aacute;s dificultad y dinamismo al juego,  a lo largo del juego tendr&aacute;s que ganar puntos para    conseguir mejores objetos y poder hacerles frente.
                        </dd>
                        
                        <br>
                        <dt>
                            <strong>OBJETIVO DEL JUEGO</strong>
                        </dt>
                        <dd>
                            <br>El objetivo del juego es ganar la cantidad m&aacute;xima de puntos en un tiempo establecido.
                        </dd>
                        
                        <br>
                        <dt>
                            <strong>FINALIDAD DEL JUEGO</strong>
                        </dt>
                        <dd>
                            <br>En resumen el juego es una combinaci&oacute;n entre entretenimiento y aprendizaje a la vez.
                        </dd>
                    </dl>
                </ul>
            </article>
        </div>
    </div>
<!-- ..........................................finalJOCSAN................................................... -->
    
<!-- ****************************************************IVAN********************************************************** -->
    <div class="fila row2 bgded">
        <div class="col-6">
            <figure>
                <!--<li>-->
                    <a href="https://m15assets.s3.amazonaws.com/demos/JocIvanComprimit.zip">
                        <img src="../images/jocIvan.png" alt=" ">
                    </a>
                <!--</li>-->
            </figure>
        </div>
        
        <div class="col-6">
            <article>
                <h3 align="center">Joc Plataformes 2D</h3>
                <ul>
					<p align="justify">
						Agent especial ******************** IVAN ******************** </p>      
                    <dl align="justify">
                        <dt>
                            <strong>DESCRIPCI&Oacute;N</strong>
                        </dt>
                        <dd> 
                            <br>Unknown Planet es un juego 2D b&aacute;sico y f&aacute;cil.<br>
                            Cuando el juego es iniciado, el jugador es llevado a un men&uacute;, donde puede bajar el volumen de la musica, empezar a jugar, o salir del juego directamente.
                            Si decide jugar, estar&aacute; entrando al juego 2D.
                            El juego consta de 2 niveles de dificultad muy f&aacute;cil, el juego es de un jugador.
                        </dd>
                            
                        <br>
                        <dt>
                            <strong>NIVELES</strong>
                        </dt>
                        <dd>
                            <br>En los distintos niveles hay distintos enemigos que te atacan. El jugador muere cuando pierde las 5 vidas que tiene.
                        </dd>
                            
                        <br>
                        <dt>
                            <strong>OBJETIVOS</strong>
                        </dt>
                        <dd>
                            <br>El objetivo del juego es llegar al portal de cada nivel derrotando a los distintos enemigos para terminar ganando.
                        </dd>
                    </dl>
                    
                </ul>
            </article>
        </div>
    </div>

<!-- ..........................................IVAN................................................... -->
    
<!-- ****************************************************JULIA********************************************************** -->

    <div class="fila row2 bgded">
        <div class="col-6">
            <figure>
                <img src="../images/fotoRA.jpg" alt=" ">
                    <!--<a href="../demos/">
                        <img src="../demos/images/jocJocs.png" alt=" ">
                    </a>-->
            </figure>
        </div>
        
        <div class="col-6">
            <article>
                <h3 align="center">Joc en Realitat Augmentada</h3>
                <ul>
					<p align="justify">
						Agent especial ******************** JULIA ******************** </p>
                    <p align="justify">
                        Els objectius del joc seran rec&oacute;rrer una poblaci&oacute; o anar a uns edificis, parcs, places... en concret per a estudiar sobre una mat&egrave;ria a partir de visitar espais que en tinguin relaci&oacute;,  i tot seguit respondre'n  unes preguntes o b&eacute; recollir virtualment uns objectes que m&eacute;s endavant li serviran per a crear coses, o contestar-ne unes preguntes despr&eacute;s d'haver-lo investigat. <br><br>
                        Per a fer-lo mes entretingut, el jugador, segons els llocs on hagi anat i els objectes que hagi trobat per la poblaci&oacute; o zones visitades, podr&agrave; escollir si vol desbloquejar unes missions amb el que hagi recollit i els llocs on ha anat, o esperar a tenir-ne m&eacute;s i de millors. I si vol esperar primer a respondre les preguntes sobre una altre cosa. <br><br>
                        D'aquesta manera el jugador podr&agrave; escollir l'ordre que seguir&agrave; el joc segons el que li sembli adient, el que m&eacute;s li agradi o el que prefereixi. I anar construint-se el seu propi joc a partir del que obtingui en moure's per el carrer. <br><br>
                        Una vegada ja hagi visitat tots els espais d'inter&egrave;s, se li far&agrave; respondre unes preguntes de redactar o tipus test en relaci&oacute; al contingut del joc, per aix&iacute; poder saber si ha apr&egrave;s alguna cosa en relaci&oacute; al temari.
                    </p>
                </ul>
            </article>
        </div>
    </div>
<!-- ..........................................final JULIA................................................... -->
    
<!--****************************************************ALEX**********************************************************-->
    
    <div class="fila row2 bgded">
        <div class="col-6">
            <figure>
                    <a href="../demos/Alex/Demo_SunnyLand/index.html">
                        <img src="/images/sunnyLand.png" alt=" ">
                    </a>
            </figure>
        </div>
        
        <div class="col-6">
            <article>
                <h3 align="center">Joc de plataformes 2D</h3>
                <p align="justify">
						Agent especial ******************** ALEX ******************** </p>
                <dl align = "justify">
                    <dt><strong>DESCRIPCIÓ:</strong></dt>
                    <dd><br>Joc de plataformes en 2 dimensions amb diseny pixelart pensat per fer multiples nivells.</dd>
                    <br>
                    <dt>CONTROLS: </dt>
                    <dd>
                        <br>
                        Nomes fa falta que cliques sosbre el joc i ja s'obrira. <br> <br>
                        &rarr;  W:   saltar <br>
                        &rarr;  A/D: esquerra/dreta <br>
                        &rarr;  S:   ajupir
                    </dd>
                </dl>
            </article>
        </div>
    </div>
<!--..........................................final ALEX................................................... -->

<!-- ****************************************************DANI A********************************************************** -->

    <div class="fila row2 bgded">
        <div class="col-6">
            <figure>
                <a href="https://m15assets.s3.amazonaws.com/demos/JocDaniAComprimit.zip">
                    <img src="../images/Imatge.png" alt=" ">
                 </a>
            </figure>
        </div>
        
        <div class="col-6">
            <article>
                <h3 align="center">Sleep at the forest</h3>
				<p align="justify">
						Agent especial ******************** DANI A ******************** </p>
                <p align = "justify">
                    Dins un bosc realista, has anat a acampar a una cabana amb els amics i de cam&iacute; a aquesta, ells s'han separat de tu buscant un animal estrany. Segueixes sol al mig del bosc i s'est&aacute; fent fosc. Comen&ccedil;a la teva aventura, has de buscar la cabana per refugiar-te, passar la nit i haur&agrave;s de sobreviure al bosc fins a poder tornar a casa.
                </p>
            </article>
        </div>
    </div>
<!-- ..........................................final DANI A................................................... -->

<!-- **************************************************** ALEX SMX *************************************************** -->

    <div class="fila row2 bgded">
        <div class="col-6">
            <figure>
                <a href="../demos/AlexSmx/index.html">
                    <img src="../images/jocAlexSmx.png" alt=" ">
                 </a>
            </figure>
        </div>
        
        <div class="col-6">
            <article>
                <h3 align="center">Joc Plataformes 2D</h3>
                <p align="justify">
			
				</p>
            </article>
        </div>
    </div>
<!-- ..........................................final ALEX SMX................................................... -->

	
	
<!-- *******************************************FRANCESC SMX *************************************************** -->

 <div class="fila row2 bgded">
        <div class="col-6">
            <figure>
                <a href="../demos/arturo/index.html"><img src="../images/arturo.png" alt=" "></a>
            </figure>
        </div>
        
        <div class="col-6">
            <article>
                <h3 align="center">Joc tipus QUIZ</h3>
                <p align = "justify">                    
                </p>
            </article>
        </div>
    </div> 
<!-- ..........................................final FRANCESC SMX................................................... -->	
 <!-- ########################<div class="overlay">#################################################### -->
<!-- JAVASCRIPTS -->
    <script src="layout/scripts/jquery.min.js"></script> 
    <script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>