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
<title>PLANTILLA</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}


.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 100%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
    
</style>
    
<!--  Drag/Drop--> 
    
<style>
#div1 {
  width: 90px;
  height: 110px;
  padding: 1px;
  border: 1px solid #f1f1f1;

}
</style>
<script>
function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
}
function enviar(){
  window.location = "registre.php?avat=" + data
}
function enviar2(ev){
  data=ev;
  window.location = "registre.php?avat=" + data
}

</script>
    
    
    
</head>
<body id="top">

<?php
// definim variables i les inicialitzaem a buit

$servername = $username = $password = $Dbname = "";
$cod = $nom = $stat = $cami  =  array();

	
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
$sql = "SELECT * FROM avatar";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	$i = 0;
    while($row = mysqli_fetch_assoc($result)) {
        $cod[$i]  = $row["cod"];
		$nom[$i]  = $row["nom"];
		$stat[$i] = $row["stat"];
		$cami[$i] = $row["cami"];
		$i++;
    }
} 

mysqli_close($conn);
?>

<!-- ################################################################################################ -->
<div class="wrapper row2 bgded" style="background-image:url('images/SceneRegistre.jpg');">
  <div class="overlay">
    <div id="intro" class="clear">
        
    
      <!-- ################################################################################################ -->
      <form name="formu" action="javascript:enviar()" method="post">
         
             
      <!-- Drag/Drop -->        

        <p>Arrosega al quadre el teu personatge:</p>
        <input type="submit" value="Entrar">

         <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <br>
		 
<?php
		// ********************** PAQUET DE 9 AVATARS *******************************
		
		echo '<div class="imgcontainer">';
		for ($i = 0; $i<9; $i++) {	
		  	if (!$stat[$i]) {
				echo "<img id=drag" . $cod[$i] . " src = " . $cami[$i] . $cod[$i] . ".png  onclick=javascript:enviar2(this.id) draggable=true ondragstart=drag(event) <br>";
		}else {
				echo "<img id=drag" . $cod[$i] . " src = " . $cami[$i] . "1" . $cod[$i] . ".png draggable=false onclick='' <br> ";	
			}		
			} 
		echo '</div>';
		  
	  
		// ********************** PAQUET DE 9 AVATARS *******************************
		echo '<div class="imgcontainer">';
		for ($i = 9; $i<18; $i++) {	
		  	if (!$stat[$i]) {
				echo "<img id=drag" . $cod[$i] . " src = " . $cami[$i] . $cod[$i] . ".png  onclick=javascript:enviar2(this.id) draggable=true ondragstart=drag(event) <br>";
		}else {
				echo "<img id=drag" . $cod[$i] . " src = " . $cami[$i] . "1" . $cod[$i] . ".png draggable=false onclick='' <br> ";	
			}		
			} 
		echo '</div>';
		// ********************** PAQUET DE 9 AVATARS *******************************
		echo '<div class="imgcontainer">';
		for ($i = 18; $i<27; $i++) {	
		  	if (!$stat[$i]) {
				echo "<img id=drag" . $cod[$i] . " src = " . $cami[$i] . $cod[$i] . ".png  onclick=javascript:enviar2(this.id) draggable=true ondragstart=drag(event) <br>";
		}else {
				echo "<img id=drag" . $cod[$i] . " src = " . $cami[$i] . "1" . $cod[$i] . ".png draggable=false onclick='' <br> ";	
			}		
			} 
		echo '</div>';
		// ********************** PAQUET DE 9 AVATARS *******************************
		echo '<div class="imgcontainer">';
		for ($i = 27; $i<36; $i++) {	
		  	if (!$stat[$i]) {
				echo "<img id=drag" . $cod[$i] . " src = " . $cami[$i] . $cod[$i] . ".png  onclick=javascript:enviar2(this.id) draggable=true ondragstart=drag(event) <br>";
		}else {
				echo "<img id=drag" . $cod[$i] . " src = " . $cami[$i] . "1" . $cod[$i] . ".png draggable=false onclick='' <br> ";	
			}		
			} 
		echo '</div>';
		// ********************** PAQUET DE 9 AVATARS *******************************
		echo '<div class="imgcontainer">';
		for ($i = 36; $i<45; $i++) {	
		  	if (!$stat[$i]) {
				echo "<img id=drag" . $cod[$i] . " src = " . $cami[$i] . $cod[$i] . ".png  onclick=javascript:enviar2(this.id) draggable=true ondragstart=drag(event) <br>";
		}else {
				echo "<img id=drag" . $cod[$i] . " src = " . $cami[$i] . "1" . $cod[$i] . ".png draggable=false onclick='' <br> ";	
			}		
			} 
		echo '</div>';
		  
 
		  
?>
                               
         

      </form>
  
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>
<!-- ################################################################################################ -->

<!-- JAVASCRIPTS -->
<script> </script>
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
