<?php
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }
    include('header.php');
?>

<p><br><br><br><br><br><br><br><br><br><br><br></p>

<?php
        $sql=$bdd->prepare('SELECT max(Id) FROM profil ');
        $sql->execute();
        $id = $sql->fetch();


?>
    


<?php
$valideinscription="erreurinscription.php";
$message="Oups....une erreur c'est glisser dans votre formulaire d'inscription";
$bouton="recommencer";

if(isset($_POST['inscription'])){ // si le bouton envoi a été cliqué

	if(!empty($_POST['nom'])){ // si le champ nom a été rempli
		$nom = $_POST['nom']; // stocker la valeur qu'il contient dans une variable
		
		if(!empty($_POST['prenom'])){
			$prenom = $_POST['prenom'];     
				
			if(!empty($_POST['mail'])){
				$mail = $_POST['mail'];
				
				if(!empty($_POST['datenaissance'])){
					$date = $_POST['datenaissance'];
					
					if(!empty($_POST['promo'])){ 
						$promo = $_POST['promo']; 
						
						if(!empty($_POST['filiere'])){
							$filiere = $_POST['filiere'];
                            
                                //echo 'hello';
                            
                            $MDP=$_POST['MDP'];
                            $MDPC=$_POST['MDPconfirmation'];
                            
				            if(!empty($MDP) && !empty($MDPC)) {
                                
                                //echo ' ici ';
                                
                                if($MDP == $MDPC){ 
                                    $ide = $id[0] ; //id est auto incrementé se serai mieux
                                    $option = [
                                        $nom => $ide + 1,
                                        $prenom => $ide + 6,
                                    ];
                                    echo "<br>";
                                    echo $MDP;
                                    $sel = password_hash($MDP,PASSWORD_DEFAULT, $option);
                                                                 

                                    $reponse=$bdd->prepare('Select email From profil Where email="'.$mail.'"');
                                    $mail=htmlentities($_POST['mail']);
                                    $reponse->execute(array('.$mail.'=>$_POST['mail']));
                                    $reponse2=$reponse->fetch();
                                    
                                    if(!$reponse2){
                                        
                                      /*  echo "ca marche";
                                        echo "<br>";
                                        echo $ide +1;
                                        echo "<br>";
                                        echo $nom;
                                        echo "<br>";
                                        echo $prenom;
                                        echo "<br>";
                                        echo $sel;
                                        echo "<br>";
                                        echo $mail;
                                        echo "<br>";
                                        echo $date;
                                        echo "<br>";
                                        echo $promo;
                                        echo "<br>";
                                        echo $filiere;
                                        echo "<br>";*/
                                        
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
            
            echo($message);
            
          
?>        
    <p><br></p> 
    <a href='<?php echo $valideinscription;  ?>'><button type="submit" class="btn"><?php echo $bouton; ?></button></a>
    <p><br></p> 
<?php
             echo '<p>'.$prenom.' '.$nom.', merci de nous rejoindre .</p>';      //peut etre changer ça    
?>
