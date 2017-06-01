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

<section>
<p>
    <br>
    <br>
    <br>
    Remplisez uniquement les champs que vous souhaiter modifier
<br>
</p>
<form class="form-horizontal" method="post" action="traitementmodif.php" >
          <form class="form-horizontal" method="post" action="traitement.php" >
                
              
              
              
              <div>
					<label for="imagecouverture">
						Photo de couverture:
					</label>
					<input type="text" class="input-medium search-query" class="form-control" name="imagecouverture" placeholder= "Chemin pour l'image" />
				</div>
              
              <div>
					<label for="imageprofil">
						Photo de profil:
					</label>
					<input type="text" class="input-medium search-query" class="form-control" name="imageprofil" placeholder= "Chemin pour l'image" />
				</div>
              
              
              
              
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
                    
              
            <p>
                <label for="filiere">
						Filiere:
					</label>
				<select name="filiere">
                    <option value="ne pas modifier"> ne pas modifier</option>
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
                    <label for="promo">
						Année d'etude:
					</label>
                    <select name="promo">
                        <option value="ne pas modifier"> ne pas modifier</option>
                        <option value="1A"> 1A</option>
                        <option value="2A"> 2A</option>
                        <option value="3A"> 3A</option>
                        <option value="sortie d'ecole"> sortie d'ecole</option>
                        <option value="autre"> autre</option>
                    </select>
                </p>
              
              
                
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
                
    
    <p><br></p>
     <input type="submit" value="Appliquer" name="modif"/>
    
    </form>
  
         
