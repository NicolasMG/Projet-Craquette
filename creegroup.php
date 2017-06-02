<?php 
    include('entete.php');
    
    
    echo("Crée un group d'ami(e)s");

?>
<section>
    <form method="post">
    <label for="nomgroup">Choisisez le nom du groupe:</label>
    <input type="text" class="input-medium search-query" name="nom" placeholder= "nom" />  
    <button type="submit" class="btn" name="nomgroup">Confirmer le nom</button>
    </form>
        <?php
            if(!empty($_POST['nomgroup'])){ 
                echo("coucou");
            }
        ?>  


    <div class="form-group">
        <label for="membre">
            mail des personne a ajouter:
        </label>
        <input type="text" class="input-medium search-query" name="email" placeholder= "prenom.nom@uha.fr" />  
        <?php
        
        
        ?>
    </div>
</section>