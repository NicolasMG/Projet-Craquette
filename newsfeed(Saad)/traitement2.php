<?php

if (isset($_POST['craquetter'])){
	if(!empty($_POST['message'])){
		$message=$_POST['message'];
	}
}
try{
	$bdd = new PDO('mysql:host=localhost;dbname=profil_newsfeed;charset=utf8','saad','muraillechine',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));//le array permet d'afficher les ereurs
}
catch (Exception $e){
	die('connection failed : '.$e->getMessage());
}



$req=$bdd->prepare('insert into actualite (poste) values ("'.$message.'")');
$req->execute();

header('Location: http://localhost/newsfeed/fil_actualite.php'); 
?>
