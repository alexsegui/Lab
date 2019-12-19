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
  		<!-- ############################### INICI XAT ####################  -->
		<!--    html    -->
   		<script src="/phpfreechat-2.1.0/client/lib/jquery-1.8.2.min.js" type="text/javascript"></script>
  		<link rel="stylesheet" type="text/css" href="/phpfreechat-2.1.0/client/themes/carbon/jquery.phpfreechat.min.css" />
  		<script src="/phpfreechat-2.1.0/client/jquery.phpfreechat.min.js" type="text/javascript"></script>
  		<!--  ##############################   FI XAT   ###################   -->

    	<title>Propostes</title>

    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    	<link href="/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
	</head>

	<body id="top">

		<?php $avat = $_SESSION['avat']; ?>

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

         		<div class="fl_left">
					Usuari/a:
					<?php echo "<img src = /images/avatar/" . $avat . ".png style=width:20%>"?>
		   			<a href="/sortir.php">-- Sortir --</a>
            	</div>

           		<div class="fl_right">
                	<ul class="nospace linklist">
                    	<li> <i class="fa fa-phone">      </i> 65 75 85 266     </li>
                    	<li> <i class="fa fa-envelope-o"> </i> jferna6@xtec.cat </li>
               		</ul>
            	</div>

            	<br><br>

	    		<div class="fl_right">
            		<ul class="nospace linklist"> 
                		<li> <a href="#">Comunicat               </a> </li>
                		<li> <a href="/pages/full-width.php">Xat </a> </li>
                		<li> <a href="#">Tutorials               </a> </li>
            		</ul>
        		</div>

        	</div>
    	</div>

<!-- ################################################################################################ -->

    	<div class="wrapper row1">
        	<header id="header" class="clear"> 

            	<nav id="mainav" class="fl_left">
                	<img src = "/images/UDGPalamos.gif" style="width:20%"> 
            	</nav>
              	
              	<nav id="mainav" class="fl_right">
      				<ul class="clear">
        				<li class="active"> <a href="/index.php">                    Inici     </a></li>
        				<li>                <a href="/pages/gallery.php">            Galeria   </a></li>
		 				<li>                <a class="active" href="/pages/dam.php"> DAM/SMX   </a></li>
						<li>                <a class="active" href="/pages/mep.php"> MEP/MEI   </a></li>       
        				<li>                <a href="/pages/propostes.php">          En curs   </a></li>
      				</ul>
    			</nav>

				<nav id="mainav" class="fl_center">
      				<img src = "/textstyle/ElLaboratori.png" style="width:258px;height:54px"> 
    			</nav>

        	</header>
    	</div>

<!-- ########################<div class="overlay">####################################################
<div class="row2 bgded" style="background-image:url('images/SceneRegistre.jpg');">-->
	

<!-- ___________________________________________________     I JOC PLANTES      ________________________________________________ -->

    	<div class="fila row2 bgded">

        	<div class="col-6">
            	<figure><img src= "/images/BotanicGO.jpg" alt="Imatge del joc de plantes." style="width:550px; height: 550px"></figure>
        	</div>
        
        	<div class="col-6">
            	<article>
                	<h3 align="center">Botanic GO</h3>
                	<ul>
                    	<p align="center"><em><img  src="/images/avatar/14.png" alt="Avatar"><img  src="/images/avatar/56.png" alt="Avatar"></em></p>
					 	<p align="justify">
	                   		- Crea el teu herbolari digital.<br><br>
	                   		- Fes una foto a les plantes de la teva zona, classifica-les, penja-les i espera a que el teu professor te les validi.<br><br>
	                   		- Joc basat en realitat augmentada i geolocalitzat.<br><br>
	                   		- Orientat en educaci&oacute; infantil on han de distingir planta, tija, arrel, flor, fruits... passant per prim&agrave;ria on estudien els tipus de plantes, arribant fins a secund&agrave;ria i a la universitat.<br><br>
                    	</p>
                	</ul>
					
            	</article>
        	</div>  

   		</div>

<!-- ___________________________________________________     F JOC PLANTES      ________________________________________________ -->


<!-- ______________________________________________     I JOC Create and Destroy     ___________________________________________ -->

     	<div class="fila row2 bgded">

        	<div class="col-6">
            	<figure><img src="/images/catapulta.jpg" alt="Imatge del joc de la catapulta." style="width:550px; height: 550px"></figure>
        	</div>
        
        	<div class="col-6">
            	<article>
                	<h3 align="center">Create and Destroy</h3>
                	<ul>
                    	<p align="center"><em><img  src="/images/avatar/65.png" alt="Avatar"><img  src="/images/avatar/PdteMEP.png" alt="Avatar"></em></p>
						<p align="justify">
							- Crea la teva ciutat i destrueix la del teu company.<br><br>
							- A mesura que se superin reptes, el professor facilitar&agrave; objectes per a la batalla final.<br><br>
                        	- Orientat a infantil i prim&agrave;ria, i espec&iacute;ficament a secund&agrave;ria en el desenvlupament de la f&iacute;sica.<br><br>
                    	</p>
                	</ul>
            	</article>
        	</div>

		</div>
    
 <!-- _____________________________________________     F JOC Create and Destroy     ___________________________________________ -->  


 <!-- __________________________________________________ I JOC ITINERARI QUíMIC ________________________________________________ --> 

    	<div class="fila row2 bgded">

        	<div class="col-6">
            	<figure><img src="/images/fotoIntinerari.png" alt="Imatge del joc d'itinerari Quimic." style="width:550px; height: 410px"></figure>
        	</div>
        
        	<div class="col-6">
            	<article>
                	<h3 align="center">Itinerari Qu&iacute;mic</h3>
                	<ul>
					<p align="center"><em><img  src="/images/avatar/66.png" alt="Avatar"><img  src="/images/avatar/PdteMEP.png" alt="Avatar"></em></p>
                    	<p align="justify">
                    		- Apr&egrave;n qu&iacute;mica recorrent 16 racons de Girona.<br><br>
                        	- Orientat a secund&agrave;ria (3r i 4t eso). Per&ograve; tamb&eacute; pot ser per a universitat o prim&agrave;ria.<br><br>
                        	- Un recorregut on ens trobarem realitat augmentada a cada un dels 16 punts que haurem de visitar i tamb&eacute; geolocalitzarem la posici&oacute; del dispositiu.<br><br>
                        </p>
                	</ul>
            	</article>
        	</div>

    	</div>

<!-- _________________________________________________ F JOC ITINERARI QUíMIC __________________________________________________ -->   

        
<!-- _____________________________________________     I JOC LABORATORI QUíMIC    ______________________________________________ --> 
        
    	<div class="fila row2 bgded">

        	<div class="col-6">
            	<figure><img src="/images/jocLaboratoriQuimic.jpg" alt=" " style="width:550px; height: 450px"></figure>
        	</div>
            
        	<div class="col-6">
            	<article>
                	<h3 align="center">LABORATORI QU&Iacute;MIC</h3>
                	<ul>
                    	<p align="center"><em><img  src="/images/avatar/61.png" alt="Avatar"><img  src="/images/avatar/PdteMEP.png" alt="Avatar"></em></p>
                    	<p align="justify">
                    		- Est&agrave;s en un laboratori i has d'aconseguir sortir. Interactua amb els objectes que t'envolten.<br><br>
                        	- Orientat a secund&agrave;ria.<br><br>
                        	- Joc RPG.<br><br>
                        </p>
                	</ul>
            	</article>
        	</div>

    	</div>

<!-- _____________________________________________      F JOC LABORATORI QUíMIC      ___________________________________________ --> 
        
        
<!-- _________________________________________________     I JOC MINECRAFT   _____________________________________________-_____ --> 

    	<div class="fila row2 bgded">

        	<div class="col-6">
            	<figure><img src="/images/jocMinecraft.png" alt=" " style="width:550px; height: 550px"></figure>
        	</div>
            
        	<div class="col-6">
            	<article>
                	<h3 align="center">MINECRAFT</h3>
                	<ul>
					<p align="center"><em><img  src="/images/avatar/59.png" alt="Avatar"><img  src="/images/avatar/PdteMEP.png" alt="Avatar"></em></p>
                    	<p align="justify">
                    		- Aconsegueix sueprar nivells a partir de construir i destruir objectes.<br><br>
                        	- Orientat a prim&agrave;ria.<br><br>
                        	- Joc RPG.<br><br>
                        </p>
                	</ul>
            	</article>
        	</div>

    	</div>

<!-- ________________________________________________      F JOC MINECRAFT      ______________________________________________ --> 
        
        
<!-- ________________________________________________    I JOC ELEMENTALS    _________________________________________________ --> 

    	<div class="fila row2 bgded">

        	<div class="col-6">
            	<figure><img src="/images/Elementals.jpg" alt=" " style="width:550px; height: 450px"></figure>
        	</div>
            
        	<div class="col-6">
            	<article>
                	<h3 align="center">ELS ELEMENTALS</h3>
                	<ul>
                    	<p align="center"><em><img  src="/images/avatar/29.png" alt="Avatar"><img  src="/images/avatar/PdteMEP.png" alt="Avatar"></em></p>
                    	<p align="justify">
                    		- Converteix-te en un element de la taula peri&ograve;dica, crea mol·l&egrave;cules i reacciona amb els teus companys.<br><br>
                        	- Orientat a secund&agrave;ria (3r ESO). L'&agrave;tom, enllaços qu&iacute;mics, estequiometria i reaccions qu&iacute;miques.<br><br>
                        	- Joc multijugador, cooperatiu, basat en realitat augmentada.<br><br>
                        </p>
                	</ul>
            	</article>
        	</div>

    	</div>

 <!-- _______________________________________________      F JOC ELEMENTALS      _____________________________________________ --> 
        
<!-- ________________________________________________    I JOC CURSA DE COTXES    _________________________________________________ --> 

    	<div class="fila row2 bgded">

        	<div class="col-6">
            	<figure><img src="/images/Mecarace%20-%20Team%20Silicona.PNG" alt=" " style="width:550px; height: 450px"></figure>
        	</div>
            
        	<div class="col-6">
            	<article>
                	<h3 align="center">JOC DE CURSES</h3>
                	<ul>
                    	<p align="center"><em><img  src="/images/avatar/" alt="Avatar"><img  src="/images/avatar/PdteMEP.png" alt="Avatar"></em></p>
                    	<p align="justify">
                    		- El vehicle avança a mesura de que es responen les pregunes correctament, o mitjançant la velocitat d'escriptura. L'idea es agilitzar el temps de resposta i escriptura d'un jugador.<br><br>
                        	- Orientat a primaria i secundaria.<br><br>
                        	- Joc multijugador<br><br>
                        </p>
                	</ul>
            	</article>
        	</div>

    	</div>

 <!-- _______________________________________________      F JOC CURSA DE COTXES      _____________________________________________ -->
        
        
<!-- ________________________________________________    I JOC ENDOGAME    _________________________________________________ --> 

    	<div class="fila row2 bgded">

        	<div class="col-6">
            	<figure><img src="/images/EndoGame.png" alt=" " style="width:550px; height: 450px"></figure>
        	</div>
            
        	<div class="col-6">
            	<article>
                	<h3 align="center">EndoGame</h3>
                	<ul>
                    	<p align="center"><em><img  src="/images/avatar/" alt="Avatar"><img  src="/images/avatar/PdteMEP.png" alt="Avatar"></em></p>
                    	<p align="justify">
                    		- EndoGame és un joc que es tracta en el rescat de Emily, emily està atrapada per zombies després d'un
                            apocalipsis, el seu millor amic Endo haurà de lluitar pel seu rescat en el qual tindrá que enfrontar-se
                            contra obstacles i zombies, Endo haurà de trobar la clau correcta per salvar-la.<br><br>
                        	- Orientat per a alumnes de primària i secuandaria.<br><br>
                        	- EndoGame és un joc basat en 3D, RPG.<br><br>
                        </p>
                	</ul>
            	</article>
        	</div>

    	</div>

 <!-- _______________________________________________      F JOC ENDOGAME      _____________________________________________ -->
        
<!-- ________________________________________________    I JOC BattleQuest    _________________________________________________ --> 

    	<div class="fila row2 bgded">

        	<div class="col-6">
            	<figure><img src="/images/BattleQuest.png" alt=" " style="width:550px; height: 450px"></figure>
        	</div>
            
        	<div class="col-6">
            	<article>
                	<h3 align="center">Battle Quest</h3>
                	<ul>
                    	<p align="center"><em><img  src="/images/avatar/" alt="Avatar"><img  src="/images/avatar/PdteMEP.png" alt="Avatar"></em></p>
                    	<p align="justify">
                            - 1 contra 1<br><br>
                    		- Consisteix en dues escenes on surten preguntes i si les encertes aconsegueixes
                            ventatges i el més important és posar en desavantatge al teu rival (com per exemple
                            congelar al rival perquè no pugui respondre el següent torn.<br><br>
                            - El joc acaba quan un dels jugadors perd tots els cors (vides) <br><br>
                        	- Preguntes preparades per primària<br><br>
                        	- Joc amb tecnologia 3D<br><br>
                        </p>
                	</ul>
            	</article>
        	</div>

    	</div>

 <!-- _______________________________________________      F JOC BattleQuest      _____________________________________________ -->
        
        
        
        
        
        
        
        
        
        
 <!-- ________________________________________________    I JOC ROL    _______ERIC__________________________________________  

    	<div class="fila row2 bgded">

        	<div class="col-6">
            	<figure><img src="/images/Eric.jpg" alt=" " style="width:550px; height: 450px"></figure>
        	</div>
            
        	<div class="col-6">
            	<article>
                	<h3 align="center">JOC DE ROL</h3>
                	<ul>
                    	<p align="center"><em><img  src="/images/avatar/04.png" alt="Avatar"><img  src="/images/avatar/PdteMEP.png" alt="Avatar"></em></p>
                    	<p align="justify">
                    		- Converteix-te en un element de la taula peri&ograve;dica, crea mol·l&egrave;cules i reacciona amb els teus companys.<br><br>
                        	- Orientat a secund&agrave;ria (3r ESO). L'&agrave;tom, enllaços qu&iacute;mics, estequiometria i reaccions qu&iacute;miques.<br><br>
                        	- Joc multijugador, cooperatiu, basat en realitat augmentada.<br><br>
                        </p>
                	</ul>
            	</article>
        	</div>

    	</div>

 <!-- _______________________________________________      F JOC ROL      _____________________________________________ --> 
        
        
 <!-- ________________________________________________    I GEOGO    _______TONI__________________________________________  

    	<div class="fila row2 bgded">

        	<div class="col-6">
            	<figure><img src="/images/" alt=" " style="width:550px; height: 450px"></figure>
        	</div>
            
        	<div class="col-6">
            	<article>
                	<h3 align="center">GEOGO</h3>
                	<ul>
                    	<p align="center"><em><img  src="/images/avatar/23.png" alt="Avatar"><img  src="/images/avatar/PdteMEP.png" alt="Avatar"></em></p>
                    	<p align="justify">
                    		- Converteix-te en un element de la taula peri&ograve;dica, crea mol·l&egrave;cules i reacciona amb els teus companys.<br><br>
                        	- Orientat a secund&agrave;ria (3r ESO). L'&agrave;tom, enllaços qu&iacute;mics, estequiometria i reaccions qu&iacute;miques.<br><br>
                        	- Joc multijugador, cooperatiu, basat en realitat augmentada.<br><br>
                        </p>
                	</ul>
            	</article>
        	</div>

    	</div>

 <!-- _______________________________________________      F JOC GEOGO      _____________________________________________ --> 
        
 <!-- ________________________________________________    I QUIZ    _______ARTURO__________________________________________  

    	<div class="fila row2 bgded">

        	<div class="col-6">
            	<figure><img src="/images/" alt=" " style="width:550px; height: 450px"></figure>
        	</div>
            
        	<div class="col-6">
            	<article>
                	<h3 align="center">QUIZ</h3>
                	<ul>
                    	<p align="center"><em><img  src="/images/avatar/25.png" alt="Avatar"><img  src="/images/avatar/PdteMEP.png" alt="Avatar"></em></p>
                    	<p align="justify">
                    		- Converteix-te en un element de la taula peri&ograve;dica, crea mol·l&egrave;cules i reacciona amb els teus companys.<br><br>
                        	- Orientat a secund&agrave;ria (3r ESO). L'&agrave;tom, enllaços qu&iacute;mics, estequiometria i reaccions qu&iacute;miques.<br><br>
                        	- Joc multijugador, cooperatiu, basat en realitat augmentada.<br><br>
                        </p>
                	</ul>
            	</article>
        	</div>

    	</div>

 <!-- _______________________________________________      F JOC QUIZ      _____________________________________________ --> 
        
        
 <!-- ________________________________________________    I CUBE    _______DANI M__________________________________________  

    	<div class="fila row2 bgded">

        	<div class="col-6">
            	<figure><img src="/images/" alt=" " style="width:550px; height: 450px"></figure>
        	</div>
            
        	<div class="col-6">
            	<article>
                	<h3 align="center">CUBE</h3>
                	<ul>
                    	<p align="center"><em><img  src="/images/avatar/15.png" alt="Avatar"><img  src="/images/avatar/PdteMEP.png" alt="Avatar"></em></p>
                    	<p align="justify">
                    		- Converteix-te en un element de la taula peri&ograve;dica, crea mol·l&egrave;cules i reacciona amb els teus companys.<br><br>
                        	- Orientat a secund&agrave;ria (3r ESO). L'&agrave;tom, enllaços qu&iacute;mics, estequiometria i reaccions qu&iacute;miques.<br><br>
                        	- Joc multijugador, cooperatiu, basat en realitat augmentada.<br><br>
                        </p>
                	</ul>
            	</article>
        	</div>

    	</div>

 <!-- _______________________________________________      F CUBE      _____________________________________________ -->
        
        

<!-- ########################<div class="overlay">#################################################### -->
<!-- JAVASCRIPTS -->
    	<script src="layout/scripts/jquery.min.js"></script> 
    	<script src="layout/scripts/jquery.mobilemenu.js"></script>
	</body>
</html>