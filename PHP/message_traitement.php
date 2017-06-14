<?php
session_start();
try{
	$bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));//le array permet d'afficher les ereurs
}
catch (Exception $e){
	die('connection failed : '.$e->getMessage());
}
$req1=$bdd->prepare('select id from actualite where num_tweet=:num_tweet');
				$req1->execute(array('num_tweet'=>$_GET['num_tweet']));
				$data1=$req1->fetch();



 if (isset($_GET['num_tweet'],$_POST['commentaire'])   /*$data1['retweeted_by']!=$_SESSION['id']*/ ){

	$req3=$bdd->prepare('update actualite set compteur_comments = compteur_comments + 1, commented="true" where num_tweet= :num_tweet');
	$req3->execute(array('num_tweet'=>$_GET['num_tweet']));
	
	$req5=$bdd->prepare('update actualite set commented_by=:id where num_tweet=:num_tweet');
	$req5->execute(array('id'=>$_SESSION['ID'],'num_tweet'=>$_GET['num_tweet']));
	
	
	
	$req6=$bdd->prepare('insert into commentaire values (:num_tweet_commented,:commented_by,:commented_for,:comment)');
	$req6->execute(array('num_tweet_commented'=>$_GET['num_tweet'],'commented_by'=>$_SESSION['ID'],'commented_for'=>$data1['id'],'comment'=>$_POST['commentaire']));
	
}
$pbnom = "accueil.php";
echo "<script>window.location = "."'".$pbnom."'"."</script>";

?>
