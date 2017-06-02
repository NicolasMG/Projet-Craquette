<?php 
    include('entete.php');
    
    
   // echo("Crée un group d'ami(e)s");

?>
<section>
    <p><br><br><br><br></p>
    <h4>Crée un group d'ami(e)s</h4>
    <form method="post"action="traitementgroup.php">
        
        
    <label for="nomgroup">Choisisez le nom du groupe:</label>
        <br>
    <input type="text" class="input-medium search-query" name="nomgroup" placeholder= "nom" /> 
        <br><br>
        
        
            <label for="couverturegroup">Choisisez la photo de couverture:</label>
        <br>
    <input type="text" class="input-medium search-query" name="couverturegroup" placeholder= "photo de couverture" /> 
        
        
            <label for="profilgroup">Choisisez la photo de profil:</label>
        <br>
    <input type="text" class="input-medium search-query" name="profilgroup" placeholder= "photo de profil" /> 
        
        <br><br>
        
        <a href="traitementgroup.php"><button type="submit" class="btn" name="creegroup">Crée le groupe</button></a>
    </form> 

        <br>
</section>