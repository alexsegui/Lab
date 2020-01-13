<!DOCTYPE html>
<!--
Template Name: Abele
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: https://www.os- templates.com/template-terms
--> 
<?php session_start(); ?>
<html>
<head>

<title>ELLABORATORI</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
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
    <div class="fl_left">
         Usuari/a:  
		<?php         
            echo "<img src = images/avatar/" . $avat . ".png style=width:20%>"?>
		  <a href="/sortir.php">-- Sortir --</a>
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
      <img src = "images/UDGPalamos.gif" style="width:20%"> 
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
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2 bgded" style="background-image:url('images/Rebedor.jpg');">
  <div class="overlay">
    <div id="intro" class="clear"> 
      <!-- ################################################################################################ -->
      <article class="one_quarter first">
        <h3 class="heading">Galeria </h3>
        <ul class="nospace">
            <img src = "images/Galeria.jpg">
        </ul>
        <p class="link"><a href="pages/gallery.php">Benvingudes!!! &raquo;</a></p>
      </article>
      <article class="one_quarter">
        <h3 class="heading">DAM</h3>
        <ul class="nospace">
            <img src = "images/DAM.jpg">
        </ul>
        <p class="link"><a href="/pages/dam.php">Benvinguts!!! &raquo;</a></p>
      </article>
      <article class="one_quarter">
        <h3 class="heading">MEP/MEI</h3>
        <ul class="nospace">
            <img src = "images/MEI.jpg">
        </ul>
        <p class="link"><a href="/pages/mep.php">Benvingudes!!! &raquo;</a></p>
      </article>
      <article class="one_quarter">
        <h3 class="heading">En curs</h3>
        <ul class="nospace">
            <img src = "images/XAT.jpg">
        </ul>
        <p class="link"><a href="pages/propostes.php">Benvinguts!!! &raquo;</a></p>
      </article>
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
    <!-- 
<div class="wrapper row3">
  <main class="container clear"> 
     -->
    <!-- main body -->
    <!-- ################################################################################################ -->
<!--    <div class="group">
      <div class="one_half first">
        <h2 class="heading btmspace-50">Maecenas libero nunc eu erat</h2>
        <figure id="featuredpost"><img src="images/demo/featured.png" alt="">
          <figcaption>
            <h2 class="heading">Urna sit amet pulvinar</h2>
            <p class="shortintro">Aenean semper elementum tellus, ut placerat leo. Quisque vehicula, urna sit amet.&hellip;</p>
            <p class="link"><a class="btn" href="#">Read More &raquo;</a></p>
          </figcaption>
        </figure>
      </div>
      <div class="one_half">
        <h2 class="heading btmspace-50">Etiam eros nulla posuere</h2>
        <ul id="latestposts" class="nospace">
          <li class="clear">
            <figure class="one_quarter first"><img class="borderedbox inspace-5" src="images/demo/120x120.gif" alt=""></figure>
            <article class="three_quarter">
              <h2 class="heading">Phasellus massa felis in</h2>
              <div class="meta">
                <address>
                By <a href="#">A Name</a>
                </address>
                <time datetime="2045-04-06T08:15+00:00">Friday, 6 April 2045</time>
              </div>
              <p class="shortintro">Aenean semper elementum tellus, ut placerat leo. Quisque vehicula, urna sit amet.&hellip;</p>
              <p class="link"><a class="btn" href="#">Read More &raquo;</a></p>
            </article>
          </li>
          <li class="clear">
            <figure class="one_quarter first"><img class="borderedbox inspace-5" src="images/demo/120x120.gif" alt=""></figure>
            <article class="three_quarter">
              <h2 class="heading">Morbi consectetur nisi</h2>
              <div class="meta">
                <address>
                By <a href="#">A Name</a>
                </address>
                <time datetime="2045-04-06T08:15+00:00">Friday, 6 April 2045</time>
              </div>
              <p class="shortintro">Aenean semper elementum tellus, ut placerat leo. Quisque vehicula, urna sit amet.&hellip;</p>
              <p class="link"><a class="btn" href="#">Read More &raquo;</a></p>
            </article>
          </li>
          <li class="clear">
            <figure class="one_quarter first"><img class="borderedbox inspace-5" src="images/demo/120x120.gif" alt=""></figure>
            <article class="three_quarter">
              <h2 class="heading">Proin ultri feugiat vitae</h2>
              <div class="meta">
                <address>
                By <a href="#">A Name</a>
                </address>
                <time datetime="2045-04-06T08:15+00:00">Friday, 6 April 2045</time>
              </div>
              <p class="shortintro">Aenean semper elementum tellus, ut placerat leo. Quisque vehicula, urna sit amet.&hellip;</p>
              <p class="link"><a class="btn" href="#">Read More &raquo;</a></p>
            </article>
          </li>
        </ul>
      </div>
    </div>-->
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <!--
    <div class="clear"></div>
  </main>
</div>
-->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- 
<div class="wrapper row4">
  <section id="cta" class="clear"> 
-->
    <!-- ################################################################################################ -->
<!--
    <div class="center btmspace-50">
      <h2 class="nospace">Donec facilisis volutpat ligula nec egestas.</h2>
      <p class="nospace">Integer varius enim id augue faucibus mattis. Pellentesque scelerisque nibh eu mi convallis, ac feugiat nulla tincidunt.</p>
    </div>
    <div class="group">
      <div class="colour-1 one_half first">
        <article class="group colour-1"> 
-->
          <!-- ################################################################################################ -->
<!--
          <div class="one_half first"><img src="images/demo/320x220.gif" alt=""></div>
          <div class="one_half">
            <h6 class="heading">Quisque vehicula urna sit amet pulvinar dapibus</h6>
            <p class="link"><a class="btn" href="#">Read More &raquo;</a></p>
          </div>
-->
          <!-- ################################################################################################ -->
<!--
        </article>
      </div>
      <div class="colour-2 one_half">
        <article class="group colour-2"> 
-->
          <!-- ################################################################################################ -->
<!--
          <div class="one_half first"><img src="images/demo/320x220.gif" alt=""></div>
          <div class="one_half">
            <h6 class="heading">Integer varius enim id augue faucibus mattis.</h6>
            <p class="link"><a class="btn" href="#">Read More &raquo;</a></p>
          </div>
-->
          <!-- ################################################################################################ -->
<!--
        </article>
      </div>
    </div>
-->
    <!-- ################################################################################################ -->
<!--
    <div class="clear"></div>
  </section>
</div>
-->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <footer id="footer" class="clear"> 
    <!-- ################################################################################################ -->
    <div class="one_half first">
      <h6 class="title">Benvingudes al Laboratori</h6>
      <p class="nospace btmspace-30">El Laboratori és l'espai per a totes aquelles que fan viure a les seves alumnes experiències d’aprenentatge gratificants usant elements de joc dins les nostres aules.</p>
      <ul class="nospace">
        <li class="btmspace-10">
          <address>
          <span class="fa fa-map-marker"></span> Pujada de Sant Domènec, 9 &amp; Girona, 17004
          </address>
        </li>
        <li class="btmspace-10"><span class="fa fa-phone"></span> 65 75 85 266</li>
        <li><span class="fa fa-envelope-o"></span> jferna6@xtec.cat</li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Enllaços directes</h6>
      <ul class="nospace linklist">
        <li><a href="index.html">Inici</a></li>
        <li><a href="pages/gallery.php">Galeria</a></li>
        <li><a href="pages/dam.php">DAM</a></li>
        <li><a href="pages/mep.php">MEP/MEI</a></li>
        <li><a href="/pages/propostes.php">En curs</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Mail de Contacte</h6>
      <form class="btmspace-50" method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Envia</button>
        </fieldset>
      </form>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row6">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2019 - All Rights Reserved - <a href="#">ellaboratori.cat</a></p>
    <p class="fl_right"><a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">InsPalamós-FEP</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
