<?php
    include('header_profil.php');
    $nom=$_GET['nom'];
?>
<section>
    <br><br><br><br>
        Remplisez uniquement les champs que vous souhaiter modifier
    <br>

    <form class="form-horizontal" method="post" action="traitementmodifevenement.php?nom=<?php echo $nom;?>" enctype="multipart/form-data">
          <!--<form class="form-horizontal" method="post" action="traitement.php" >-->
        <div>
            <label for="couvertureevenement">
						Photo de couverture:
            </label>
					<!--<input type="text" class="input-medium search-query" class="form-control" name="imagecouverture" placeholder= "Chemin pour l'image" />-->
            <input type="file" name="couvertureevenement" id="couvertureevenement"/>
                    <input type="hidden" name="MAX_FILE_SIZE" value="12345">
        </div>
              
        <div>
            <label for="profilevenement">
						Photo de profil:
            </label>
					<!--<input type="text" class="input-medium search-query" class="form-control" name="imageprofil" placeholder= "Chemin pour l'image" />-->
            <br>
            <input type="file" name="profilevenement" id="profilevenement"/>
            <input type="hidden" name="MAX_FILE_SIZE" value="12345">              
        </div>

        <div class="form-group">
            <label for="nom">
						Nom de l'évenement:
            </label>
            <input type="text" class="input-medium search-query" name="nom" placeholder= "Votre nom d'évenement" />  
        </div>
        
        <div class="form-group">
            <label for="date">
						Date de l'évenement:
            </label>
            <input type="date" class="input-medium search-query" name="date" placeholder= "aaaa-mm-jj" />  
        </div>
        
        <div class="form-group">
            <label for="heure">
						Heure de l'évenement:
            </label>
            <input type="time" class="input-medium search-query" name="heure" placeholder= "hh:mm" />  
        </div>
                
        <div class="form-group">
            <label for="lieu">
						Lieu de l'évenement:
            </label>
            <input type="text" class="input-medium search-query" name="lieu" placeholder= "Lieu de votre d'évenement" />  
        </div>
        
        <div class="form-group">
            <label for="commentaire">
						Déscription de l'évenement:
            </label>
            <input type="textarea" class="input-medium search-query" name="commentaire" placeholder= "activité ambiance" />  
        </div> <!--modif taille-->
              
              
        <input type="submit" value="Appliquer" name="modif"/>
        <br>
        <br>
    </form>
</section>