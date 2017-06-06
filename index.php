<?php 
//PAS CE HEADER

 try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }
?>
<!doctype html>
<?php
    //pour savoir a qui appartient la session et recuperer des donné
   // session_start();
   // $mail = $_SESSION['ID'];
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); 
    }
    catch(Exception $e){ 
        die('Erreur : '.$e->getMessage()); 
    }


?>

<html lang="fr">

	<head> <!-- en tête du fichier -->
		<meta charset="utf-8"/>
		<title>Craquette - Connexion</title>
		<link rel="stylesheet" href="PHP/CSS/bootstrap.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script type="text/javascript" src="PHP/JS/calendrier.js"></script>
	</head>
	<body>
		<header> <!-- header = en tête page -->

        <div style="height:50px;" class="topnav" id="myTopnav">
            <img style="padding-left:48%;" class="headerimg" src='PHP/Images/logo.png' />
        </div>



		</header>
		<section>
            
            
       <h2>Connexion</h2>

            <form class="form-horizontal" method="post" action="PHP/connexion.php" >
                
                <div>
                    
                    <label for="mail">Adresse Email :</label>
                    <input class="input-medium search-query" type="Email" name="mail" placeholder="prenom.nom@uha.fr" />
                    
                </div>
                <div>
                    
                    <label for="MDP">Mot de passe :</label>
                    <input class="input-medium search-query" type="password" name="MDP" 
                    placeholder="Mot de passe" />
                    
                </div>
                <p><a href="PHP/chgtmdp.php">Mot de passe oublié ?</a></p>                
                <p><a href="PHP/inscription.php">Pas de compte ? Inscrivez vous !</a></p>

                <a href='PHP/connexion.php'><button type="submit" class="btn">Se connecter</button></a>
                
            </form>

<?php

?>

    </section>
	</body>
</html>