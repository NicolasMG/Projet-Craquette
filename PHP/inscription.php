<?php
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }

    include('header_non_co.php');
	
?>
<section id="section_profil">
            <form class="form-horizontal" method="post" action="traitement.php" enctype="multipart/form-data">
                <h2  style="text-align:center;">Inscription</h2>
                <p  style="text-align:center;">Tous les champs sont obligatoires</p>
                <div class="form-group">
					<label  style="width:200px;" class="col-sm-2 control-label" for="prenom">
						Prénom:
					</label>
                    <div class="col-sm-10" style="float:none;">
					   <input type="text" class="form-control" style="width:200px; display:inline;" name="prenom" placeholder= "Votre prénom" />
                    </div>
                </div>
                
                <div class="form-group">
					<label style="width:200px;" class="col-sm-2 control-label" for="nom">
						Nom:
					</label>
                    <div class="col-sm-10" style="float:none;">
					   <input type="text" class="form-control" style="width:200px; display:inline;"  name="nom" placeholder= "Votre nom" />  
                    </div>
				</div>
                
                <div class="form-group">
					<label style="width:200px;" class="col-sm-2 control-label" for="mail">
						Mail:
					</label>
                    <div class="col-sm-10" style="float:none;">
					   <input type="email" class="form-control" style="width:200px; display:inline;" name="mail" placeholder= "Votre email" />
                    </div>
				</div>
                    
              
            <p>
                <label style="width:200px;" class="col-sm-2 control-label" style="padding-right:25px;" for="filiere">
						Filiere:
				</label>
				<select class="form-control" style="width:200px;" name="filiere">
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
                <label style="width:200px;" class="col-sm-2 control-label" style="padding-right:25px;" for="promo">
                    Année d'etude:
                </label>
                <select class="form-control" style="width:200px;" name="promo">
                    <option value="1A"> 1A</option>
                    <option value="2A"> 2A</option>
                    <option value="3A"> 3A</option>
                    <option value="sortie d'ecole"> sortie d'ecole</option>
                    <option value="autre"> autre</option>
                </select>
            </p>
              
              
                
                <div class="form-group">
					<label style="width:200px;" class="col-sm-2 control-label" for="datenaissance">
						Date de naissance:
					</label>
                    <div class="col-sm-10" style="float:none;">
					   <input type="date" class="form-control" style="width:200px; display:inline;" name="datenaissance" placeholder= "année-mois-jour" />
                    </div>
				</div>
                

                <div class="form-group">
                    <label style="width:200px;" class="col-sm-2 control-label" for="MDP"> 
                        Mot de passe : (6 caractères minimum)
                    </label>

                    <div class="col-sm-10" style="float:none;">
                        <input type="password" class="form-control" style="width:200px; display:inline;" name="MDP" placeholder= "Mot de passe" />                    
                    </div>
                </div>
                <div class="form-group">
                    <label  style="width:200px;" class="col-sm-2 control-label" for="MDPconfirmation"> 
                       Confirmer mot de passe :
                    </label>
                    <div class="col-sm-10" style="float:none;">
                        <input type="password" class="form-control" style="width:200px; display:inline;" name="MDPconfirmation" placeholder= "Mot de passe" />                    
                    </div>
                </div>
            
            <div class="btn_center">
            <input type="submit" style="width:100px; display:inline; margin-right:15px;" class="form-control" name="inscription"/>
            <form  method="post" action="inscription.php">
                <input class="form-control" style="width:120px; text-align:center; display:inline;" value="Effacer" type="submit" name="modif"/>
            </form>
                </div>
    </form>
            
 <?php 

    include('footer.php'); 
?>