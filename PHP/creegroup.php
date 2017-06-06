<?php 
    include('header.php');
    
    
   // echo("Crée un group d'ami(e)s");
    $action="groupe.php"
?>
<section>
    <p><br><br><br><br></p>
    <h4>Crée un groupe d'ami(e)s</h4>

    <form method="post" action="profilgroupe.php" enctype="multipart/form-data">
        
     <p> 
    <label for="nomgroupe">Choisisez le nom du groupe:</label>
        
    
        <br>
    <input type="text" class="input-medium search-query" name="nomgroupe" placeholder="nom du groupe" /> 
         
         <?php 
         ///////////
         /*
         $nomgroupe=$_POST['nomgroupe'];
         $reponse=$bdd->prepare('Select nomgroupe From groupe Where nomgroupe="'.$nomgroupe.'"');
         $nomgroupe=htmlentities($_POST['nomgroupe']);
         $reponse->execute(array('.$nomgroupe.'=>$_POST['nomgroupe']));
         $reponse2=$reponse->fetch();
                                    
         if(!$reponse2){
             echo "Se nom est deja prit il faut en choisir un autre";
             $action="creegroup.php";
        }
        */
          //////////                         
         ?>
         
    </p>
        <br><br>
        
        <!--
            <label for="couverturegroupe">Choisisez la photo de couverture:</label>
        <br>
    <input type="text" class="input-medium search-query" name="couverturegroupe" placeholder= "photo de couverture" /> 
        <br>
        -->
                
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