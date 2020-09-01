<?php 
	
	session_start();

	if (isset($_SESSION['username'])) {
		# code...

	}else{

		header("location:../index.php");
	}	

?>

<h1>Bienvenu, <?php echo $_SESSION['username'] ?></h1>