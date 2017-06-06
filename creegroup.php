<?php 
    include('entete.php');
    
    
   // echo("Crée un group d'ami(e)s");

?>
<section>
    <p><br><br><br><br></p>
    <h4>Crée un groupe d'ami(e)s</h4>
    <form method="post" action="groupe.php">
        
     <p> 
    <label for="nomgroupe">Choisisez le nom du groupe:</label>
        <br>
    <input type="text" class="input-medium search-query" name="nomgroupe" placeholder= "nom du groupe" /> 
    </p>
        <br><br>
        
        
            <label for="couverturegroup">Choisisez la photo de couverture:</label>
        <br>
    <input type="text" class="input-medium search-query" name="couverturegroup" placeholder= "photo de couverture" /> 
        <br>
        
            <label for="profilgroup">Choisisez la photo de profil:</label>
        <br>
    <input type="text" class="input-medium search-query" name="profilgroup" placeholder= "photo de profil" /> 
        
        <br><br>
        <p>
        <input type="submit" name="creegroupe" value="Crée le groupe"/>
        </p>
    </form> 

        <br>
</section>