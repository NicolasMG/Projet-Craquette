<!DOCTYPE html>
<?php
    include('protection_session.php');
    //session_start(); Mise en commentaire
    $mail = $_SESSION['mail'];
   //$mail="rachel.noireau@uha.fr";
   // echo($mail);
    
    include('header_accueil.php');
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); 
    }
    catch(Exception $e){ 
        die('Erreur : '.$e->getMessage()); 
    }
?>

		<section style="text-align:center;">
        <h4 style="margin-bottom:20px; padding-left:80px;">
            Remplisez uniquement les champs que vous souhaitez modifier
        </h4>
        <form class="form-horizontal" method="post" action="traitementmodif.php" enctype="multipart/form-data">
            <form  class="form-horizontal" method="post" action="traitement.php" >
                
             
              
                <div class="form-group">
					<label class="col-sm-2 control-label" for="imagecouverture">
						Photo de couverture:
					</label>
                    <input style="display:inline;" type="file" name="imagecouverture" id="imagecouverture"/>
                    <input type="hidden" name="MAX_FILE_SIZE" value="12345">
                </div>
              
                <div class="form-group">
					<label class="col-sm-2 control-label" for="imageprofil">
						Photo de profil:
					</label>
					<!--<input type="text" class="input-medium search-query" class="form-control" name="imageprofil" placeholder= "Chemin pour l'image" />-->
                    <input style="display:inline;" type="file" name="imageprofil" id="imageprofil"/>
                    <input type="hidden" name="MAX_FILE_SIZE" value="12345">
         
                  
				</div>
                

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
				
                 <div>
					<label class="col-sm-2 control-label" for="commentaire">
						Commentaire: 
					</label>
                     <div class="col-sm-10">
					<textarea  class="form-control" name="commentaire" rows="5" cols="100" style="width:500px;" placeholder= "Decrivez vous..." >
                    </textarea>
                     </div>
                </div>
    
    <input style="margin-top:180px; width:110px; margin-left:200px;" class="form-control" type="submit" value="Appliquer" name="modif"/>
    
    </form>
  
         
