<?php 

			$req = "SELECT id,poste,compteur_like,compteur_retweet,num_tweet,retweeted,retweeted_by,commented,commented_by,compteur_comments FROM actualite ORDER BY num_tweet DESC limit 100";
			$req=$bdd->query($req) or die(print_r($bdd->errorInfo()));
			$res = $req->fetch();
				
		

			
					
				while($res = $req->fetch()){
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
			$req6=$bdd->prepare("select comment from commentaire where num_tweet_commented=:num_tweet_commented");  //personne qui a commenté
			$req6->execute(array('num_tweet_commented'=>$res['num_tweet']));
			$data6=$req6->fetch();
				
				
				/*if($data3['id'] in select abonnement1,abonnement3 .... from profil2 where id=$_session[id] and retweeted_by in select {abos} where id=$_session[id])*/
				
				
					if ($res['commented']=="true"){
			
			
		
			print '<div id="conteneur_newsfeed">
				<a href="profil.php?num_tweet='.$res['num_tweet'].'">'?><img class="img-circle" alt="photo_profil" title="photo_profil" src="<?php 
                    $response =$bdd->query('SELECT imageprofil FROM profil WHERE email="'.$mail.'"'); 
                    $row = $response->fetch();
                    echo($row['imageprofil']);               
                                         ?>" <?php print'</a>
					<div id="contenu_droit">
						<p id="nom_profil">'.$data3['Prenom']." ".$data3['Nom'].'</p>
							<p id="contenu_int">'.$res['poste'].'</p>
							<div class="image_like">	
								<a href="like_traitement.php?num_tweet='.$res['num_tweet'].'"'.'><img src="Images/like.png" class="image1" /></a>	
								<p class="like">'.$res['compteur_like'].'</p>
								<a href="retweet_traitement?num_tweet='.$res['num_tweet'].'"'.'><img src="Images/retweet.png" class="image2" /></a>
								<p class="retweet" >'.$res['compteur_retweet'].'</p>
								<img src="Images/message.png" class="image3" />
								<p class="comment" >'.$res['compteur_comments'].'</p>
							</div>
								<div class="commentaire_conteneur" style="margin-top: 50px;">
								<div class="conteneur_commentaire_poste">
								<p>'.$data5['Prenom']." ".$data5['Nom'].' a commenté ce poste </p>
								<p id="contenu_int_commentaire">'.$data6['comment'].'</p>
								</div>
								
								
								</div>
								<form method="POST" style="display:inline;flex-direction:row;justify-content:center;align-items:flex-end; margin-left:0px; margin-top:20px;" action="message_traitement.php?num_tweet='.$res['num_tweet'].'" id="form_comment">	
									<input type="text" name="commentaire" class="commentaire" placeholder="Laissez un commentaire à '.$data3['Prenom'].' !"/>
									<input  type="submit" name="submit_comment" value="Commenter !" id="envoi_comment" />
									
								</form>			
								
					</div>
					
					
			</div>';
			
			
			
			}
			
			else {print '<div id="conteneur_newsfeed">
				<a href="profil.php?num_tweet='.$res['num_tweet'].'" ><img src=Images/'."'".$data3["imageprofil"]."'".'/></a>
					<div id="contenu_droit">
						<p id="nom_profil">'.$data3['Prenom']." ".$data3['Nom'].'</p>
							<p id="contenu_int">'.$res['poste'].'</p>
							<div class="image_like">	
								<a href="like_traitement.php?num_tweet='.$res['num_tweet'].'"'.'><img src="Images/like.png" class="image1" /></a>	
								<p class="like">'.$res['compteur_like'].'</p>
								<a href="retweet_traitement.php?num_tweet='.$res['num_tweet'].'"'.'><img src="Images/retweet.png" class="image2" /></a>
								<p class="retweet" >'.$res['compteur_retweet'].'</p>
								<img src="Images/message.png" class="image3" />
								<p class="comment" >'.$res['compteur_comments'].'</p>
							</div>
							<form style="display:inline;flex-direction:row;justify-content:center;align-items:flex-end; margin-left:0px;margin-top:20px;" method="POST" action="message_traitement.php?num_tweet='.$res['num_tweet'].'" id="form_comment">	
									<input type="text" name="commentaire" class="commentaire" placeholder="Laissez un commentaire à '.$data3['Prenom'].' !"/>
									<input  type="submit" name="submit_comment" value="Commenter !" id="envoi_comment" />
									
								</form>		
					</div>
			</div>';}
			}
			
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

