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
               <!--  <li><a href="#">Link 2</a></li>
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
                    <li><a href="/pages/gallery.php">Galeria </a></li>
					 <li><a class="active" href="/pages/dam.php">DAM/SMX</a></li>
                <!--    <li><a class="drop" href="#">DAM</a>
                        <ul>
                            <li><a href="/pages/dam.php">plantilla per alumne</a></li>
                            <!-- <li><a href="pages/full-width.html">Full Width</a></li>
                            <li><a href="pages/sidebar-left.html">Menú a l'esquerra</a></li>
                            <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
                            <li><a href="pages/basic-grid.html">Gralla bàsica</a></li>
                        </ul>
                    </li> -->
                    <!--<li><a class="drop" href="#">Dropdown</a>
                        <ul>
                            <li><a href="#">Level 2</a></li>
                            <li><a class="drop" href="#">Level 2 + Drop</a>
                            <ul>
                                <li><a href="#">Level 3</a></li>
                                <li><a href="#">Level 3</a></li>
                            </ul>
                        </li>
                    </ul>
        </li>-->
          
                    <li><a class="drop" href="#">MEP/MEI</a>
                        <ul>
                            <li><a href="#">plantilla per alumne</a></li>
                            <!-- <li><a href="pages/full-width.html">Full Width</a></li>
                            <li><a href="pages/sidebar-left.html">Menú a l'esquerra</a></li>
                            <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
                            <li><a href="pages/basic-grid.html">Gralla bàsica</a></li>-->
                        </ul>
                    </li>
                    <li><a href="/pages/full-width.php">XAT </a></li>
                </ul>
            </nav>
            <nav id="mainav" class="fl_center">
                <img src = "/textstyle/ElLaboratori.png" style="width:30%"> 
            </nav>
    <!-- ################################################################################################ -->
        </header>
    </div>

<!-- ########################<div class="overlay">#################################################### 
<div class="row2 bgded" style="background-image:url('images/SceneRegistre.jpg');">-->
 
	

<!-- **************************************************  1 -  ERIC************************************************** -->
    
    <div class="fila row2 bgded" >
        <div class="col-4">
            <figure>
                    <a href="../demos/Eric/ProjecteUni/index.html">
                        <img src= "/images/JocCartesE.png" alt="">
                    </a>
            </figure>
        </div>
        
        <div class="col-4">
            <article>
                <h3 align="center">Joc de cartes</h3>
                <ul>
                    <p align="justify">
                        Joc de cartes, que pot ser multijugador, o individual (IA) modificar la teva baralla de cartes.
                    </p>
                </ul>
            </article>
        </div>
        
       <div class="col-4">
   <div id="Xat_Eric"><a href="http://www.phpfreechat.net">Mini Xat</a></div>
        <script type="text/javascript">
                     $('#Xat_Eric').phpfreechat({ serverUrl: '/phpfreechat-2.1.0/server' });
        </script>  

  </div>  
 </div>
<!-- ......................................final ERIC........................................-->
    
<!-- ***********************************************  2 - MINGO  **************************************************** -->
    
    <div class="fila row2 bgded">
        <div class="col-4">
            <figure>
                    <a href="https://m15assets.s3.amazonaws.com/demos/JocMingoComprimit.zip">
                        <img src="/images/jocCotxesM.png" alt=" ">
                    </a>
            </figure>
        </div>
        
        <div class="col-4">
            <article>
                <h3 align="center">Simulador curses 3D</h3>
                <ul>
                    <p align="justify">
                        El demo es un simulador de curses en 3D.
                        Segons les preferencies es podra jugar sol o contra
                        altra gent en mode online.
                    </p>
                </ul>
            </article>
        </div>
        
     <div class="col-4">
     <div id="Xat_Mingo"><a href="http://www.phpfreechat.net">Mini Xat</a></div>
        <script type="text/javascript">
                     $('#Xat_Mingo').phpfreechat({ serverUrl: '/phpfreechat-2.1.0/server' });
        </script>    
  </div> 
 </div>
    
  <!-- ..........................................final MINGO................................................... -->   
 <!-- ......................................... 3 --- ISLANDS................................................... --> 
    
    <div class="fila row2 bgded">
        <div class="col-4">
            <figure>
                    <a href="../demos/island/buildwgl/index.html">
                        <img src="/images/island.PNG" alt=" ">
                    </a>
            </figure>
        </div>
        
        <div class="col-4">
            <article>
                <h3 align="center">Island 3d</h3>
                <ul>
                    <p align="justify">
                        El demo tracta sobre un jugador, en primera persona, que 
                        haur&agrave; de recorrer i descobrir els diferents llocs de l'illa 
                        on es troba per aconseguir diferents recompenses gr&agrave;cies a 
                        proves i minijocs que el jugador anir&agrave; trobant mentre explora l'illa.
                    </p>
                </ul>
            </article>
        </div>
        
        <div class="col-4">
            <div id="Xat_Island">
                <a href="http://www.phpfreechat.net">Mini Xat</a>
            </div>
            <script type="text/javascript">
                $('#Xat_Island').phpfreechat({ serverUrl: '/phpfreechat-2.1.0/server' });
            </script>
        </div>
    </div>
    

    
<!-- ************************************************** 4-TONI  COTXE   ************************************************** -->
    
    <div class="fila row2 bgded">
        <div class="col-4">
            
            <figure>
                  <a href="https://m15assets.s3.amazonaws.com/demos/JocToniComprimit.zip">
                        <img src="/images/jocCotxesT.png" alt="link">
                  </a>
            </figure>
        </div>

        <div class="col-4">
            <article>
                <h3 align="center">Joc de curses</h3>
                <ul>
                    <p align="justify">
                        Joc 3D multiplayer de l'estil Mario Kart que a l'agafar les recompenses et sortir&agrave; una pregunta ja sigui de matem&agrave;tiques o de qualsevol altre assignatura, si l'encertes et donar&agrave; alguna avantatge i sin&oacute; una desavantatge.<br><br>
                        Probablement canviar&eacute; el circuit i el tipus de cotxes.
                    </p>
                </ul>
            </article>
        </div>        
        
        <div class="col-4">
            <div id="Xat_Toni">
                <a href="http://www.phpfreechat.net">Mini Xat</a>
            </div>
            <script type="text/javascript">
               $('#Xat_Toni').phpfreechat({ serverUrl: '/phpfreechat-2.1.0/server' });
            </script>
        </div>
    </div>
    
<!-- ..........................................final TONI................................................... -->
    
<!-- **************************************************** DANI M********************************************************** -->
    
    <div class="fila row2 bgded">
        <div class="col-4">
            <figure>
                    <a href="../demos/DaniM/Demo_damdmartinez/Videojuego_Edukatibo.exe">
                        <img src="/images/jocDaniM.png" alt=" ">
                    </a>
            </figure>
        </div>
        
        <div class="col-4">
            <article>
                <h3 align="center">SPACE PLATFORM</h3>
                <ul>
                    <p align="justify">
                        
                    </p>
                </ul>
            </article>
        </div>
        
        <div class="col-4">
            <div id="Xat_DaniM">
                <a href="http://www.phpfreechat.net">Mini Xat</a>
            </div>
            <script type="text/javascript">
                $('#Xat_DaniM').phpfreechat({ serverUrl: '/phpfreechat-2.1.0/server' });
            </script>
        </div>
    </div>
<!-- ..........................................final DANI M................................................... -->
    
<!-- ****************************************************JOCSAN********************************************************** -->

    <div class="fila row2 bgded">
        <div class="col-4">
            <figure>
                    <a href="https://m15assets.s3.amazonaws.com/demos/JocJocsanComprimit.zip">
                        <img src="../images/jocJocs.png" alt=" ">
                    </a>
            </figure>
        </div>
        
        <div class="col-4">
            <article>
                <h3 align="center">Joc Primera Persona</h3>
                <ul>
                    <p align="justify">
                        El juego se basar&aacute; en un mundo abierto en el que se encontraran diferentes objetos, estos objetos representan desaf&iacute;os a superar para poder avanzar en el juego y tambi&eacute;n se encontrar&aacute;n diferentes enemigos que tendr&aacute;n que ser destruidos para conseguir puntos y ganar el juego.<br><br>
                        Es un juego en primera persona y para un &uacute;nico jugador.
                    </p>
                </ul>
            </article>
        </div>
        
        <div class="col-4">
            <div id="Xat_Jocsan">
                <a href="http://www.phpfreechat.net">Mini Xat</a>
            </div>
            <script type="text/javascript">
               $('#Xat_Jocsan').phpfreechat({ serverUrl: '/phpfreechat-2.1.0/server' });
            </script>
        </div>
    </div>

<!-- ..........................................finalJOCSAN................................................... -->
    
<!-- ****************************************************IVAN********************************************************** -->
    <div class="fila row2 bgded">
        <div class="col-4">
            <figure>
                <!--<li>-->
                    <a href="https://m15assets.s3.amazonaws.com/demos/JocIvanComprimit.zip">
                        <img src="../images/jocIvan.png" alt=" ">
                    </a>
                <!--</li>-->
            </figure>
        </div>
        
        <div class="col-4">
            <article>
                <h3 align="center">Joc Plataformes 2D</h3>
                <ul>
                    <p align="justify">
                        El meu joc es un joc 2D, &eacute;s d'un sol jugador, tracta de passar els nivells amb un seguit de trampes i enemics, &eacute;s d'alta dificultat, el personatge consta de 5 vides. <br><br>Per passar de nivell s'ha d'arribar als portals.
                    </p>
                </ul>
            </article>
        </div>
        
        <div class="col-4">
            <div id="Xat_Ivan">
                <a href="http://www.phpfreechat.net">Mini Xat</a>
            </div>
            <script type="text/javascript">
                $('#Xat_Ivan').phpfreechat({ serverUrl: '/phpfreechat-2.1.0/server' });
            </script>
        </div>
    </div>

<!-- ..........................................IVAN................................................... -->
    
<!-- ****************************************************JULIA********************************************************** -->

    <div class="fila row2 bgded">
        <div class="col-4">
            <figure>
                <img src="../images/fotoRA.jpg" alt=" ">
                    <!--<a href="../demos/">
                        <img src="../demos/images/jocJocs.png" alt=" ">
                    </a>-->
            </figure>
        </div>
        
        <div class="col-4">
            <article>
                <h3 align="center">Joc Realitat Augmentada</h3>
                <ul>
                    <p align="justify">
                        Buscar objectes en una poblaci&oacute;, o visitar espais d'inter&egrave;s. <br><br>
                        El jugador haur&agrave; de triar el cam&iacute;  que vulgui seguir segons les seves decisions i els objectes que hagi trobat, o als llocs on hagi anat. <br> A partir dels objectes trobats i recollits, o llocs on hagi anat,  es  desbloquejaran missions a completar a partir de trobar m&eacute;s objectes, visitar m&eacute;s zones, o contestar unes preguntes. On el jugador estar&agrave; escollint diferents opcions per decidir el cam&iacute; que voldr&agrave; seguir per a completar el joc.                        
                        <br><br> Una vegada desbloquejats tots els objectius del cam&iacute; que s'hagi triat, s'hauran de superar totes les preguntes relacionades amb el temari de les missions assolides.
                    </p>
                </ul>
            </article>
        </div>
        
        <div class="col-4">
            <div id="Xat_Julia">
                <a href="http://www.phpfreechat.net">Mini Xat</a>
            </div>
            <script type="text/javascript">
                $('#Xat_Julia').phpfreechat({ serverUrl: '/phpfreechat-2.1.0/server' });
            </script>
        </div>
    </div>
<!-- ..........................................final JULIA................................................... -->
    
<!--****************************************************ALEX**********************************************************-->
    
    <div class="fila row2 bgded">
        <div class="col-4">
            <figure>
                    <a href="../demos/Alex/Demo_SunnyLand/index.html">
                        <img src="/images/sunnyLand.png" alt=" ">
                    </a>
            </figure>
        </div>
        
        <div class="col-4">
            <article>
                <h3 align="center">Joc de plataformes 2D</h3>
                <p align = "justify">
                     
                </p>
            </article>
        </div>
        
        <div class="col-4">
            <div id="Xat_Alex">
                <a href="http://www.phpfreechat.net">Mini Xat</a>
            </div>
            <script type="text/javascript">
                $('#Xat_Alex').phpfreechat({ serverUrl: '/phpfreechat-2.1.0/server' });
            </script>
        </div>
    </div>
<!--..........................................final ALEX................................................... -->

<!-- ****************************************************DANI A********************************************************** -->

    <div class="fila row2 bgded">
        <div class="col-4">
            <figure>
                <a href="../demos/DaniA/001Joc/IndevBuild/SleepattheForest.exe">
                    <img src="../images/Imatge.png" alt=" ">
                 </a>
            </figure>
        </div>
        
        <div class="col-4">
            <article>
                <h3 align="center">Sleep at the forest</h3>
                <p align = "justify">
                    Dins un bosc realista, has anat a acampar a una cabana amb els amics i de cam&iacute; a aquesta, ells s'han separat de tu buscant un animal estrany. Segueixes sol al mig del bosc i s'està fent fosc. Comen&ccedil;a la teva aventura, has de buscar la cabana per refugiar-te, passar la nit i haur&agrave;s de sobreviure al bosc fins a poder tornar a casa.
                </p>
            </article>
        </div>
        
        <div class="col-4">
            <div id="Xat_DaniA">
                <a href="http://www.phpfreechat.net">Mini Xat</a>
            </div>
            <script type="text/javascript">
            $('#Xat_DaniA').phpfreechat({ serverUrl: '/phpfreechat-2.1.0/server' });
            </script>
        </div>
    </div>
<!-- ..........................................final DANI A................................................... -->

<!-- **************************************************** ALEX SMX *************************************************** -->

    <div class="fila row2 bgded">
        <div class="col-4">
            <figure>
                <a href="../demos/AlexSmx/index.html">
                    <img src="../images/jocAlexSmx.png" alt=" ">
                 </a>
            </figure>
        </div>
        
        <div class="col-4">
            <article>
                <h3 align="center">Joc Plataformes 2D</h3>
                <p align = "justify">
                    
                </p>
            </article>
        </div>
        
        <div class="col-4">
            <div id="Xat_AlexM">
                <a href="http://www.phpfreechat.net">Mini Xat</a>
            </div>
            <script type="text/javascript">
               $('#Xat_AlexM').phpfreechat({ serverUrl: '/phpfreechat-2.1.0/server' });
            </script>
        </div>
    </div>
<!-- ..........................................final ALEX SMX................................................... -->

	
	
<!-- *******************************************FRANCESC SMX *************************************************** -->

 <div class="fila row2 bgded">
        <div class="col-4">
            <figure>
                <a href="../demos/francesc/index.html"><img src="../images/Imatge.png" alt=" "></a>
            </figure>
        </div>
        
        <div class="col-4">
            <article>
                <h3 align="center">Joc Plataformes 2D</h3>
                <p align = "justify">                    
                </p>
            </article>
        </div>
        
        <div class="col-4">
            <div id="alex"><a href="http://www.phpfreechat.net">Mini Xat</a></div>
            <script type="text/javascript">$('#alex).phpfreechat({ serverUrl: '/phpfreechat-2.1.0/server' });
            </script>
        </div>
    </div> 
<!-- ..........................................final FRANCESC SMX................................................... -->	
 <!-- ########################<div class="overlay">#################################################### -->
<!-- JAVASCRIPTS -->
    <script src="layout/scripts/jquery.min.js"></script> 
    <script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>