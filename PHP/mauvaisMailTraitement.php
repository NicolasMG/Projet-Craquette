<?php
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }
	
    include('header_non_co.php');
	
    // $reponse2 = $bdd->query('SELECT * FROM profil ORDER BY id DESC'); 
?>

		
		<section style="text-align:center;"> <!-- Contenu principal de la page -->
	
            <h2>Inscription</h2>
            <p style="color:red;">* Merci d'utiliser l'addresse mail fourins par l'ENSISA </p>
            <p style="color:red;">* Ou bien contacter L'ENSISA en tant qu'ancien élève pour être rajouté à la liste </p>
            <form class="form-horizontal" method="post" action="traitement.php" >

                <div class="form-group">
					<label for="nom">
						Nom:
					</label>
                    <div style="display:inline;">
					   <input type="text" class="form-control" style="width:250px; display:inline;" name="nom" placeholder= "Votre nom" />  
                    </div>
				</div>
                
                <div class="form-group">
					<label for="prenom">
						Prénom:
					</label>
                    <div style="display:inline;">
					   <input type="text" class="form-control" style="width:250px; display:inline;" name="prenom" placeholder= "Votre prénom" />
                    </div>
                </div>
                
                <div class="form-group">
					<label for="mail">
						Mail:
					</label>
                    <div style="display:inline;">
					   <input type="email" class="form-control" style="width:250px; display:inline;" name="mail" placeholder= "Votre email" />
                    </div>
				</div>
                
          
				<p>
                <label for="filiere">
						Filiere:
					</label>
				<select class="form-control" style="width:250px; display:inline;" name="filiere">
					<option value="IR"> IR </option>
					<option value="AS"> AS </option>
                    <option value="TF"> TF</option>
                    <option value="Méca"> Méca </option>
                    <option value="Fip"> FIP</option>
                    <option value="enseignant"> enseignant</option>
                    <option value="autre"> autre</option>    
				</select>
                </p>
                <p>
                    <label for="promo">
						Année d'etude:
					</label>
                    <select class="form-control" style="width:250px; display:inline;" name="promo">
                        <option value="1A">1A</option>
                        <option value="2A">2A</option>
                        <option value="3A">3A</option>
                        <option value="sortie d'ecole"> sortie d'ecole</option>
                        <option value="autre"> autre</option>
                    </select>
                </p>
                
                
                
                <div class="form-group">
					<label for="datenaissance">
						Date de naissance:
					</label>
                    <div style="display:inline;">
					   <input type="date" class="form-control" style="width:250px; display:inline;" name="datenaissance" placeholder="année-mois-jour" />
                    </div>
				</div>
				
                <div class="form-group">
					<label for="MDP">
						Mot de passe:
					</label>
                    <div style="display:inline;">
					   <input type="password" class="form-control" style="width:250px; display:inline;" name="MDP" placeholder= "Votre mot de passe" />
                    </div>
				</div>
                
                 <div class="form-group">
					<label for="MDPconfirmation">
						Confirmation de mot de passe(6 caractéres minimum):
					</label>
                    <div style="display:inline;">
					   <input type="password" class="form-control" style="width:250px; display:inline;" name="MDPconfirmation" placeholder= "Confirmer votre mot de passe" />
                    </div>
				</div>              
                <input type="submit" style="width:100px; display:inline; margin-right:15px;" class="form-control" name="inscription"/>
                <form  method="post" action="inscription.php">
                    <input class="form-control" style="display:block; position:absolute; width:170px; display:inline; " value="Effacer" type="submit" name="modif"/>
                </form>
			</form>
            
</section>             
    
 <?php 

    include('footer.php'); 
?>