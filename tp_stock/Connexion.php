<?php 
	
	require_once('Include/header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Style/style.css" media="screen">
	<title></title>
</head>
<body>
	<div id="container">
		<form action="authentification.php" method="POST">
			<h1>Connexion</h1>
			<label><b>Login</b></label>
			<input type="text" name="username" placeholder="Entrer le nom d'utilisateur" required="required">

			<label><b>Mot de passe</b></label>
			<input type="password" name="password" required="required" placeholder="Entrer le mot de passe">

			<input type="submit" id="submit" value="se connecter">
			<?php 
				if (isset($_GET['erreur'])) {
					$err = $_GET['erreur'];
					if ($err==1) {
						echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
					}
				}
			?>
		</form>
	</div>
</body>
</html>


<?php
echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
	require_once('Include/footer.php')
?>