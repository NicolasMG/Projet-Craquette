<?php
include ('header_non_co.php'); 
/*
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }
        
    session_start();
    $mail=$_SESSION['mail'];
*/
?>
<form class="form-horizontal" method="post" action="chgtmdpreussie.php" enctype="multipart/form-data">         
                 <div>
					<label for="mail">
						Adresse Email : 
					</label>
					<input type="email" class="input-medium search-query" name="mail" placeholder= "Email" />  
				</div>
              
              <div>
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
                <div class="form-group">
                    <input type="submit" style="width:100px; display:inline;" class="form-control" name="Confirmer"/>
                </div>
                <br>

    </form>

<?php include ('footer.php'); ?>