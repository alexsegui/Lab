<!DOCTYPE html>
<!--
Template Name: Abele
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
--> 
<html>
<head>


<?php session_start(); ?>
    <title>LABORATORI</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

    
    
<?php
// definim variables i les inicialitzaem a buit

$servername = $username = $password = $Dbname = "";
$name = $passwd = $avatar = $grup  =  "";


// Actualitzaem variables del FORMULARI d'entrada    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $name = test_input($_POST["name"]);
 $passwd = test_input($_POST["passwd"]);
 $avatar = $_SESSION['avat'];
 $grup = test_input($_POST["grup"]);
}

// netejem les variables per evitar (INTRUSOS)
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 
// Dades conexió a la base de dades
$servername = "localhost";
$username =   "web";
$password =   "web";
$Dbname = "web";
       

// Create connection
$conn = mysqli_connect($servername, $username, $password, $Dbname);
 // Check connection
     if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO usuaris (nom, passw, ninot, grup) VALUES ('$name', '$passwd', $avatar, '$grup')";
    if (mysqli_query($conn, $sql)) {
		$sql = "UPDATE avatar SET stat=TRUE WHERE cod=" . $avatar;
		if (mysqli_query($conn, $sql)) {
        	echo "T´has registrat. Ara ja pots entrar";
			header ("Location: /index.html");
		}
    } else {
        echo "Error: " .  mysqli_error($conn);
    }
	
mysqli_close($conn);
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
        <h3 class="heading">NO ET POTS REGISTRAR </h3>
        <ul class="nospace">
          <?php
            echo "<li>"; 
            echo $_POST["name"];
            echo ", hi ha un problema amb la base de dades</li>";
            ?>
            
          <li>Aquesta icona ja està agafada</li>
          <li>N'has de triar una altra</li>
        </ul>
        <p class="link"><a href="/avatar.php">Torna-hi ! &raquo;</a></p>
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
