<?php
if (isset($_POST['craquetter'])){
	if(!empty($_POST['message'])){
		$message=htmlspecialchars($_POST['message']);
	}
}
try{
	$bdd = new PDO('mysql:host=localhost;dbname=profil_newsfeed;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e){
	die('connection failed : '.$e->getMessage());
}
$req=$bdd->prepare('insert into actualite (poste) values ("'.$message.'")');
$req->execute();
header('Location: ./accueil.php');
?>