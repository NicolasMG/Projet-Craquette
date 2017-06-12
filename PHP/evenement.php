<?php
   
    include('header_accueil.php');
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }
  
    //session_start();
    $mail=$_SESSION['mail'];
    $id=$_SESSION['ID'];


//CREATION DE L'EVENEMENT
if(isset($_POST['creeevenement'])){ 
	if(!empty($_POST['nomevenement'])){
        
        $nom = htmlspecialchars($_POST['nomevenement']);
        $id=$_SESSION['ID'];
        
        $reponse=$bdd->prepare('Select nomevenement From groupe Where nomevenement="'.$nom.'"');
        $nom=htmlentities($_POST['nomevenement']);
        $reponse->execute(array('.$nom.'=>htmlspecialchars($_POST['nomevenement'])));
        $reponse2=$reponse->fetch();
        $_GET['nom'] =$_POST['nomevenement'];                           
        if($reponse2){
            echo "Se nom est deja prit il faut en choisir un autre";
            $pbnom="creeevenement.php";
            echo "<script>window.location = "."'".$pbnom."'"."</script>";
        }else{
            $couverture="Images/imagesgroupecouverture.jpg";
            if(!$_FILES['couvertureevenement']['error']>0){
                if(!empty($_FILES['couvertureevenement'])){ 
                     $imagecouverture = $_FILES['couvertureevenement']; 
                   
                    $nom1=md5(uniqid(rand(),true)); 
                    $couverture="Images/$nom1";
                    $resultat=move_uploaded_file($_FILES['couvertureevenement']['tmp_name'], $couverture);
                }
            }
        
            $profil="Images/imagegroupeprofil.jpg";
             if(!$_FILES['profilevenement']['error']>0){
                 if(!empty($_FILES['profilevenement'])){ 
                    $imagecouverture = $_FILES['profilevenement']; 
                   
                     $nom1=md5(uniqid(rand(),true)); 
                    $profil="Images/$nom1";
                    $resultat=move_uploaded_file($_FILES['profilevenement']['tmp_name'], $profil);
                }
             }
            
            $date="2017-08-06"; //VOIR SI OBLIGATOIRE OU PAS
            if(!empty($_POST['date'])){
                $date=$_POST['date'];   
            }
            
            $heure="00:00:00";
            if(!empty($_POST['heure'])){
                $heure=$_POST['heure'];  
                echo $heure;
            }
            
            $lieu="NULL";
            if(!empty($_POST['lieu'])){
                $date=$_POST['lieu'];   
            }
            
            $commentaire="NULL";
            if(!empty($_POST['commentaire'])){
                $date=$_POST['commentaire'];   
            }
  
            $insertion = $bdd->prepare('insert into evenement values("'.$nom.'","'.$id.'","'.$date.'","'.$heure.'","'.$lieu.'","'.$commentaire.'","'.$couverture.'","'.$profil.'")'); 
            $insertion->execute(); 
            
            $bonsite="evenement.php?nom=$nom";
            echo "<script>window.location = "."'".$bonsite."'"."</script>";
        }
                  
    
    }else{
        echo "il faut choisir un nom";
        $pbnom="creeevenement.php";
        echo "<script>window.location = "."'".$pbnom."'"."</script>";
        
    }
}

 $nom= $_GET['nom'];  ?>
<section id="section_profil">
    <div id="Page">
        <div id="photosduprofil">
                <img style="height:270px; width:851px;"id="PhotoDeCouverture" src="<?php 
                        $response =$bdd->query('SELECT couvertureevenement FROM evenement WHERE nomevenement="'.$nom.'"'); 
                        $row = $response->fetch();
                        echo($row['couvertureevenement']);                                              
                                                 ?>">

                <img id="PhotoDeProfil" src="<?php 
                        $response =$bdd->query('SELECT profilevenement FROM evenement WHERE nomevenement="'.$nom.'"'); 
                        $row = $response->fetch();
                        echo($row['profilevenement']);               
                                             ?>" >  
                <form  method="post" action="modifevenement.php?nom=<?php echo $nom;?>">
                        <input class="form-control" style="display:block; position:absolute; width:170px; display:inline; left:680px; top:280px;" value="Modifier l'évènement" type="submit" name="modif"/>
                </form>
                <form  method="post" action="participe.php?nom=<?php echo $nom;?>">
                        <input class="form-control" style="display:block; position:absolute; width:170px; display:inline; left:490px; top:280px;" value="Je participe" type="submit" name="modif"/>
                </form>
                <p style="display:block; position:absolute; left:3%; top:35%;font-weight: bold; color:white; font-size:20px;"><?php echo $_GET['nom'];
                        ?>  
        </div>
        <div style="display:inline-block;" id="PanneauGauche">
                <div id="Information">
                    <div id="Infogenerale">
                        <p><h2 style="font-size:20px;" >Membres du groupe :</h2></p>
   
                        <!--<a href='gestionmembres.php'><button style="left:30.2%; top:95%;" type="submit" class="btn">Gérer des membres</button></a>-->
                
                    
                   <?php $nom=$_GET['nom']; ?>
                    
                     <div style="display:inline-block;" id="PanneauGauche">
                <div id="Information">
                    <div id="Infogenerale">
                        <p><h2 style="font-size:20px;" >Information sur l'événement :</h2></p>
  

                    
                        <p>Date : <?php  $response =$bdd->query('SELECT date FROM evenement WHERE nomevenement="'.$nom.'"'); 
                                            $row = $response->fetch();
                                            echo($row['date']);
                        ?></p>
                    
                    
                        
                    
                        <p>Heure : <?php  $response =$bdd->query('SELECT heure FROM evenement WHERE nomevenement="'.$nom.'"'); 
                                            $row = $response->fetch();
                                            echo($row['heure']);
                        ?></p>
                        
                    
                        <p>Lieu : <?php  $response =$bdd->query('SELECT lieu FROM evenement WHERE nomevenement="'.$nom.'"'); 
                                            $row = $response->fetch();
                                            echo($row['lieu']);
                        ?></p>
                    
                        
                        <p>Déscription :<?php  $response =$bdd->query('SELECT commentaire FROM evenement WHERE nomevenement="'.$nom.'"'); 
                                            $row = $response->fetch();
                                            echo($row['commentaire']);
                    
                        ?>
                        </p>
                        <p>CV : <a href="Documents/Mon%20CV.txt">Mon CV</a></p>    
                    </div>
                </div>
        </div>
                    
              
                    
                    
                    
                    
                    
                    
                    
                    
                    
   <?php  /*
       //POUR AJOUTER DES MEMBRES
    if(isset($_POST['ajoutmembre'])){ 
	   if(!empty($_POST['membre'])){ 
            $membre1=htmlspecialchars($_POST['membre']);
            $mail=$membre1;//peut etre a changer
            $nom = $_GET['nom'];
            $response =$bdd->query('SELECT id FROM profil WHERE email="'.$mail.'"'); 
            $row = $response->fetch();
            $id=($row['id']);
           
           
            //$nom = htmlspecialchars($_POST['nomgroupe']);
            //$id=$_SESSION['ID'];
        
            $reponse=$bdd->prepare('Select nomgroupe From groupe Where idutil="'.$id.'" AND nomgroupe="'.$nom.'"');
            $nom=htmlentities($_GET['nom']);
            $reponse->execute(array('.$nom.'=>htmlspecialchars($_GET['nom'])));
            $reponse2=$reponse->fetch();
            //$_GET['nom'] =$_POST['nomgroupe'];                           
            if(!$reponse2){
           
           
                $insertion2 = $bdd->prepare('insert into groupe values("'.$id.'","'.$nom.'","membre","NULL","NULL")'); 
                $insertion2->execute();
            }
        }
    }
*/
?>     
           <?php /*       
   //LISTE DES MEMBRES     
    $sql='SELECT distinct idutil FROM groupe Where nomgroupe="'.$_GET['nom'].'"';
     $req = $bdd->query($sql)  ;                
       //echo $_GET['nom'];   //ok          
     ?> 
                      
   <!--TABLEAUX DES AMIS-->        
<!--<table class="table table-bordered">
    <th><p class="text-error"> Membre du groupe</p></th>-->
    <ul> Membre(s)
             <?php //echo $nom;//ok ?>
            <?php while($row=$req->fetch()){
                $idutil=$row['idutil']; 
                //echo "coucou";
                $nom=$_GET['nom'];
            ?>
                
                <li>
                    <a href="profilami.php?id=<?php echo $idutil;?>">
                        <?php 
                            //echo "coucou";
                            $idutil=$row['idutil'];
                            $response = $bdd->query('SELECT prenom FROM profil WHERE id="'.$idutil.'"'); 
                            $row = $response->fetch();
                            echo($row['prenom']); 
                            echo(" ");
                            $response =$bdd->query('SELECT nom FROM profil WHERE id="'.$idutil.'"'); 
                            $row = $response->fetch();
                            echo($row['nom']);
                            //echo($idutil);

                        ?>
                
                    </a>
                    
                    
                    
                    
                    <?php
   
    
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }
  
    
?>

                   
                  
                            <a href="supprmembre.php?id=<?php echo $idutil;?>&amp;nom=<?php echo $_GET['nom']; ?>"> <span class="glyphicon glyphicon-remove"></span></a>
                    <?php //}  ?>
                </li>
               


        
    </ul>
    <?php }
    $req->closeCursor();
    ?>
     
      <?php  
                        ?>
       <form method="post">

    <p> 
    <label for="nomgroupe">Choisissez le(s) membre(s) à rajouter :</label>
        
        <br>
            <input type="text" class="input-medium search-query" name="membre" value="<?php if (isset($_POST['membre'])) echo htmlentities($_POST['membre']);?>"placeholder= "membre" /> 
        </p>    
        
        
        
     <p>   
   <input type="submit" name="ajoutmembre" value="Ajouter"/>
         
        
    </p>    

      <?php //} 
        */            ?>    
   
                    
                </div>
            </div>
        </div>
        <div id="PanneauDroit">
            <div id="conteneur_du_post">

                <div id="conteneur_du_post_2">

                    <img class="img-circle" src="Images/profil.png" />


                    <form method="post" action="traitement_news.php">
                        <textarea cols="46" row='10' name="message" placeholder="Quoi de neuf ?"></textarea>
                        <input class="form-control" value="Craquetter" type="submit" name="craquetter"/>
                    </form>
                </div>
            <?php include ('news_accueil.php') ; ?>
            </div>           
        </div>
     </section> 
</body>
</html>
