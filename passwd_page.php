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
// definim variables i les inicialitzaem a buit

$avat = $passwd  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $passwd = test_input($_POST["passwd"]);
}
   
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 
$servername = "localhost";
$username = "web";
$password = "web";
$Dbname = "web";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$Dbname );
 // Check connection
     if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
                        }
     // header ("Location: /index.html");
     $sql = "SELECT * FROM usuaris WHERE ninot = " . S_SESSION['avat']
// comprovar els resultats i si hi ha un registre 
         // es redirefeix a la pagina principal

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
        <h3 class="heading">Primer bloc d'idees </h3>
        <ul class="nospace">
          <?php
            echo "<li>El nom és "; 
            echo $_POST["name"];
            echo "</li>";

            ?>
            
          <li>adipis cing ornare</li>
          <li>donec luctus convallis rhoncus</li>
        </ul>
        <p class="link"><a href="#">Read More &raquo;</a></p>
      </article>
      
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>

<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
