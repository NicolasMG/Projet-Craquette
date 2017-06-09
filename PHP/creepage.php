<?php 
    include('header_profil.php');

    
?>
<section>
    <p><br><br><br><br></p>
    <h4>Crée une page</h4>

    <form method="post" action="page.php" enctype="multipart/form-data">
        
     <p> 
    <label for="nompage">Choisisez le nom de la page:</label>
        
    
        <br>
    <input type="text" class="input-medium search-query" name="nompage" placeholder="nom de la page" /> 
         
    </p>
        <br><br>
                
     <div>
            <label for="imagecouverture">
						Photo de couverture:
            </label>
                  <input type="file" name="imagecouverture" id="imagecouverture"/>
                    <input type="hidden" name="MAX_FILE_SIZE" value="12345">
    </div>
        
        
         <div>
            <label for="imageprofil">
						Photo de profil:
            </label>
                  <input type="file" name="imageprofil" id="imageprofil"/>
                    <input type="hidden" name="MAX_FILE_SIZE" value="12345">
    </div>
        
        <input type="submit" value="Cree page" name="creepage"/>
           
    </form> 

        <br>
</section>