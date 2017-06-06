<?php
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root','');
    }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
    session_start();
    $mail=$_SESSION['mail'];
    $idef=$_SESSION['ID'];
    $sel=S_SESSION['MDPS'];
    
    $sql=$bdd->prepare('SELECT email, motDePasse, Id FROM profil WHERE email="'.$mail.'"');
    $sql->execute();
    $basePerso = $sql->fetch();

    if($basePerso["email"] == $mail && $basePerso["motDePasse"] == $sel && $basePerso["Id"] == $idef) {
        //AUTORISATION D'ETRE SUR LA PAGE
        
        //
        ?>
        <p><br><br><br></p>
<?php
   
    include('header_profil.php');
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root','');
    }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
        
    session_start();
    $mail=$_SESSION['mail'];
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
            <a href='modifprofil.php'><button style="left:62%; top:34%;" type="submit" class="btn">Mettre à jour mon profil</button></a>
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
                        <p><h2 style="font-size:20px;" >A propos :</h2></p>

                        <p>Nom : <?php  $response =$bdd->query('SELECT nom FROM profil WHERE email="'.$mail.'"'); 
                                            $row = $response->fetch();
                                            echo($row['nom']);

                        ?> 
                       <p>Prénom : <?php $response = $bdd->query('SELECT prenom FROM profil WHERE email="'.$mail.'"'); 
                                            $row = $response->fetch();
                                            echo($row['prenom']); 
                            ?> </p>
                        <p>Filière : <?php  $response =$bdd->query('SELECT filiere FROM profil WHERE email="'.$mail.'"'); 
                                            $row = $response->fetch();
                                            echo($row['filiere']);
                        ?></p>
                        <p>Promo : <?php  $response =$bdd->query('SELECT promo FROM profil WHERE email="'.$mail.'"'); 
                                            $row = $response->fetch();
                                            echo($row['promo']);
                        ?></p>

                        <p>Adresse mail : <?php  
                                            echo($mail);
                        ?></p>
                         <p>Date de naissance : <?php  $response =$bdd->query('SELECT datenaissance FROM profil WHERE email="'.$mail.'"'); 
                                            $row = $response->fetch();
                                            echo($row['datenaissance']);
                        ?></p>
                        <p>Compétences :</p>
                        <p>CV : <a href="Documents/Mon%20CV.txt">Mon CV</a></p>    
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
        
        //

<?php
    }
    else {
        //SORTIR DE LA PAGE : genre peut etre vider $_SESSION et renvoyer sur la page de connexion
        session_unset();
        $droitconnexion="./connexion.php";
        echo "<script>window.location = "."'".$droitconnexion."'"."</script>";
    }


    //REMARQUE: Header non inclu
?>






