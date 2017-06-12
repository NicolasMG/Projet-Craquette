<?php 

session_start();
try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); 
    }
    catch(Exception $e){ 
        die('Erreur : '.$e->getMessage()); 
    }
   $req1=$bdd->prepare('select retweeted,id,poste from actualite where num_tweet=:num_tweet');
				$req1->execute(array('num_tweet'=>$_GET['num_tweet']));
				$data1=$req1->fetch();
if (isset($_GET['num_tweet'])  and   $data1['retweeted']=="false"){
 
	
	
	
    $req3=$bdd->prepare('update actualite set compteur_retweet = compteur_retweet + 1, retweeted="true" where num_tweet= :num_tweet');
    $req3->execute(array('num_tweet'=>$_GET['num_tweet']));
    $req5=$bdd->prepare('update actualite retweeted_by=:id where new_tweet=:num_tweet');
	$req5->execute(array('id'=>$_SESSION['ID'],'num_tweet'=>$_GET['num_tweet']));
				}	

?>