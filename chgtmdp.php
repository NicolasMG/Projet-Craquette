<?php include ('header.php'); 
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }
        
    session_start();
    $mail=$_SESSION['mail'];

?>

<form class="form-horizontal" method="post" action="traitementmodif.php" enctype="multipart/form-data">
          <form class="form-horizontal" method="post" action="traitement.php" >
                
              
              <div class="form-group">
					<label for="nouveaumdp">
						Nouveau mot de passe:
					</label>
					<input type="password" class="input-medium search-query" name="nouveaumdp" placeholder= "Mot de passe" />  
				</div>
                
                <div>
					<label for="confirmermdp">
						Confirmer nouveau mot de passe:
					</label>
					<input type="password" class="input-medium search-query" name="confirmermdp" placeholder= "Mot de passe" />
                </div>
            <a href='chgtmdpreussie'><button type="submit" class="btn" name="chgtmdpreussie">Confirmer</button></a>
              <br>

    </form>

<?php include ('footer.php'); ?>