<p><br><br><br></p>
<?php
   
    include('header_groupe.php');
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }
        
    session_start();
    $mail=$_SESSION['mail'];
    //$imageprofil=$bdd->query('SELECT imageprofil FROM profil WHERE email="'.$mail.'"');
    //$photoprofil="Images/Cigogne%20proposition%20logo%201.png";

    //$photocouverture="Images/Portrait_Unfallen_a.png";
?>


    <div class="vide_gaucheprofil" style="display:inline-block;"></div>
    <div style="display:inline-block;" id="Page">
        <div id="photosduprofil">
                <img style="height:315px; width:851px;"id="PhotoDeCouverture" src="<?php 
                        $response =$bdd->query('SELECT imagecouverture FROM profil WHERE email="'.$mail.'"'); 
                        $row = $response->fetch();
                        echo($row['imagecouverture']);                                              
                                                 ?>">





                <img id="PhotoDeProfil" src="<?php 
                        $response =$bdd->query('SELECT imageprofil FROM profil WHERE email="'.$mail.'"'); 
                        $row = $response->fetch();
                        echo($row['imageprofil']);               
                                             ?>" >  
            <p style="display:block; position:absolute; left:3%; top:35%;font-weight: bold; color:white; font-size:20px;"><?php $response = $bdd->query('SELECT nom FROM profil WHERE email="'.$mail.'"'); 
                                        $row = $response->fetch();
                                        echo($row['nom']); 
                        ?>  <?php  $response =$bdd->query('SELECT prenom FROM profil WHERE email="'.$mail.'"'); 
                                        $row = $response->fetch();
                                        echo($row['prenom']);
                ?>
        </div>
        <div style="display:inline-block;" id="PanneauGauche">
                <div id="Information">
                    <div id="Infogenerale">
                        <p><h2 style="font-size:20px;" >Membres du groupe :</h2></p>

                        <p>membre 1 <?php  $response =$bdd->query('SELECT nom FROM profil WHERE email="'.$mail.'"'); 
                                            $row = $response->fetch();
                                            echo($row['nom']);


                            ?> <a class="active" href="traitementremovegroupe.php"><span class="glyphicon glyphicon-remove"></span></a>
</p>

                       <p>membre 2 <?php $response = $bdd->query('SELECT prenom FROM profil WHERE email="'.$mail.'"'); 
                                            $row = $response->fetch();
                                            echo($row['prenom']); 
                            ?> <a class="active" href="traitementremovegroupe.php"><span class="glyphicon glyphicon-remove"></span></a></p>

                        <p>membre 3 <?php  $response =$bdd->query('SELECT filiere FROM profil WHERE email="'.$mail.'"'); 
                                            $row = $response->fetch();
                                            echo($row['filiere']);
                        ?><a class="active" href="traitementremovegroupe.php"><span class="glyphicon glyphicon-remove"></span></a></p>

                        <p>membre 4 <?php  $response =$bdd->query('SELECT promo FROM profil WHERE email="'.$mail.'"'); 
                                            $row = $response->fetch();
                                            echo($row['promo']);
                        ?><a class="active" href="traitementremovegroupe.php"><span class="glyphicon glyphicon-remove"></span></a></p>

                        <p>membre 5 <?php  
                                            echo($mail);
                        ?><a class="active" href="traitementremovegroupe.php"><span class="glyphicon glyphicon-remove"></span></a></p>
                    
                        <p>membre 6 <?php  $response =$bdd->query('SELECT datenaissance FROM profil WHERE email="'.$mail.'"'); 
                                            $row = $response->fetch();
                                            echo($row['datenaissance']);
                        ?><a class="active" href="traitementremovegroupe.php"><span class="glyphicon glyphicon-remove"></span></a></p>

                        <p>membre 7 <a class="active" href="traitementremovegroupe.php"><span class="glyphicon glyphicon-remove"></span></a></p>
                        <p>membre 8 <a class="active" href="traitementremovegroupe.php"><span class="glyphicon glyphicon-remove"></span></a></p>    
                        <a href='gestionmembres.php'><button style="left:30.2%; top:95%;" type="submit" class="btn">Gérer des membres</button></a>


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

    <div class="vide_droitprofil" style="display:inline-block;"></div>


<?php include('footer.php'); ?>