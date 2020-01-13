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
                  <!-- <li><a href="#">Link 2</a></li>
                  <li><a href="#">Link 3</a></li>
                  <li><a href="#">Link 4</a></li>
                <!--    <li><a href="#">Link 5</a></li>
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
        <li><a href="/pages/gallery.php">Galeria </a></li>
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
 
	

<div class="wrapper row4">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">(TSUNAMI) Tots Som Un, Nom&eacute;s Amb Ments Inquietes </p>
    <p class="fl_right">Ajudem a reconnectar la ment dels nostres joves</p>
    <!-- ################################################################################################ -->
  </div>
</div>   
    
<div class="wrapper row4">
 
</div>
<!-- ################################################################################################ -->
	

<!-- ################################################################################################ -->
<!--  fiucontraudg@gmail.com################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Per poder-te ajudar cal que preparis  una maqueta del teu treball incloent-hi una descripci&oacute; del que hauria de fer i una imatge /foto que ho ilustri.
	Aquesta documentaci&oacute; la pots enviar per mail  a l'adreça inferior o utilitzar els botons tria/puja :
	</p>
	<p>fiucontraudg@gmail.com </p>
 	  <form class ="fl_right" action="PenjaArxiu.php" method="post" enctype="multipart/form-data">
		Selecciona l'arxiu que vols enviar:
		<input type="file" name="fileToUpload" id="fileToUpload">
		<input type="submit"  value="pujar arxiu" name="fileToUpload">
	  </form>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<div class="wrapper row6">
  
</div>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script> 
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
