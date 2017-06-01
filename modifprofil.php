<!DOCTYPE html>
<?php
    session_start();
    $mail = $_SESSION['ID'];
   //$mail="rachel.noireau@uha.fr";
   // echo($mail);
    
    include('header.php');
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); 
    }
    catch(Exception $e){ 
        die('Erreur : '.$e->getMessage()); 
    }
?>



<form class="form-horizontal" method="post" action="traitementmodif.php" >
          <form class="form-horizontal" method="post" action="traitement.php" >
             
                <div class="form-group">
					<label for="nom">
						Nom:
					</label>
					<input type="text" class="input-medium search-query" name="nom" placeholder= "Votre nom" />  
				</div>
                
                <div>
					<label for="prenom">
						Prénom:
					</label>
					<input type="text" class="input-medium search-query" name="prenom" placeholder= "Votre prénom" />
                </div>
                
                <div>
					<label for="mail">
						Mail:
					</label>
					<input type="email" class="input-medium search-query" class="form-control" name="mail" placeholder= "Votre email" />
				</div>
 
                
                <div>
					<label for="datenaissance">
						Date de naissance:
					</label>
					<input type="date" class="input-medium search-query" name="datenaissance" placeholder= "jour/mois/année" />
				</div>
				
                <div>
					<label for="MDP">
						Mot de passe:
					</label>
					<input type="password" class="input-medium search-query" name="MPD" placeholder= "Votre mot de passe" />
				</div>
                
    
    
     <input type="submit" value="Appliquer" name="modif"/>
    
</form>
                
         
