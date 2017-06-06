<?php 
    include('entete.php');
    
    
   // echo("Crée une page");

?>
<section>
    <p><br><br><br><br></p>
    <h4>Crée une page</h4>
    <form method="post" action="page.php">
        
     <p> 
    <label for="nomgroupe">Choisisez le nom de la page:</label>
        <br>
    <input type="text" class="input-medium search-query" name="nompage" placeholder= "nom de la page" /> 
    </p>
        <br><br>
        
        
            <label for="couverturepage">Choisisez la photo de couverture:</label>
        <br>
    <input type="text" class="input-medium search-query" name="couverturepage" placeholder= "photo de couverture" /> 
        <br>
        
            <label for="profilpage">Choisisez la photo de profil:</label>
        <br>
    <input type="text" class="input-medium search-query" name="profilpage" placeholder= "photo de profil" /> 
        
        <br><br>
        <p>
        <input type="submit" name="creepage" value="Crée la page"/>
        </p>
    </form> 

        <br>
</section>