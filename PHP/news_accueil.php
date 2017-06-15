<?php 


				
			$req = "SELECT * FROM actualite order by date_time desc limit 100";
			$req=$bdd->query($req) or die(print_r($bdd->errorInfo()));
			$res = $req->fetch();
			$num_ligne=$req->rowcount();
			
		$req1=$bdd-> query("SELECT * FROM commentaire ");
		$req1->execute();
		$num_ligne1=$req1->rowcount();
			
				if($num_ligne !=0){
				do{
				
				
				$req3="select Prenom,Nom,imageprofil from profil where id=:id"; //personne qui a tweeter
				$req3=$bdd->prepare($req3);
				$req3->execute(array('id'=>$res['id']));
				$data3=$req3->fetch();
				
				$req4=$bdd->prepare("select Prenom,Nom,imageprofil from profil where id=:retweeted_by"); //personne qui a retweeter
				$req4->execute(array('retweeted_by'=>$res['retweeted_by']));
				$data4=$req4->fetch();
				
				
			$req5=$bdd->prepare("select Prenom, Nom, imageprofil from profil where id=:commented_by");  //personne qui a commenté
			$req5->execute(array('commented_by'=>$res['commented_by']));
			$data5=$req5->fetch();
				
				//on récupère le contenu du commentaire
			$req6=$bdd->prepare("select comment,comment_time from commentaire where num_tweet_commented=:num_tweet_commented ORDER BY comment_time desc limit 100");  
			$req6->execute(array('num_tweet_commented'=>$res['num_tweet']));
			$data6=$req6->fetch();
				
			$req7=$bdd->prepare('select num_tweet from actualite where retweeted_by=:retweeted_by');	
			$req7->execute(array('retweeted_by'=>$res['retweeted_by']));
			$data7=$req7->fetch();
				
			$req8=$bdd->prepare("select poste from actualite where num_tweet=:num_tweet");
			$req8->execute(array('num_tweet'=>$res['retweeted_contenu']));
			$data8=$req8->fetch();
				
				
				/*if($data3['id'] in select abonnement1,abonnement3 .... from profil2 where id=$_session[id] and retweeted_by in select {abos} where id=$_session[id])*/
				
			
			if ($res['retweeted']=="true"){
				
				print '<div class="wrapper_poste_num2">
					<div id="conteneur_newsfeed">
					<a href="profil.php?num_tweet='.$data7['num_tweet'].'"><img src=Images/'."'".$data4["imageprofil"]."'".'/></a>
						<div id="contenu_droit">
							<p id="nom_profil">'.$data4['Prenom']." ".$data4['Nom'].' a re-craquetter le poste de '.$data3['Prenom']." ".$data3['Nom'].'</p>
								<p id="contenu_int">'.$data8['poste'].'</p>
								
								
							</div>
					</div>
										
								
					
				</div>';
				
				
				
				
							
			}
			
				print '<div class="wrapper_poste_num1">
				<div id="conteneur_newsfeed">
				<a href="profil.php?num_tweet='.$res['num_tweet'].'"><img src=Images/'."'".$data3["imageprofil"]."'".'/></a>
					<div id="contenu_droit">
						<p id="nom_profil">'.$data3['Prenom']." ".$data3['Nom'].'</p>
							<p id="contenu_int">'.$res['poste'].'</p>
							<div class="image_like">';	
								
								if ($res['id']!=$_SESSION['ID']){
										echo '<img src="Images/like.png" class="image1" />';
									}
									else {
										echo'<a href="like_traitement.php?num_tweet='.$res['num_tweet'].'"'.'><img src="Images/like.png" class="image1" /></a>';
									}
									echo '<p class="like">'.$res['compteur_like'].'</p>';
									if ($res['id']!=$_SESSION['ID']){
										echo '<img src="Images/retweet.png" class="image2" />';
									}
									else {
										echo'<a href="retweet_traitement?num_tweet='.$res['num_tweet'].'"'.'><img src="Images/retweet.png" class="image2" /></a>';
									}
								
								print '<img src="Images/message.png" class="image3" />
								<p class="comment" >'.$res['compteur_comments'].'</p>
							</div>
					</div>
				</div>
				
					<form method="POST" action="message_traitement.php?num_tweet='.$res['num_tweet'].'" class="form_comment">	
									<img src="Images/'.$_SESSION['imageprofil'].'" />
									<div class="form_comment_droit">	
										<input type="text" name="commentaire" class="commentaire" placeholder="Laissez un commentaire à '.$data3['Prenom'].' !"/>
										<input  type="submit" name="submit_comment" value="Commenter !" id="envoi_comment" />
									</div>
								</form>			
								
					
			</div>	
				
				
							';
				
			
			
			if ($res['commented']=="true"){
					
					if($num_ligne1 !=0){
					do{
								print '
								
									<div class="commentaire_int">
										<img src="Images/'.$data5['imageprofil'].'" />
										<div class="commentaire_int_droit">
											<p>'.$data5['Prenom']." ".$data5['Nom'].' a commenté ce poste </p>
											<p id="contenu_int_commentaire">'.$data6['comment'].'</p>
										</div>
									</div>
		
								';
					
			}while($data6=$req6->fetch());
					}
			
		
			}			
			
			
			
				}while($res = $req->fetch());
				}
				
			$req->closeCursor();
			
	/*<div class="image_like">	
								 <a href="like_traitement.php?num_tweet='.$res['num_tweet'].'"'.'><img src="like.png" class="image1" /></a>	
								<p class="like">'.$res['compteur_like'].'</p>
								<a href="retweet_traitement.php?num_tweet='.$res['num_tweet'].'"'.'><img src="retweet.png" class="image2" /></a>
								<p class="retweet" >'.$res['compteur_retweet'].'</p>
								<a href="message_traitement.php?num_tweet='.$res['num_tweet'].'"'.' ><img src="message.png" class="image3" /></a>
							</div>*/	


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*session_start();*/
/*try{
	$bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));//le array permet d'afficher les ereurs
}
catch (Exception $e){
	die('connection failed : '.$e->getMessage());
}



$req = "SELECT id,poste,compteur_like,compteur_retweet,num_tweet FROM actualite ORDER BY id DESC limit 100";
$req=$bdd->query($req) or die(print_r($bdd->errorInfo()));

$req2="select Prenom,Nom from profil2 where id=:id";
$req2=$bdd->prepare($req2);
$req2->execute(array('id'=>$_SESSION['id']));
$data2=$req2->fetch();

while($res = $req->fetch()){
    
    print '<div id="conteneur_newsfeed">
				<a href="#"><img src='."'".$_SESSION["imageprofil"]."'".'/></a>
					<div id="contenu_droit">
						<p id="nom_profil">'.$data2['Prenom']." ".$data2['Nom'].'</p>
							<p id="contenu_int">'.$res['poste'].'</p>
							<div class="image_like">	
								<a href="like_traitement.php?num_tweet='.$res['num_tweet'].'"'.'><img src="like.png" class="image1" /></a>	
								<p class="like">'.$res['compteur_like'].'</p>
								<a href="fil_actualite.php?num_tweet='.$res['num_tweet'].'"'.'><img src="retweet.png" class="image2" /></a>
								<p class="retweet" >'.$res['compteur_retweet'].'</p>
								<a href="message_traitement.php?num_tweet='.$res['num_tweet'].'"'.' ><img src="message.png" class="image3" /></a>
							</div>
					</div>
			</div>';
}

faut-il tjrs fermer la requête */


?>

