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
<section id="section_modifprofil">
        <h4 style="margin-bottom:20px; padding-left:200px;">
            Inscription
        </h4>
            <form class="form-horizontal" method="post" action="traitement.php" enctype="multipart/form-data">
                <h2>Inscription</h2>

                <div class="form-group">
					<label class="col-sm-2 control-label" for="nom">
						Nom:
					</label>
                    <div class="col-sm-10"> 
					   <input type="text" class="form-control" style="width:250px;"  name="nom" placeholder= "Votre nom" />  
                    </div>
				</div>
                
                <div class="form-group">
					<label class="col-sm-2 control-label" for="prenom">
						Prénom:
					</label>
                    <div class="col-sm-10">
					   <input type="text" class="form-control" style="width:250px;" name="prenom" placeholder= "Votre prénom" />
                    </div>
                </div>
                
                <div class="form-group">
					<label class="col-sm-2 control-label" for="mail">
						Mail:
					</label>
                    <div class="col-sm-10">
					   <input type="email" class="form-control" style="width:250px;" name="mail" placeholder= "Votre email" />
                    </div>
				</div>
                    
              
            <p>
                <label class="col-sm-2 control-label" for="filiere">
						Filiere:
				</label>
				<select class="form-control" style="width:250px;" name="filiere">
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
                <label class="col-sm-2 control-label" for="promo">
                    Année d'etude:
                </label>
                <select class="form-control" style="width:250px;" name="promo">
                    <option value="ne pas modifier"> ne pas modifier</option>
                    <option value="1A"> 1A</option>
                    <option value="2A"> 2A</option>
                    <option value="3A"> 3A</option>
                    <option value="sortie d'ecole"> sortie d'ecole</option>
                    <option value="autre"> autre</option>
                </select>
            </p>
              
              
                
                <div class="form-group">
					<label class="col-sm-2 control-label" for="datenaissance">
						Date de naissance:
					</label>
                    <div class="col-sm-10">
					   <input type="date" class="form-control" style="width:250px;" name="datenaissance" placeholder= "année-mois-jour" />
                    </div>
				</div>
              
              
              <div class="form-group">
					<label class="col-sm-2 control-label" for="tel">
						Numero de telephone :
					</label>
                    <div class="col-sm-10">
					   <input type="text" class="form-control" style="width:250px;" name="tel" placeholder= "Votre numero" />
                    </div>
				</div>
                
                <input style="margin-top:180px; width:110px; margin-left:200px;" class="form-control" type="submit" name="inscription"/>

            
            
            <input type="submit" style="width:100px; display:inline;" class="form-control" name="inscription"/>
            <form  method="post" action="inscription.php">
                <input class="form-control" style="display:block; position:absolute; width:170px; display:inline; left:680px; top:280px;" value="Effacer" type="submit" name="modif"/>
            </form>
            
            
		<section> 
	
            <h2>Inscription</h2>
                
            <form class="form-horizontal" method="post" action="traitement.php" >
                    
                <div>
					<label for="prenom">
						Prénom *:
					</label>
					<input type="text" class="input-medium search-query" name="prenom" placeholder= "Votre prénom" />
                </div>
                
                
                <div class="form-group">
					<label for="nom">
						Nom *:
					</label>
                    <div style="display:inline;">
					   <input type="text" class="form-control" style="width:250px; display:inline;" name="nom" placeholder= "Votre nom" />  
                    </div>
				</div>
                
                
                <div>
					<label for="mail">
						Mail *:
					</label>
					<input type="email" class="input-medium search-query" class="form-control" name="mail" placeholder= "Votre email" />
				</div>
                
          
				<p>
                <label for="filiere">
						Filiere *:
					</label>
				<select name="filiere">
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
						Année d'etude *:
					</label>
                    <select name="promo">
                        <option value="1A">1A</option>
                        <option value="2A">2A</option>
                        <option value="3A">3A</option>
                        <option value="sortie d'ecole"> sortie d'ecole</option>
                        <option value="autre"> autre</option>
                    </select>
                </p>
                
                
                
                <div>
					<label for="datenaissance">
						Date de naissance *:
					</label>
					<input type="date" class="input-medium search-query" name="datenaissance" placeholder="année-mois-jour" />
				</div>
				
                <div>
					<label for="MDP">
						Mot de passe(6 caractéres minimum) * :
					</label>
					<input type="password" class="input-medium search-query" name="MDP" placeholder= "Votre mot de passe" />
				</div>
                
                 <div>
					<label for="MDPconfirmation">
						Confirmation de mot de passe *:
					</label>
					<input type="password" class="input-medium search-query" name="MDPconfirmation" placeholder= "Confirmer votre mot de passe" />
				</div>              
                <div >
				    <label>
                    <input type="submit" style="width:100px; display:inline;" class="form-control" name="inscription"/>
					 <a href='inscription.php'><button type="reset" class="btn">Effacer</button></a>
                        <p>*Champ obligatoire</p>
                    </label>
                </div>
			</form>
            
</section>             
    
 <?php 

    include('footer.php'); 
?>