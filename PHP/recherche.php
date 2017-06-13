

<?php
    include('header_accueil.php');
    $id=$_SESSION['ID'];

?>
    <form method="post">

    <p> 
    <label for="recheche"> Ajouter une video(youtube):</label>
    <br>
    <br>

    <input type="text" class="form-control" name="recherche" value="<?php if (isset($_POST['recherche'])) echo htmlspecialchars($_POST['recherche']);?>"placeholder= "recherche" role="combobox" data-testid="search_input" />
    
        <br>

    
   <input type="submit" name="nouvelrecherche" value="Nouvel recherche" />
        
        <?php 
        $liste=array();
        //if(isset($_POST['nouvelrecherche'])){ 
    
                if(!empty($_POST['recherche'])){ 
                $recherche = htmlspecialchars($_POST['recherche']);
            ?>
        
                <!--RECHECHE PERSONNE   -->
                
                <?php
                $sql='SELECT prenom ,nom FROM profil';
                $req = $bdd->query($sql)  ; 
                while($row=$req->fetch()){
                ?>
                    
                        <?php
                            echo($row['prenom']); 
                            echo " ";
                            echo($row['nom']);
                        array_push($liste, $row['prenom']);
                        ?>
                <?php
                }
                $req->closeCursor();
                ?>
                    
                    
                   
                    
                    
                  <!--RECHECHE PAGE--> 
               
                <?php
                $sql='SELECT nompage FROM page';
                $req = $bdd->query($sql)  ; 
                while($row=$req->fetch()){
            
                            echo($row['nompage']); 
                            array_push($liste, $row['nompage']);

                }
                $req->closeCursor();
             
                $sql='SELECT nomevenement FROM evenement';
                $req = $bdd->query($sql)  ; 
                while($row=$req->fetch()){
                ?>
                    
                        <?php
                            echo($row['nomevenement']); 
                        array_push($liste,row['nomevenement']);
                        ?>
                
                <?php

                }
                $req->closeCursor();
                ?>    
                
        
        
        <?php       
        }
        
        echo json_encode($liste);
        
        ?>
      </p>
</form>








