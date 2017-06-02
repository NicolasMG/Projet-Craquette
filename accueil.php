
<?php
    include('entete.php');
       try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }
        
    session_start();
    $mail=$_SESSION['mail'];
?>

<div class="inlineblock">
    <div id="contenu_gauche">  
        <div id="profil">
            <a href='profil.php'><img style="display:block; position:absolute; left:-1.5%; top:-1%; width:91%"  alt="couverture" title="couverture" src="<?php 
                    $response =$bdd->query('SELECT imagecouverture FROM profil WHERE email="'.$mail.'"'); 
                    $row = $response->fetch();
                    echo($row['imagecouverture']);                                              
                                             ?>"></a>
          <!--  <a href='profil.php'><img style="display:block; position:absolute; left:-1.5%; top:-1%; width:91%" src="Images/couverture.jpg" alt="couverture" title="couverture" /></a>-->
            <a href='profil.php'><img class="img-circle" style="display:block; position:absolute; left:5%; top:4%; width:37%; height:12%;"  alt="photo_profil" title="photo_profil" src="<?php 
                    $response =$bdd->query('SELECT imageprofil FROM profil WHERE email="'.$mail.'"'); 
                    $row = $response->fetch();
                    echo($row['imageprofil']);               
                                         ?>" >  </a>
       <!-- <a href='profil.php'><img class="img-circle" style="display:block; position:absolute; left:5%; top:4%; width:33%; height:12%;" src="Images/photo_profil.jpg" alt="photo_profil" title="photo_profil"/></a>-->
            <p style="display:block; position:absolute; left:12.5%; top:2.5%;font-weight: bold; color:white;">Jean-Michel LeSaumon</p>
            <a href="deconnexion.php" ><button type="submit" class="btn" style="display:block; position:absolute; left:50%; top:15%;">Se déconnecter</button></a>
        </div>
        <div id="groupes">
            <ul>Groupes
                <li>Groupe 1</li>
                <li>Groupe 2</li>
                <li>Groupe 3</li>  
            </ul>
            <ul>Pages    
                <li>Pages 1</li>
                <li>Pages 2 avec un nom long</li>
                <li>Pages 3</li>
            </ul>
             <ul>Evenements    
                <li>Evenement 1</li>
                <li>Evenement 2</li>
                <li>Evenement 3</li>
            </ul>
        </div>
    </div>
    <div id="contenu_centre">
        
        <div id="filactualite">
               <div id="conteneur_du_post">
				
				<div id="conteneur_du_post_2">
					
					<img src="Images/profil.png" />
					
					
					<form method="post" action="traitement2.php">
						<textarea cols="46" row='8' name="message" placeholder="Quoi de neuf ?"></textarea>
						<input value="Craquetter" type="submit" name="craquetter"/>
					</form>
				</div>
			<?php include ('news_accueil.php') ; ?>
			</div>   
        </div>
    </div>


    <div id="contenu_droite">
        <div id="amis">
            <p>Groupe Ensisa</p>
            <p>Groupe Enscmu</p>
            <p>Groupe Potes</p>
            <button type="submit" class="btn" style="display:block; position:absolute; left:17%; top:15%;">Créer un groupe</button>
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

    




