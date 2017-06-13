<?php 
include ('header_accueil.php');
$id=$_SESSION['ID'];
$idutil=$_GET['idutil'];
$req2="select Prenom from profil where id=".$_GET['idutil'];
$req2=$bdd->prepare($req2);
$req2->execute(array('id'=>$_SESSION['ID']));
$data2=$req2->fetch();
?>


<section>
<?php if (isset($_POST['message'])) echo htmlentities($_POST['message']);?>
        
        
      <div id="contenu_centre">
        <div id="filactualite">
            <div id="conteneur_du_post">
				
				<div id="conteneur_du_post_2">
					
					<img class="img-circle" src="<?php echo $_SESSION['imageprofil'] ; ?> "/>
					<form method="post" action="traitementmessage.php?idutil=<?php echo $idutil ;?>" enctype="multipart/form-data">
                         
						<textarea class="form-control" cols="100" row='10' name="message" placeholder="Envoyez un message à <?php echo $data2['Prenom']; ?> !"></textarea>
                        
						<input class="form-control" style="margin-right:300px;" value="Envoyer" type="submit" name="craquetter"/>
                        <div style="width:120px;" class="form-group">
                            <input  style="margin-left:-150px; margin-top:-30px; width:400px;"  type="file" name="imageenvoie" id="imageenvoie"/>
                            <input type="hidden" name="MAX_FILE_SIZE" value="12345">
                        </div>
					</form>
					<!--<div id="fond"></div>
                      <a href="#" id="show"> <img src="Images/alarme.png" /> </a>
                      <script src="modal.js" type="text/javascript"></script>
                      <div id="modal" class="popup"></div>
				</div>-->

<?php        
if(!isset($_GET['id']))
    $req = "SELECT idutil2,idutil1,mp,format from message WHERE (idutil1='".$id."' AND idutil2='".$idutil."') OR (idutil1='".$idutil."' AND idutil2='".$id."') ORDER BY message.id DESC limit 50"; //pas sur idutil1
else
    $req = "SELECT idutil2,idutil1,mp,format FROM message WHERE id>'".addslashes($_GET['id'])."' ORDER BY id LIMIT 1";//pas sur util 1
$req=$bdd->query($req) or die(print_r($bdd->errorInfo()));
$first = true;
while($res = $req->fetch()){
    if($first){
        print '<script>setId('.$res['idutil1'].');</script>';
        $first = false;
    }
                $format=($res['format']);          
    
                $response =$bdd->query('SELECT imageprofil FROM profil WHERE id="'.$res['idutil1'].'"'); 
                $row = $response->fetch();
                $idutil=($row['imageprofil']);
                
                $response =$bdd->query('SELECT prenom FROM profil WHERE id="'.$res['idutil1'].'"'); 
                $row = $response->fetch();
                $prenom=($row['prenom']);
    
                $response =$bdd->query('SELECT nom FROM profil WHERE id="'.$res['idutil1'].'"'); 
                $row = $response->fetch();
                $nom=($row['nom']);
    
    if($format=="text"){
             print '<div id="conteneur_newsfeed" style="width:600px;margin-left:50px; ">
					<a href="profilami.php?id='.$res['idutil1'].'"><img class="img-circle" alt="photo de votre ami" src="'.$idutil.'"/></a>
                    <div id="contenu_droit">
						<p id="nom_profil" style="margin-bottom:20px;"> '.$prenom.' '.$nom.'
                        </p>
				        <p id="contenu_int" >'.$res['mp'].'</p>	
					</div>
                    
			 </div>';
    }
        if($format=="image"){
            
                print '<div id="conteneur_newsfeed" style="width:600px; margin-left:50px;">
                <a href="profilami.php?id='.$res['idutil1'].'"><img alt="phtode votre ami" src="'.$idutil.'"/></a>
					<div id="contenu_droit">
						<p id="nom_profil"  style="margin-bottom:20px;"> '.$prenom.' '.$nom.'
                        </p>
				        <img style="height:110px; width:110px; margin-top:-15px;" alt="image" id="contenu_int" src='.$res['mp'].'>	
					</div>
                    
			</div>';
            }
             
}
 echo "</div>
        </div>
    </div>
    </div>" ;  



?>   
    
    
    
    
