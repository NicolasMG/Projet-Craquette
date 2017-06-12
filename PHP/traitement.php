<?php
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }
    include('header_non_co.php');
?>


<?php
        $sql=$bdd->prepare('SELECT max(Id) FROM profil ');
        $sql->execute();
        $id = $sql->fetch();
?>
    
<?php
$valideinscription="erreurinscription.php";
$message="Oups....une erreur c'est glisser dans votre formulaire d'inscription";
$bouton="Recommencer";
$massage2="il faut recommencer";

if(isset($_POST['inscription'])){ // si le bouton envoi a été cliqué
    
	if(!empty($_POST['nom'])){ // si le champ nom a été rempli
		$nom = htmlspecialchars($_POST['nom']); // stocker la valeur qu'il contient dans une variable
		
		if(!empty($_POST['prenom'])){
			$prenom = htmlspecialchars($_POST['prenom']);     
				
			if(!empty($_POST['mail'])){
				$mail = htmlspecialchars($_POST['mail']);
				
				if(!empty($_POST['datenaissance'])){
					$date = htmlspecialchars($_POST['datenaissance']);
					
					if(!empty($_POST['promo'])){ 
						$promo = htmlspecialchars($_POST['promo']); 
						
						if(!empty($_POST['filiere'])){
							$filiere = htmlspecialchars($_POST['filiere']);
                            
                            
                            $MDP=htmlspecialchars($_POST['MDP']);
                            $MDPC=htmlspecialchars($_POST['MDPconfirmation']);
                            
				            if(!empty($MDP) && !empty($MDPC)) {
                                
                                if(strlen($MDP)>5){ // taille du mot de passe
                                    if($MDP == $MDPC){ 
                                        $ide = $id[0] ; //id est auto incrementé se serai mieux
                                        $option = [
                                            $nom => $ide + 1,
                                            $prenom => $ide + 6,
                                        ];
                                        echo "<br>";
                                        //echo $MDP;
                                        $sel = password_hash($MDP,PASSWORD_DEFAULT, $option);


                                        $reponse=$bdd->prepare('Select email From profil Where email="'.$mail.'"');
                                        $mail=htmlentities($_POST['mail']);
                                        $reponse->execute(array('.$mail.'=>htmlspecialchars($_POST['mail'])));
                                        $reponse2=$reponse->fetch();

                                        if(!$reponse2){


                                            $idef = $ide +1 ;
                                            $insertion = $bdd->prepare('INSERT INTO profil VALUES("'.$idef.'","'.$nom.'","'.$prenom.'","'.$sel.'","'.$mail.'","'.$date.'","'.$promo.'","'.$filiere.'","NULL","NULL","Images/profilpardefaut.png","Images/couverturepardefaut.jpg","NULL")'); // préparation de la requête d'insertion dans la base de données
                                            $insertion->execute();  // exécution de l'insertion


                                            session_start();
                                            $_SESSION['mail']= $mail;
                                            $_SESSION['ID']=$idef;
                                            $_SESSION['MDPS']= $sel;

                                            $message="Votre profil a bien été créé.";
                                            $bouton="Voir mon profil";
                                            $valideinscription="profil.php";
                                            $message2= "merci de nous rejoindre";
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
     
            //session_start();
            //$_SESSION['mail']= $mail;
            
            
            
            /*
           $response =$bdd->query('SELECT nom FROM profil WHERE email="'.$mail.'"'); 
            $row = $response->fetch();
            echo($row['nom']); 
            */
            
            
          
?>       
<section style="text-align:center;">
    <br>
    <?php  echo($message); ?>
    <form  method="post" action="<?php echo $valideinscription;  ?>">
        <input class="form-control" style="width:170px; display:inline;" value="<?php echo $bouton; ?>" type="submit" name="modif"/>
    </form>
</section>

<?php
include ('footer.php');
?>
