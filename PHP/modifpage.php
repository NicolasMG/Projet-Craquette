
<?php
    include('header_profil.php');
    $nom=$_GET['nom'];
?>
<section>
    <br><br><br><br>
        Remplisez uniquement les champs que vous souhaiter modifier
<br>

<form class="form-horizontal" method="post" action="traitementmodifpage.php?nom=<?php echo $nom;?>" enctype="multipart/form-data">
          <!--<form class="form-horizontal" method="post" action="traitement.php" >-->
<div>
					<label for="imagecouverture">
						Photo de couverture:
					</label>
					<!--<input type="text" class="input-medium search-query" class="form-control" name="imagecouverture" placeholder= "Chemin pour l'image" />-->
                  <input type="file" name="imagecouverture" id="imagecouverture"/>
                    <input type="hidden" name="MAX_FILE_SIZE" value="12345">
				</div>
              
              <div>
					<label for="imageprofil">
						Photo de profil:
					</label>
					<!--<input type="text" class="input-medium search-query" class="form-control" name="imageprofil" placeholder= "Chemin pour l'image" />-->
                  <br>
                    <input type="file" name="imageprofil" id="imageprofil"/>
                    <input type="hidden" name="MAX_FILE_SIZE" value="12345">
                    
                  <?php /*
                        mkdir('fichier2/1',0777, true);
                        $nom=md5(uniqid(rand(),true));  
                        $resultat=move_uploaded_file($_FILES['imageprofil']['tmp_name'], $nom);
                        if($resultat){echo "coucou";}
                        */
                    ?>
                  
                  
				</div>
              
              
              
              
                <div class="form-group">
					<label for="nom">
						Nom de notre page:
					</label>
					   <input type="text" class="input-medium search-query" name="nom" placeholder= "Votre nom de page" />  
				</div>
              
              
                <input type="submit" value="Appliquer" name="modif"/>
              <br>
              <br>
    
</section>