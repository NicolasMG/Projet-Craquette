<?php 
    include('header_profil.php');
    
    
   
?>
<section>
    <p><br><br><br><br></p>
    <h4>Crée un evenement</h4>

    <form method="post" action="evenement.php" enctype="multipart/form-data">
        
        <p> 
            <label for="nomevenement">Choisisez le nom de l'evenement:</label>
            <br>
            <input type="text" class="input-medium search-query" name="nomevenement" placeholder="nom de l'evenement" />
        </p>
        
        <p>
            <label for="date">Choisisez le jour:</label>
            <br>
            <input type="date" class="input-medium search-query" name="date" placeholder="aaa-mm-jj" />
        </p>
        
         <p>
            <label for="heure">Choisisez l'heure:</label>
            <br>
            <input type="time" class="input-medium search-query" name="heure" placeholder="HH:MM" />
        </p>
        
        
        <p>
            <label for="lieu">Choisisez le lieu de l'événement:</label>
            <br>
            <input type="text" class="input-medium search-query" name="lieu" placeholder="lieu de l'evenement" />
        </p>
        
        <p>
            <label for="commentaire">Décrivez votre évenement:</label>
            <br>
            <input type="textarea" class="input-medium search-query" name="lieu" placeholder="activités, ambiance..." />
        </p><!-- arranger taille de text    -->
        
        <br><br>
        <div>
            <label for="couvertureevenement">
						Photo de couverture:
            </label>
                <input type="file" name="couvertureevenement" id="couvertureevenement"/>
                <input type="hidden" name="MAX_FILE_SIZE" value="12345">
        </div>
        
        
         <div>
            <label for="profilevenement">
						Photo de profil:
            </label>
                <input type="file" name="profilevenement" id="profilevenement"/>
                <input type="hidden" name="MAX_FILE_SIZE" value="12345">
        </div>
        
            <input type="submit" value="Cree événement" name="creeevenement"/>
           
    </form> 
    <br>
</section>