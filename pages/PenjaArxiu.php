<!DOCTYPE html>
<html>
<head>

<script>
function carregaMeb {
  ;
}	
</script>    
</head>
	
<body id="top">
<?php
    // Accés base dedades
	$serverdbname = "localhost";
	$serverdbusername =  "pl_db";
	$serverdbpassword = "pl_db01.";
	$dbName = "planta_db";

    // Accés a ec2 per guardar arxiu
//	$username = $_POST["namefotoPost"];      
//	$email = $_POST["fileupPost"];   

	
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//	$target_file = $target_dir . "fotalex.jpg";
	$uploadOk = 1;
/*	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image fi-le is a actual image or fake image
	if(isset($_POST["submit"])) {
    	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    	if($check !== false) {
        	echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
        	echo "File is not an image.";
        	$uploadOk = 0;
		}
	}

	// Check if file already exists
	if (file_exists($target_file)) {
    	echo "Sorry, file already exists.";
    	$uploadOk = 0;
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && 	$imageFileType != "jpeg"
	   && $imageFileType != "gif" ) {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}
*/
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "No hem pogut pujar l'arxiu";
		// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["fileToUpload"]	["tmp_name"], $target_file)) {
			echo "Tenim l'arxiu ". basename( $_FILES["fileToUpload"]	["name"]). " . Ens hi posem !!!.";
		} else {
        	echo "Tenim problemes per pujar l'arxiu.";
    	}
	?> 
	  <a href="mep.php">Tornar !!</a> <?php
	}

/*

	//Make Connection DB
	$conn = new mysqli($servername, $serverusername, $serverpassword, $dbName);
	
//Check Connection
	if(!$conn){
		die("Connection Failed. ". mysqli_connect_error());
	}
	
	$sql = "INSERT INTO usuari (nom, passwd, email) VALUES ('".$username."','".$password."','".$email."')";
	
	$result = mysqli_query($conn ,$sql);
    if ($result){
		echo "Succefulled !!";
	}else{
		echo "Merda !!";
	}
	
	*/
	
?>
</body>
</html>