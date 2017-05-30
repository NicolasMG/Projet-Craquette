<?php
    try{ // essaie
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }
?>


<?php
     $reponse2 = $bdd->query('SELECT * FROM profil ORDER BY id DESC');

    //include("header.php");
  
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
	
			<h2>Inscription</h2>
			<!--<form method="post" class="form-horizontal"> <!--raction="traitement.php"-->
				
                
            <form class="form-horizontal" method="post" action="traitement.php" >
             
                <!--method="post" raction="traitement.php-->
                <div class="form-group">
					<label for="nom">
						Nom:
					</label>
					<input type="text" class="input-medium search-query" name="nom" placeholder= "Votre nom" />
                    
				</div>
                
                <div class="form-group">
					<label for="prenom">
						Prénom:
					</label>
					<input type="text" class="input-medium search-query" name="prenom" placeholder= "Votre prénom" />
                </div>
				<div class="form-group">
					<label for="mail">
						Mail:
					</label>
					<input type="email" class="input-medium search-query" class="form-control" name="mail" placeholder= "Votre email" />
				</div>
           
				<p>
                <label for="mail">
						Filiere:
					</label>
				<select name="filiere">
					<option value="IR"> IR </option>
					<option value="AS"> AS </option>
                    <option value="TF"> TF</option>
                    <option value="Méca"> Méca </option>
                    <option vallue="Fip"> FIP</option>
                    <option value="enseignant"> enseignant</option>
                    <option value="autre"> autre</option>    
                    
				</select>
                </p>
                <p>
                    <label for="mail">
						Année d'etude:
					</label>
                    <select name="promo">
                        <option value="1A">1A</option>
                        <option value="2A">2A</option>
                        <option value="3A">3A</option>
                        <option value="sortie d'ecole"> sortie d'ecole</option>
                        <option value="autre"> autre</option>
                    </select>
                </p>
                
                
                
                <div class="form-group">
					<label for="date de naissance">
						Date de naissance:
					</label>
					<input type="text" class="input-medium search-query" name="date de naissance" placeholder= "jour/mois/année" />
				</div>
				
                <div class="form-group">
                    <label for="adresse">
                       Adresse:
                    </label>
                    <input type="text" class="input-medium search-query" name="adresse" placeholder="Votre adresse">
		
                </div>
				<p>
					 <a href='accueil.php'><button type="submit" name="inscription" class="btn">Inscription</button></a>
					 <a href='inscription.php'><button type="reset" class="btn">Effacer</button></a>
				
				</p>
                 <div class="form-group">
					<label for="bla">
						C'est fini <!--les bouton veulent pas s'afficher sinon-->
					</label> 
				</div>
			</form>
    
 <?php
   

    include('footer.php'); 
?>