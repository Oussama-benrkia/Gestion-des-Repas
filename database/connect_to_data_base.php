<?php
$local="localhost";
$name="root";
$password="";
$data="gestion_repas";
$connect= mysqli_connect($local,$name,$password,$data);
if(mysqli_connect_errno()){
	echo "no connect";
}
else{
	echo "connect";
}
?>