<?php 
include ('header_accueil.php');
$id=$_SESSION['ID'];
$idutil=$_GET['idutil'];
?>


<section>
<!--    <form method="post">
    <label class="col-sm-2 control-label" for="message">
				Ecrivez votre message: 
    </label>
    <input type="textarea" class="input-medium search-query" name="message" value="<?php if (isset($_POST['message'])) echo htmlentities($_POST['message']);?>" placeholder= "message" /> 
    <br>
    <div>
       
    <br>
    <div class="col-sm-10">
       <!-- <textarea  class="form-control" name="message" rows="10" cols="300" style="width:500px;" placeholder= "Ecrivez votre message...." >
        </textarea>-->
    </div>
    <br><br><br><br><br>

        
   
        
        
        
        
    </div>
</section>
    <form method="post" action="traitementmessage.php?idutil=<?php echo $idutil ; ?>" enctype="multipart/form-data">
        <div class="form-group">
            <label class="col-sm-2 control-label" for="imageenvoie">
                envoyer une image
            </label>
            <input style="display:inline;" type="file" name="imageenvoie" id="imageenvoie"/>
            <input type="hidden" name="MAX_FILE_SIZE" value="12345">
        </div>

         <textarea cols="46" row='10' name="message" placeholder="Quoi de neuf ?"></textarea>
          <input class="form-control" value="Craquetter" type="submit" name="craquetter"/>
   </form>
<?php        
if(!isset($_GET['id']))
    $req = "SELECT idutil1,mp,format from message WHERE (idutil1='".$id."' AND idutil2='".$idutil."') OR (idutil1='".$idutil."' AND idutil2='".$id."') ORDER BY message.id DESC limit 50"; //pas sur idutil1
else
    $req = "SELECT idutil1,mp,format FROM message WHERE id>'".addslashes($_GET['id'])."' ORDER BY id LIMIT 1";//pas sur util 1
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
    print '<div id="conteneur_newsfeed">
				<a href="profilami.php?id='.$res['idutil1'].'"><img class="img-circle" alt="phtode votre ami" src="'.$idutil.'"/></a>
					<div id="contenu_droit">
						<p id="nom_profil"> '.$prenom.' '.$nom.'
                        </p>
				        <p id="contenu_int">'.$res['mp'].'</p>	
					</div>
			</div>';
    
    }
        if($format=="image"){
    
        print '<div id="conteneur_newsfeed">
				<a href="profilami.php?id='.$res['idutil1'].'"><img class="img-circle" alt="phtode votre ami" src="'.$idutil.'"/></a>
					<div id="contenu_droit">
						<p id="nom_profil"> '.$prenom.' '.$nom.'
                        </p>
				        <img height=100px width=100px alt="image" id="contenu_int" src='.$res['mp'].'>	
					</div>
			</div>';
        }
}
    



?>   
    
    
    
    
