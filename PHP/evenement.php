<?php
   
    include('header_accueil.php');
	
	
	$DBhost = "localhost";
	$DBuser = "root";
	$DBpass = "";
	$DBname = "codingcage";
	
	try {
		$DBcon = new PDO("mysql:host=$DBhost;dbname=$DBname",$DBuser,$DBpass);
		$DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $ex){
		die($ex->getMessage());
	}
	
	
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
        
        $pseudo = htmlspecialchars($_POST['nomevenement']);
        if(preg_match('~[#[{}\];]~', $pseudo))
        { 
            echo "Seul les caractères alpha-numérique et le _ sont acceptés";
            $pbnom="creeevenement.php";
            echo "<script>window.location = "."'".$pbnom."'"."</script>";
        }
        //Si tout est OK
        
        
        
        
        $reponse=$bdd->prepare('Select nomevenement From groupe Where nomevenement="'.$nom.'"');
        $nom=htmlentities($_POST['nomevenement']);
        $reponse->execute(array('.$nom.'=>htmlspecialchars($_POST['nomevenement'])));
        $reponse2=$reponse->fetch();

        $_GET['nom'] =htmlspecialchars($_POST['nomevenement']);                           
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

                $heure=htmlspecialchars($_POST['heure']);
                echo $heure;
            }
            
            $lieu="NULL";
            if(!empty($_POST['lieu'])){

                $lieu=htmlspecialchars($_POST['lieu']);   
            }
            
            $commentaire="NULL";
            if(!empty($_POST['commentaire'])){

                $commentaire=htmlspecialchars($_POST['commentaire']);   
            }
  
            $insertion = $bdd->prepare('insert into evenement values("'.$nom.'","'.$id.'","'.$date.'","'.$heure.'","'.$lieu.'","'.$commentaire.'","'.$couverture.'","'.$profil.'")'); 
            $insertion->execute(); 
			
			$address="evenement.php?nom=";
												$address.=$nom;
												$idef=4000;
												$idef=$idef+1;
												$insertion2 = $DBcon->prepare('INSERT INTO tbl_posts VALUES("'.$idef.'","'.$nom.'","'.$address.'")');
												$insertion2->execute();
			
            
            $bonsite="evenement.php?nom=$nom";
            echo "<script>window.location = "."'".$bonsite."'"."</script>";
        }
                  
    
    }else{
        echo "il faut choisir un nom";
        $pbnom="creeevenement.php";
        echo "<script>window.location = "."'".$pbnom."'"."</script>";
        
    }
}
//echo ($_GET['nom']);

 $nom=htmlspecialchars($_GET['nom']);  ?>
<section id="section_profil">
    <div id="Page">
        <div id="photosduprofil">
                <img alt="image" style="height:270px; width:851px;"id="PhotoDeCouverture" src="<?php 
                        $response =$bdd->query('SELECT couvertureevenement FROM evenement WHERE nomevenement="'.$nom.'"'); 
                        $row = $response->fetch();
                        echo($row['couvertureevenement']);                                              
                                                 ?>">

                <img alt="image" id="PhotoDeProfil" src="<?php 
                        $response =$bdd->query('SELECT profilevenement FROM evenement WHERE nomevenement="'.$nom.'"'); 
                        $row = $response->fetch();
                        echo($row['profilevenement']);               
                                             ?>" >  
                <?php $nom = htmlspecialchars($_GET['nom']);//affichage du nom
                        $id=$_SESSION['ID'];
        
                        $reponse=$bdd->prepare('Select nomevenement From evenement Where createur="'.$id.'" AND nomevenement="'.$nom.'"');

                        $nom=htmlspecialchars($_GET['nom']);
                        $reponse->execute(array('.$nom.'=>htmlspecialchars($_GET['nom'])));
                        $reponse2=$reponse->fetch();
                        //$_GET['nom'] =$_POST['nompage'];                           
                        if($reponse2){  
                        ?>
                <form  method="post" action="modifevenement.php?nom=<?php echo $nom;?>">
                        <input class="form-control" style="display:block; position:absolute; width:170px; display:inline; left:680px; top:280px;" value="Modifier l'évènement" type="submit" name="modif"/>
                </form>
                    <?php
                        }
                    ?>
            
                <form  method="post" action="participe.php?nom=<?php echo $nom;?>">
                     <?php   
                    
                        $nom = htmlspecialchars($_GET['nom']);
                        $id=$_SESSION['ID'];
        
                        $reponse=$bdd->prepare('Select nomevenement From vientevenement Where idutil="'.$id.'" AND nomevenement="'.$nom.'"');

                        $nom=htmlspecialchars($_GET['nom']);
                        $reponse->execute(array('.$nom.'=>htmlspecialchars($_GET['nom'])));
                        $reponse2=$reponse->fetch();                          
                        if(!$reponse2){  
                    ?>
                    
                        <input class="form-control" style="display:block; position:absolute; width:170px; display:inline; left:490px; top:280px;" value="Je participe" type="submit" name="participe"/>
                    
                    <?php }else{ ?>
                    
                        <input class="form-control" style="display:block; position:absolute; width:170px; display:inline; left:490px; top:280px;" value="Je ne participe plus" type="submit" name="modif"/>
                    
                    <?php } ?>
                </form>
                <p style="display:block; position:absolute; left:25%; top:88%;font-weight: bold; color:black; font-size:20px;"><?php echo $_GET['nom']; ?>  
        </div>
        <div style="display:inline-block;" id="PanneauGauche">
                <div id="Information">
                    <div id="Infogenerale">
                           <?php $nom=htmlspecialchars($_GET['nom']); ?>
                    
                     
                        <p><h2 style="font-size:20px;" >Information sur l'événement :</h2></p>
  

                    
                        <p>Date : <?php  $response =$bdd->query('SELECT date FROM evenement WHERE nomevenement="'.$nom.'"'); 
                                            $row = $response->fetch();

                                            echo(htmlspecialchars($row['date']));
                        ?></p>
                    
                    
                        
                    
                        <p>Heure : <?php  $response =$bdd->query('SELECT heure FROM evenement WHERE nomevenement="'.$nom.'"'); 
                                            $row = $response->fetch();

                                            echo(htmlspecialchars($row['heure']));
                        ?></p>
                        
                    
                        <p>Lieu : <?php  $response =$bdd->query('SELECT lieu FROM evenement WHERE nomevenement="'.$nom.'"'); 
                                            $row = $response->fetch();

                                            echo(htmlspecialchars($row['lieu']));
                        ?></p>
                    
                        
                        <p>Déscription :<?php  $response =$bdd->query('SELECT commentaire FROM evenement WHERE nomevenement="'.$nom.'"'); 
                                            $row = $response->fetch();

                                            echo(htmlspecialchars($row['commentaire']));
                    
                        ?>
                        </p>
                        <p><h2 style="font-size:20px;" ><?php 
                            $reponse = $bdd->query('select count(idutil) FROM  vientevenement WHERE nomevenement="'.$nom.'"'); 
                            $row=$reponse->fetch();  

                            echo htmlspecialchars($row[0]);
                
                            
                            ?>   participant(s)</h2></p>
                         <ul>  
                   <?php       
                        $id=$_SESSION['ID'];
                        $sql='SELECT distinct idutil FROM vientevenement Where nomevenement="'.$nom.'"';
                        $req = $bdd->query($sql)  ; 


                        while($row=$req->fetch()){

                            $idutil=htmlspecialchars($row['idutil']);
                           

                            ?>
                        <li> 
                            <a href="profilami.php?id=<?php echo $idutil;?>"> <?php $response =$bdd->query('SELECT prenom FROM profil WHERE id="'.$idutil.'"'); 
                                            $row = $response->fetch();

                                            echo(htmlspecialchars($row['prenom'])); 
                                            echo " ";
                                            $response =$bdd->query('SELECT nom FROM profil WHERE id="'.$idutil.'"'); 
                                            $row = $response->fetch();
                                            echo(htmlspecialchars($row['nom']));
                                
                                ?>
                            </a>
                        </li>
                        <?php 
                            }
                           $req->closeCursor();
                        ?>
                </ul>
                     
                
                    

                  
                          
                    </div>
                </div>
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

