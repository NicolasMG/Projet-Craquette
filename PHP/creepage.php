<?php 
    include('header.php');

    
?>
<section>
    <p><br><br><br><br></p>
    <h4>Crée une page</h4>

    <form method="post" action="page.php" enctype="multipart/form-data">
        
     <p> 
    <label for="nompage">Choisisez le nom dela page:</label>
        
    
        <br>
    <input type="text" class="input-medium search-query" name="nompage" placeholder="nom de la page" /> 
         
    </p>
        <br><br>
                
     <div>
            <label for="couverturepage">
						Photo de couverture:
            </label>
                  <input type="file" name="couverturepage" id="couverturepage"/>
                    <input type="hidden" name="MAX_FILE_SIZE" value="12345">
    </div>
        
        
         <div>
            <label for="profilpage">
						Photo de profil:
            </label>
                  <input type="file" name="profilpage" id="profilpage"/>
                    <input type="hidden" name="MAX_FILE_SIZE" value="12345">
    </div>
        
        <input type="submit" value="Cree page" name="creepage"/>
           
    </form> 

        <br>
</section>