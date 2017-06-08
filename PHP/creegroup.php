<?php 
    include('header_profil.php');
    
    
   // echo("Crée un group d'ami(e)s");
    //$action="groupe.php"
?>
<section>
    <p><br><br><br><br></p>
    <h4>Crée un groupe d'ami(e)s</h4>

    <form method="post" action="profilgroupe.php?<?php echo $_POST['nomgroupe'];  ?>" enctype="multipart/form-data">
        
     <p> 
    <label for="nomgroupe">Choisisez le nom du groupe:</label>
        
    
        <br>
    <!--<input type="text" class="input-medium search-query" name="nomgroupe" placeholder="nom du groupe" /> -->
         
        
    <input type="text" class="input-medium search-query" name="nomgroupe" value="<?php if (isset($_POST['nomgroupe'])) echo htmlentities($_POST['nomgroupe']);?>"placeholder= "nom du groupe" /> 
         
         
    </p>
        <br><br>
        
                
     <div>
            <label for="couverturegroupe">
						Photo de couverture:
            </label>
                  <input type="file" name="couverturegroupe" id="couverturegroupe"/>
                    <input type="hidden" name="MAX_FILE_SIZE" value="12345">
    </div>
        
        
         <div>
            <label for="profilgroupe">
						Photo de profil:
            </label>
                  <input type="file" name="profilgroupe" id="profilgroupe"/>
                    <input type="hidden" name="MAX_FILE_SIZE" value="12345">
    </div>
        
        <input type="submit" value="Cree groupe" name="creegroupe"/>
           
    </form> 

        <br>
</section>