
<?php
    include('header_accueil.php');
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }
  
    $mail=$_SESSION['mail'];
    $id=$_SESSION['ID'];
//CREATION DU GROUPE
if(isset($_POST['creegroupe'])){ 
	if(!empty($_POST['nomgroupe'])){
        $pseudo = ($_POST['nomgroupe']);
        if(preg_match('~[#[{><}\];]~', $pseudo))
        { 
            echo "Seul les caractères alpha-numérique et le _ sont acceptés";
            $pbnom="creegroup.php";
            echo "<script>window.location = "."'".$pbnom."'"."</script>";
            break;
        }
        //Si tout est OK
        
        $nom = ($_POST['nomgroupe']);
        $id=$_SESSION['ID'];
        $reponse=$bdd->prepare('Select nomgroupe From groupe Where nomgroupe="'.$nom.'"');
        $nom=($_POST['nomgroupe']);
        $reponse->execute(array('.$nom.'=>($_POST['nomgroupe'])));
        $reponse2=$reponse->fetch();
        if($reponse2){
            echo "Ce nom est deja prit il faut en choisir un autre";
            $pbnom="creegroup.php";
            echo "<script>window.location = "."'".$pbnom."'"."</script>";
        }else{
            $couverture="Images/imagesgroupecouverture.jpg";
            if(!$_FILES['couverturegroupe']['error']>0){
                if(!empty($_FILES['couverturegroupe'])){ 
                    $imagecouverture = $_FILES['couverturegroupe']; 
                    $nom1=md5(uniqid(rand(),true)); 
                    $couverture=("Images/$nom1");
                    $resultat=move_uploaded_file($_FILES['couverturegroupe']['tmp_name'], $couverture);
                }
            }
            $profil="Images/imagegroupeprofil.jpg";
             if(!$_FILES['profilgroupe']['error']>0){
                 if(!empty($_FILES['profilgroupe'])){ 
                    $imagecouverture = $_FILES['profilgroupe']; 
                    $nom1=md5(uniqid(rand(),true)); 
                    $profil="Images/$nom1";
                    $resultat=move_uploaded_file($_FILES['profilgroupe']['tmp_name'], $profil);
                }
             }
            $insertion = $bdd->prepare('insert into groupe values("'.$id.'","'.$nom.'","administrateur","'.$profil.'","'.$couverture.'")'); 
            $insertion->execute(); 
            
            $bonsite="profilgroupe.php?nom=$nom";
            echo "<script>window.location = "."'".$bonsite."'"."</script>";
        }
                  
    
    }else{
        echo "il faut choisir un nom";
        $pbnom="creegroup.php";
        echo "<script>window.location = "."'".$pbnom."'"."</script>";
        
    }
}

    $nom= htmlspecialchars($_GET['nom']);  ?>
    <section id="section_profil">
            <div id="Page">
                <div id="photosduprofil">
                    <img style="height:270px; width:851px;"id="PhotoDeCouverture" src="<?php 
                        $response =$bdd->query('SELECT imagecouverture FROM groupe WHERE nomgroupe="'.$nom.'"'); 
                        $row = $response->fetch();
                        echo($row['imagecouverture']);                                              
                                                 ?>">

                    <img id="PhotoDeProfil" src="<?php 
                        $response =$bdd->query('SELECT imageprofil FROM groupe WHERE nomgroupe="'.$nom.'"'); 
                        $row = $response->fetch();
                        echo($row['imageprofil']);               
                                             ?>" >  
                    <form  method="post" action="modifgroupe.php?nom=<?php echo htmlspecialchars($nom);?>">
                        <input class="form-control" style="display:block; position:absolute; width:170px; display:inline; left:680px; top:280px;" value="Modifier le groupe" type="submit" name="modif"/>
                    </form>
                    <p style="display:block; position:absolute; left:25%; top:88%;font-weight: bold; color:black; font-size:20px;"><?php echo htmlspecialchars($_GET['nom']); ?> 
                    
        </div>
        <div id="PanneauGauche">
                <div id="Information" style="height:98%; overflow-y:scroll;">
                    <div id="Infogenerale">
                        <p><h2 style="font-size:20px;" >Membres du groupe :</h2></p>
   
                        <!--<a href='gestionmembres.php'><button style="left:30.2%; top:95%;" type="submit" class="btn">Gérer des membres</button></a>-->
                
                    
                    <?php $nom=$_GET['nom']; ?>
                                     
                    
   <?php
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

?>     
           <?php       
   //LISTE DES MEMBRES     
    $sql='SELECT distinct idutil FROM groupe Where nomgroupe="'.$_GET['nom'].'"';
     $req = $bdd->query($sql)  ;                
       //echo $_GET['nom'];   //ok          
     ?> 
                      
          
<!--<table class="table table-bordered">
    <th><p class="text-error"> Membre du groupe</p></th>-->
    <ul> 
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
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); 
    }
    catch(Exception $e){ 
        die('Erreur : '.$e->getMessage()); 
    }
  
    
?>
                    
                    
                    
                    <?php  
                /*
                    $request=$bdd->query('SELECT role From groupe Where idutil="'.$id.'" AND nomgroupe="'.$nom.'"' );
                    $row=$request->fetch();
                    $idtrouver=$row['role']; 
                    $ad="membre";
                    if(!$idtrouver==$ad){*/
                        ?>
                   
                  
                            <a href="supprmembre.php?id=<?php echo $idutil;?>&amp;nom=<?php echo $_GET['nom']; ?>"> <span class="glyphicon glyphicon-remove"></span></a>
                    <?php //}  ?>
                </li>
               


        
    
    <?php }
    $req->closeCursor();
    ?>
</ul>
       <form method="post">

    <p> 
        <label for="nomgroupe">Choisissez le(s) membre(s) à rajouter :</label>
    
        <input type="text" class="input-medium search-query" name="membre" value="<?php if (isset($_POST['membre'])) echo htmlentities($_POST['membre']);?>"placeholder= "membre" /> 
    </p>    
        
        
     <p>   
        <input type="submit" name="ajoutmembre" value="Ajouter"/> 
        
    </p>    
    
           
                   </div>
     
        </div>
        </div>
        <div id="PanneauDroit">
            <div id="conteneur_du_post">

                <div id="conteneur_du_post_2">

                    <img class="img-circle" src="Images/profil.png" />


                    <form method="post" action="traitement_news.php">
                        <textarea cols="46" row='10' name="message" placeholder="Quoi de neuf ?"></textarea>
                        <input style="width:100px;" class="form-control" value="Craquetter" type="submit" name="craquetter"/>
                    </form>
                </div>
            <?php include ('news_accueil.php') ; ?>
            </div>           
        </div>

        </div>

</section>

</body>
</html>