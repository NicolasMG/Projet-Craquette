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

if(isset($_POST['envoi'])){ // si le bouton envoi a été cliqué
        if(!empty($_POST['nom'])){ // si le champ nom a été rempli
            $nom = $_POST['nom']; // stocker la valeur qu'il contient dans une variable
            if(!empty($_POST['prenom'])){ // si le champ prenom a été rempli
                $prenom = $_POST['prenom']; // stocker la valeur qu'il contient dans une variable
                if(!empty($_POST['adresse'])){ 
                    $adresse = $_POST['adresse']; 
                    if(!empty($_POST['mail'])){ // si le champ mail a été rempli
                        $mail = $_POST['mail']; // stocker la valeur qu'il contient dans une variable
                        if(!empty($_POST['date de naissance'])){ 
                            $date = $_POST['date de naissance']; 
                            if(!empty($_POST['promo'])){ 
                                $promo = $_POST['promo']; 
                                if(!empty($_POST['filiere'])){ 
                                    $filiere = $_POST['filiere']; 
                                    
                                 
                                $insertion = $bdd->prepare('INSERT INTO profil VALUES("'.$nom.'","'.$prenom.'","'.$adresse.'","'.$mail.'","'.$date.'","'.$promo.'","'.$filiere.'","'.$date.'")'); // préparation de la requête d'insertion dans la base de données
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

 <a href='profil.php'><button type="submit" class="btn">Inscription</button></a>