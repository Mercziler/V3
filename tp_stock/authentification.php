<?php  
session_start();

$username=$_POST['username'];
$password=$_POST['password'];

if (isset($_SESSION['username'])) {
	header('Location:Connexion.php');
}


if (isset($username) && isset($password)) {
	# connexion a la base de donnee
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "gestion";

	$conn =new mysqli($host,$user,$pass,$dbname) or die(mysqli_connect_error());

	$username = mysqli_real_escape_string($conn,htmlspecialchars($_POST['username']));
	$password = mysqli_real_escape_string($conn,htmlspecialchars($_POST['password']));

if ($username!=="" && $password!=="") {
		# code...
		$req="SELECT COUNT(*)FROM client WHERE login='$username' AND password='$password'";
		
		$exec_requete = mysqli_query($conn,$req);
		$reponse = mysqli_fetch_array($exec_requete);
		echo $reponse[0];
		$count = $reponse[0];

		if ($count!=0) {
			# code...
			$_SESSION['username'] = $username;
			header('Location:Admin/admin.php');
		}else{
			header('Location:Connexion.php?erreur=1');
		}
	}

}

mysqli_close($conn);

?>