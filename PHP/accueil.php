<?php
    include('header_accueil.php');
       try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); 
    }
    catch(Exception $e){ 
        die('Erreur : '.$e->getMessage()); 
    }
            $mail=$_SESSION['mail'];


$req2="select Prenom,Nom,imageprofil from profil where id=:id";
$req2=$bdd->prepare($req2);
$req2->execute(array('id'=>$_SESSION['ID']));
$data2=$req2->fetch();
?>
<div class="contenu">
    <div id="contenu_gauche">  
        <div id="profil">
            <a href='profil.php'><img class="couverture" alt="couverture" title="couverture" src="<?php 
                    $response =$bdd->query('SELECT imagecouverture FROM profil WHERE email="'.$mail.'"'); 
                    $row = $response->fetch();
                    echo($row['imagecouverture']);                                              
                                             ?>"></a>
            <a href='profil.php'><img class="img-circle" alt="photo_profil" title="photo_profil" src="<?php 
                    $response =$bdd->query('SELECT imageprofil FROM profil WHERE email="'.$mail.'"'); 
                    $row = $response->fetch();
                    echo($row['imageprofil']);               
                                         ?>" >  </a>
            <p><?php $response = $bdd->query('SELECT prenom FROM profil WHERE email="'.$mail.'"'); 
                                        $row = $response->fetch();
                                        echo($row['prenom']); 
                        ?>  <?php  $response =$bdd->query('SELECT nom FROM profil WHERE email="'.$mail.'"'); 
                                        $row = $response->fetch();
                                        echo($row['nom']);
                    
                    
                    ?> </p>
        */            
            $reponse=$bdd->prepare('Select email From profil Where email= ? ');
            $reponse->execute(array($mail));
        */
        </div>
        <?php
                try{ 
                    $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); 
                }
                    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
                    die('Erreur : '.$e->getMessage()); 
                }
            ?>
        <div id="pages_events">
            <div id="pages">
               <ul><h4>Pages</h4>    
                    <?php       
                        $id=$_SESSION['ID'];
                        $sql='SELECT distinct nompage FROM page Where createur="'.$id.'"';
                        $req = $bdd->query($sql)  ; 


                        while($row=$req->fetch()){


                            ?>
                        <li> 
                            <a href="page.php?nom=<?php echo $row['nompage'];?>"> <?php echo($row['nompage']); ?>
                            </a><a href="supprpage.php?nom=<?php echo $row['nompage'];?>"> <span class="glyphicon glyphicon-remove"></span></a>
                        </li>
                        <?php 
                            }
                           $req->closeCursor();
                        ?>


                </ul>
                <div class="btn-pages">
                    <form  method="post" action="creepage.php">
                        <input class="form-control" value="Créer une page" type="submit" name="creepage"/>
                    </form>
                </div>
            </div>
            <div id="events">
                 <ul><h4>Evenements</h4>    
                   <?php       
                        $id=$_SESSION['ID'];
                        $sql='SELECT distinct nomevenement FROM evenement Where createur="'.$id.'"';
                        $req = $bdd->query($sql)  ; 


                        while($row=$req->fetch()){


                            ?>
                        <li> 
                            <a href="evenement.php?nom=<?php echo ($row['nomevenement']);?>"> <?php echo($row['nomevenement']); ?>
                            </a><a href="supprevenement.php?nom=<?php echo ($row['nomevenement']);?>"> <span class="glyphicon glyphicon-remove"></span></a>
                        </li>
                        <?php 
                            }
                           $req->closeCursor();
                        ?>
                </ul>
                <div class="btn-events">
                    <form  method="post" action="creeevenement.php">
                            <input class="form-control" value="Créer un evenement" type="submit" name="creeevenement"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="contenu_centre">
        <div id="filactualite">
            <div id="conteneur_du_post">
				
				<div id="conteneur_du_post_2">
					
					<img class="img-circle" src="<?php echo $_SESSION['imageprofil'] ; ?> "/>
					<form method="post" action="traitement_news.php">
						<textarea class="form-control" cols="100" row='10' name="message" placeholder="Quoi de neuf <?php echo $data2['Prenom']; ?> ?"></textarea>
						<input class="form-control" value="Craquetter" type="submit" name="craquetter"/>
					</form>
					<!--<div id="fond"></div>
                      <a href="#" id="show"> <img src="Images/alarme.png" /> </a>
                      <script src="modal.js" type="text/javascript"></script>
                      <div id="modal" class="popup"></div>
				</div>-->
			<?php include('news_accueil.php'); ?>			
			</div>
        </div>
    </div>
    </div>

     
     <?php
                try{ 
                    $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
                }
                    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
                    die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
                }
            ?>
        
    
    
    
    
    <div id="contenu_droite">
        <div id="groupes">
            <ul><h4>Groupes</h4>
                    
                <?php       
                    $id=$_SESSION['ID'];
                    $sql='SELECT distinct nomgroupe FROM groupe Where idutil="'.$id.'"';
                    $req = $bdd->query($sql)  ; 
        
                ?>    
        
        
                 <?php while($row=$req->fetch()){ 
                         
                    ?>
                    <li>
                        <a href="profilgroupe.php?nom=<?php echo $row['nomgroupe']; ?>">
                            <?php echo(htmlspecialchars($row['nomgroupe'])); ?>
                        </a>
                    </li>
                    
                    <?php 
                        }
                        $req->closeCursor();
                    ?>
            
            </ul>
            <div class="btn-groupes">
                    <form  method="post" action="creegroup.php">
                            <input class="form-control" value="Créer un groupe" type="submit" name="creegroup"/>
                    </form>
            </div>
        </div>
    </div>
    <div id="calendrier">
        <div class="calendrier">
            <script type="text/javascript">
                calendrier();
                    
                
                                    

            </script>
        </div>
        <div>
        <h3>Liens utiles : </h3>
            --
       <p><a href="https://www.e-services.uha.fr/" target="_blank">E-service UHA</a></p> 
            --
        <p><a href="http://www.ensisa.uha.fr/" target="_blank">ENSISA</a></p> 
            --
        <p><a href="http://edt.iariss.fr/" target="_blank">IARISS</a></p>
            --
        </div>
    </div>
     
    
</div>