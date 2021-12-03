<?php
include "./database/connect_to_data_base.php";
if(isset($_POST['connecter'])){
	$nom=$_POST["fristname"];
	$prenom=$_POST["lastname"];
	$emai=$_POST["email"];
	$password=$_POST["password"];
	$genre=$_POST["genre"];
	$nbr_calorie=$_POST["calorie"];
	$role=1;
	if(empty($nbr_calorie)){
		$nbr_calorie=2300;
	}
	if($genre==="homme"){
		$genre=1;
	}else{
		$genre=2;
	}
	$query="INSERT INTO user (firstname,lastname,email,password,role,genre,calorie )VALUES ('$nom','$prenom','$emai','$password','$role','$genre','$nbr_calorie')";
	if(mysqli_query($connect,$query)){
	header("Location: Inscription.php?name=".$nom);}
	else{
		header("Location: Inscription.php?error=error");
	}
	exit();
}
?>