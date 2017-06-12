<?php
    include('header_accueil.php');
       try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); 
    }
    catch(Exception $e){ 
        die('Erreur : '.$e->getMessage()); 
    }
            $mail=$_SESSION['mail'];
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
                            </a>
                        </li>
                        <?php 
                            }
                           $req->closeCursor();
                        ?>


                </ul>
                <div class="btn-pages">
                    <a href="creepage.php"><button type="submit" class="btn" name="newpage">Créer une page</button></a>
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
                            <a href="evenement.php?nom=<?php echo $row['nomevenement'];?>"> <?php echo($row['nomevenement']); ?>
                            </a>
                        </li>
                        <?php 
                            }
                           $req->closeCursor();
                        ?>
                </ul>
                 <a href="creeevenement.php"><button type="submit" class="btn" name="newevenement">Créer un evenement</button></a>
            </div>
        </div>
    </div>
    <div id="contenu_centre">
        <div id="filactualite">
            <div id="conteneur_du_post">

                <div id="conteneur_du_post_2">

                    <img class="img-circle" src="Images/profil.png" />


                    <form method="post" action="traitement_news.php">
                        <textarea class="form-control" cols="100" row='10' name="message" placeholder="Quoi de neuf ?"></textarea>
                        <input class="form-control" value="Craquetter" type="submit" name="craquetter"/>
                    </form>
                </div>
            <?php include ('news_accueil.php') ; ?>
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
                            <?php echo($row['nomgroupe']); ?>
                        </a>
                    </li>
                    
                    <?php 
                        }
                        $req->closeCursor();
                    ?>
            
            </ul>
            
           
            <a href="creegroup.php"><button type="submit" class="btn" name="newgroupe">Créer un groupe</button></a>
        </div>
    </div>
    <div id="calendrier">
        <div class="calendrier">
            <script type="text/javascript">
                calendrier();
                    
                
                                    

            </script>
        </div>
        <div>
       <p><a href="https://www.e-services.uha.fr/">E-service UHA</a></p> 
       <p><a href="http://www.ensisa.uha.fr/">ENSISA</a></p> 
        
        </div>
    </div>
     
    
</div>