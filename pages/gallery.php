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
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
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
      <img src = "../images/UDGPalamos.gif" style="width:20%"> 
    </nav>
    <!-- ################################################################################################ -->
       <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="/index.php">Inici</a></li>
        <li><a href="/pages/gallery.php">Galeria </a></li>
		 <li><a class="active" href="/pages/dam.php">DAM/SMX</a></li>
		<li><a class="active" href="/pages/mep.php">MEP/MEI</a>
        </li>       
        <li><a href="/pages/propostes.php">En curs</a></li>
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
<!-- ################################################################################################ -->
<div class="wrapper row5" style="background-image:url('../images/SceneGaleria.jpg');" >
  <main class="container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
      <div id="gallery">
        <figure>
          <header class="heading">Exemples de coses que podem fer</header>
          <ul class="nospace clear">
            <li class="one_quarter first"><a href="http:../webGL/billar/billar.html"><img src="../images/demo/gallery/billar.png" alt=""></a></li>
            <li class="one_quarter"><a href="http:../webGL/rpg/index.html"><img src="../images/demo/gallery/rpg.png" alt=""></a></li>
            <li class="one_quarter"><a href="http:../webGL/blocs/index.html"><img src="../images/demo/gallery/blocs.png" alt=""></a></li>
            <li class="one_quarter"><a href="http:../webGL/tictactoe/index.html"><img src="../images/demo/gallery/tictactoe.png" alt=""></a></li>
            <li class="one_quarter first"><a href="http:../webGL/flappy/index.html"><img src="../images/demo/gallery/flappy.png" alt=""></a></li>
            <li class="one_quarter"><a href="http:../webGL/space/index.html"><img src="../images/demo/gallery/space.png" alt=""></a></li>
            <li class="one_quarter"><a href="http:../webGL/ufo/index.html"><img src="../images/demo/gallery/ufo.png" alt=""></a></li>
            <li class="one_quarter"><a href="http:../webGL/towerdefense/index.html"><img src="../images/demo/gallery/towerdef.png" alt=""></a></li>
            <li class="one_quarter first"><a href="http:../webGL/doodlejump/index.html"><img src="../images/demo/gallery/doodlejump.png" alt=""></a></li>
            <li class="one_quarter"><a href="http:../webGL/rtsnavmesh/index.html"><img src="../images/demo/gallery/rtsnavmesh.png" alt=""></a></li>
            <li class="one_quarter"><a href="http:../webGL/survivalshooter/index.html"><img src="../images/demo/gallery/survival.png" alt=""></a></li>
            <li class="one_quarter"><a href="http:../webGL/lowpoly/index.html"><img src="../images/demo/gallery/lowpoly.png" alt=""></a></li>
            <li class="one_quarter first"><a href="http:../webGL/gatjulia/index.html"><img src="../images/demo/gallery/gatjulia.png" alt=""></a></li>
            <li class="one_quarter"><a href="http:../webGL/techinv/index.html"><img src="../images/demo/gallery/techinv.png" alt=""></a></li>
            <li class="one_quarter"><a href="http:../webGL/barbar/index.html"><img src="../images/demo/gallery/barbar.png" alt=""></a></li>
            <li class="one_quarter"><a href="http:../webGL/lennys/index.html"><img src="../images/demo/gallery/lenny.png" alt=""></a></li>
            <li class="one_quarter first"><a href="http:../webGL/tanks/index.html"><img src="../images/demo/gallery/tanks.png" alt=""></a></li>
          </ul>
        </figure>
      </div>
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      
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

<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script> 
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
