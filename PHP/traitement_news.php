<?php
session_start();
if (isset($_POST['craquetter'])){
	if(!empty($_POST['message'])){
		$message=htmlspecialchars($_POST['message']);
        try{
            $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch (Exception $e){
            die('connection failed : '.$e->getMessage());
        }
        
$req=$bdd->prepare('insert into actualite (id,poste) values (:id,:message)') or die(print_r($bdd->errorInfo()));
$req->execute(array('id'=>$_SESSION['ID'],'message'=>$message));
	}
}
header('Location: ./accueil.php');
?>