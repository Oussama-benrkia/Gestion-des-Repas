<?php
include "./database/connect_to_data_base.php";
if (isset($_POST['email']) &&  isset($_POST['password'])) {
	$emai=$_POST['email'];
	$pass=$_POST['password'];
	$fil="connexion.php";
	$requet="SELECT user_id,email,password,role  FROM user WHERE user.email= '$emai' and user.password='$pass'";
	$row=mysqli_query($connect,$requet);
	$array=mysqli_fetch_all($row);
	if(count($array)!==0){
		if($array[0][3]===3){
			header("Location: ./utilisateur/listrepas.html?user_id=".$array[0][0]."&role=".$array[0][3]);
		exit();
		}else if($array[0][3]==1){
			header("Location: ./administrateur/listeutil.html?user_id=".$array[0][0]."&role=".$array[0][3]);
			exit();
		}else{
			header("Location: ./gestionner/listeutil.html?user_id=".$array[0][0]."&role=".$array[0][3]);
			exit();
		}
	}
	else{
		header("Location: connexion.php?error=Votre identifiant ou votre mot de passe est incorrect.");
		exit();
	}
}
else{
		header("Location: connexion.php");
		exit();
	}
?>