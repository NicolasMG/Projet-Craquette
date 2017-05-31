<?php
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }
?>


<?php
     $reponse2 = $bdd->query('SELECT * FROM profil ORDER BY id DESC'); 
?>
    

<!doctype html>
<html lang="fr">

	<head> <!-- en tête du fichier -->
		<meta charset="utf-8"/>
		<title>Craquette - Connexion</title>
		<link rel="stylesheet" href="bootstrap.css"/>
	</head>
	<body>
		<header> <!-- header = en tête page -->
            <p>
                <img src="Images/logo.jpg" alt="logo" title="Logo de Craquette" height=100px width=100px/>
            </p>
            <p>Craquette</p>
		</header>
		
		<section id="contenu"> <!-- Contenu principal de la page -->



<?php

if(isset($_POST['inscription'])){ // si le bouton envoi a été cliqué
        if(!empty($_POST['nom'])){ // si le champ nom a été rempli
            $nom = $_POST['nom']; // stocker la valeur qu'il contient dans une variable
            
            if(!empty($_POST['prenom'])){ 
                $prenom = $_POST['prenom'];     
                
                 if(!empty($_POST['adresse'])){ 
                     $adresse = $_POST['adresse']; 
                    
                    if(!empty($_POST['mail'])){ 
                        $mail = $_POST['mail'];
                        
                        if(!empty($_POST['datenaissance'])){ 
                            $date = $_POST['datenaissance'];
                            
                            if(!empty($_POST['promo'])){ 
                                $promo = $_POST['promo']; 
                                
                                if(!empty($_POST['filiere'])){ 
                                    $filiere = $_POST['filiere']; 
                                    
                                 
                                $insertion = $bdd->prepare('INSERT INTO profil VALUES("'.$nom.'","'.$prenom.'","'.$adresse.'","'.$mail.'","'.$date.'","'.$promo.'","'.$filiere.'","NULL")'); // préparation de la requête d'insertion dans la base de données
                                $insertion->execute();  // exécution de l'insertion
                            }
                        }
                    }
                }
            }
        }
    }
}
     

?>
            <p> 
            <br>
                Votre profil a bien été créé.
            
            </p>
 <a href='profil.php'><button type="submit" class="btn">Voir mon profil</button></a>
         <p><br></p> 
<?php
             echo '<p>'.$prenom.' '.$nom.', merci de nous rejoindre .</p>';          
            /* echo '<p>'.$promo.' '.$adresse.'</p>'; 
            echo'<p>'.$date.'</p>';*/
  include('footer.php');          
            
?>
