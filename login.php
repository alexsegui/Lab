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


<title>LABORATORI</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<?php 
    $txt = $_REQUEST['avat'];
    $GLOBALS['avat'] = preg_replace("/[^0-9]/", "", $txt);
    $_SESSION['avat']  = $avat;
?>
<!-- ################################################################################################ -->
<div class="wrapper row0">
  
</div>
<!-- ################################################################################################ -->

<div class="wrapper row1">
  <header id="header" class="clear"> 
   
  </header>
</div>

<!-- ################################################################################################ -->
<div class="wrapper row2 bgded" style="background-image:url('images/SceneRegistre.jpg');">
  <div class="overlay">
    <div id="intro" class="clear"> 
      <!-- ################################################################################################ -->
    <article class="one_third first">
         <?php         
            echo "<img src = images/avatar/" . $avat . ".png align=right>"?>
       </article>
      <article class="one_third ">
        <h3 class="heading">Entrar </h3>
         <form action="/passwd_page.php" method="post">
          <ul class="nospace">
                Contrasenya:<br>
                <input type="password" name="passwd" value="">
                   <br><br>
                <input type="submit" value="Entrar">
              <br><br>
              <br><br>
              <br><br>
              <br><br>
            </ul>
          </form> 
      </article>   
      <!-- ################################################################################################ -->
	  </div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
