<?php 

			try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); 
    }
    catch(Exception $e){ 
        die('Erreur : '.$e->getMessage()); 
    }
            $mail=$_SESSION['mail'];
$req2="select Prenom,Nom,imageprofil from profil where id=:id";
$req2=$bdd->prepare($req2);
$req2->execute(array('id'=>$_SESSION['ID']));
$data2=$req2->fetch();




			$req = "SELECT id,poste,compteur_like,compteur_retweet,num_tweet,retweeted FROM actualite ORDER BY num_tweet DESC limit 100";
			$req=$bdd->query($req) or die(print_r($bdd->errorInfo()));
			
		
				
				while($res = $req->fetch()){

				if ($res['retweeted']=="true"){
			print '<div id="conteneur_newsfeed">
				<a href="profil.php?num_tweet='.$res['num_tweet'].'"><img src=Images/'."'".$_SESSION["imageprofil"]."'".'/></a>
					<div id="contenu_droit1">
						<p id="nom_profil">'.$data2['Prenom']." ".$data2['Nom'].' a re-craqueter le poste de blabla </p>
							<p id="contenu_int_retweet">'.$res['poste'].'</p>
							
					</div>
			</div>';

			/*header("Location: http://localhost/newsfeed/fil_actualite.php");*/
			print '<div id="conteneur_newsfeed">
				<a href="profil.php?num_tweet='.$res['num_tweet'].'"><img class="img-circle" src=Images/'."'".$_SESSION["imageprofil"]."'".'/></a>
					<div id="contenu_droit">
						<p id="nom_profil">'.$data2['Prenom']." ".$data2['Nom'].'</p>
							<p id="contenu_int">'.$res['poste'].'</p>
							<div class="image_like">	
								<a href="like_traitement.php?num_tweet='.$res['num_tweet'].'"'.'><img src="Images/like.png" class="image1" /></a>	
								<p class="like">'.$res['compteur_like'].'</p>
								<a href="accueil.php?num_tweet='.$res['num_tweet'].'"'.'><img src="Images/retweet.png" class="image2" /></a>
								<p class="retweet" >'.$res['compteur_retweet'].'</p>
								<a href="message_traitement.php?num_tweet='.$res['num_tweet'].'"'.' ><img src="Images/message.png" class="image3" /></a>
							</div>
					</div>
			</div>';
			}
			
			else {print '<div id="conteneur_newsfeed">
				<a href="profil.php?num_tweet='.$res['num_tweet'].'" ><img class="img-circle" src=Images/'."'".$_SESSION["imageprofil"]."'".'/></a>
					<div id="contenu_droit">
						<p id="nom_profil">'.$data2['Prenom']." ".$data2['Nom'].'</p>
							<p id="contenu_int">'.$res['poste'].'</p>
							<div class="image_like">	
								<a href="like_traitement.php?num_tweet='.$res['num_tweet'].'"'.'><img src="Images/like.png" class="image1" /></a>	
								<p class="like">'.$res['compteur_like'].'</p>
								<a href="accueil.php?num_tweet='.$res['num_tweet'].'"'.'><img src="Images/retweet.png" class="image2" /></a>
								<p class="retweet" >'.$res['compteur_retweet'].'</p>
								<a href="message_traitement.php?num_tweet='.$res['num_tweet'].'"'.' ><img src="Images/message.png" class="image3" /></a>
							</div>
					</div>
			</div>';}
			}			
			
?>

