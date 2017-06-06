<?php 
    include('header.php');
    
    
   // echo("Crée un group d'ami(e)s");
    $action="groupe.php"
?>
<section>
    <p><br><br><br><br></p>
    <h4>Crée un groupe d'ami(e)s</h4>

    <form method="post" action="<?php echo $action; ?> ">
        
     <p> 
    <label for="nomgroupe">Choisisez le nom du groupe:</label>
        
    
        <br>
    <input type="text" class="input-medium search-query" name="nomgroupe" placeholder="nom du groupe" value="<?php if (isset($_POST['nomgroupe'])) echo htmlentities($_POST['nomgroupe']);?>"/> 
           
         <?php 
         ///////////
         $nomgroupe=$_POST['nomgroupe'];
         $reponse=$bdd->prepare('Select nomgroupe From groupe Where nomgroupe="'.$nomgroupe.'"');
         $nomgroupe=htmlentities($_POST['nomgroupe']);
         $reponse->execute(array('.$nomgroupe.'=>$_POST['nomgroupe']));
         $reponse2=$reponse->fetch();
                                    
         if(!$reponse2){
             echo "Se nom est deja prit il faut en choisir un autre";
             $action="creegroup.php";
        }
          //////////                         
         ?>
         
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